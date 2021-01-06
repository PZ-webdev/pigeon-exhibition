<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExhibitionController extends Controller
{

     
    public function __construct(){
        
        $this->middleware('auth');
    }


    public function exhibition(){

        return view("exhibition");
    }

    
    public function singleExhibition($id){
        
        return view("pigeonSingle", compact('id'));
    }
}
