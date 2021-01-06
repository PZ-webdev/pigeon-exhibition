<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEditPigeonValidation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pigeon;
use App\Models\User;

use App\Notifications\NewPigeonNotification;
use Illuminate\Support\Facades\Notification;

class PigeonController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    protected function store(StoreEditPigeonValidation $request)
    {
        return $request->all();

    }


    public function allpigeons(){
       
        $id_user = Auth::id();
        $i = 1;

        $pigeons = Pigeon::all()->where('id_user', $id_user);

        return view("account.allPigeons", compact('pigeons', 'i'));
    }

    function addPigeon(){
        return view("account.addPigeon");
    }

  
    // function addPigeonPost(Request $request){
    function addPigeonPost(Request $request){
    
        $pigeon = new Pigeon;
        $id_user = Auth::id();

        $pigeon->ring_number = $request->ring_number;
        $pigeon->user_id = $id_user;
        $pigeon->sex = $request->sex;
        $pigeon->color = $request->color;
        $pigeon->category = $request->category;
        $pigeon->cage = '0';

        $pigeonExists = Pigeon::where('ring_number', '=', $request->ring_number)->first();
        if ($pigeonExists === null) {
        // User Not Found Your Stuffs Goes Here..

            if ($pigeon->save() == true){   
                // powiadomienie
                $user = User::where('role',1)->get();

                Notification::send($user, new NewPigeonNotification(Pigeon::latest('id')->first()));

                    return redirect()->back()->with([
                        'type'    => 'success',
                        'message' => 'Dodano Gołębia'
                    ]);
                }else{
                    return redirect()->back()->with([
                        'type'    => 'danger',
                        'message' => 'Error'
                    ]);
                }
        }else{
            return redirect()->back()->with([
                'type'    => 'danger',
                'message' => 'Taki gołąb już istenieje.'
            ]);
        }
    }
    

    public function editPigeon($id_pigeon){
        $id_user = Auth::id();
        $pigeon = Pigeon::where('id_user', $id_user)->find($id_pigeon);
        // if pigeon id == null, return to message error
        if($pigeon === null){
            return redirect()->back()->with([
                'type'    => 'error',
                'message' => "Nie edytowano gołębia lub nie nalezy do Ciebie."
                ]);
        }
        
        return view("account.editPigeon", compact('pigeon'));
    }

    public function update(StoreEditPigeonValidation $request, Pigeon $pigeon, $id){
        $pigeon = Pigeon::find($id);
        $id_user = Auth::id();
        
        // $this->validate($request, [              
        //     'ring_number'=> 'required','max:15','string','unique:pigeons,ring_number'.$id,
        //     ]); 
            
        $pigeon->ring_number =  $request->ring_number;
        $pigeon->id_user = $id_user;
        $pigeon->sex = $request->sex;
        $pigeon->color = $request->color;
        $pigeon->category = $request->category;
        $pigeon->cage = '0';

            if ($pigeon->update() == true){            
                // return redirect()->back()->with([
                //     'type'    => 'success',
                //     'message' => 'Edytowano Gołębia'
                // ]);
                return redirect('account/golebie')->with([
                    'type'    => 'success',
                    'message' => 'Edytowano Gołębia'
                ]);
            }else{
                return redirect()->back()->with([
                    'type'    =>'danger',
                    'message' => 'Błąd'
                ]);
            }
    }

    public function deletePigeon($id){

        $pigeon = Pigeon::findOrFail($id);

        $pigeon->delete();

        return redirect()->back()->with('message', 'Usunięto gołebia.');        
    }
}
