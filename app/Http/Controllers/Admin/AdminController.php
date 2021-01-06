<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Models\Messages;
use App\Models\Pigeon;


class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware("checkRole:role");
    }

    public function adminHome(){
        $user = Auth::user();
        $allUsers = User::all();
        $users = DB::table('users')->orderByDesc('created_at')->limit(5)->get();
        $pigeons = Pigeon::all();
        $messages = Messages::all();

        return view('account.admin.index', compact(
            'user',
            'allUsers',
            'users',
            'pigeons',
            'messages'
        ));
    }

    public function allPosts(){
        return view('account.admin.posts.allPosts');
    }

    public function addPost(){
        return view('account.admin.posts.addPost');
    }

    public function singleUser($id){

        $user = User::findOrFail($id);
        return view('account.admin.users.singleUser', compact('user'));
    }

    public function allUsers(){
        $i = 1;
        $users = User::all();

        return view('account.admin.users.allUsers', compact(
            'users',
            'i'
        ));
    }
    
    public function allPigeons(){
        $pigeons = Pigeon::all();
        $user = User::find(1)->nameUser;
        $i = 1;
        return view('account.admin.pigeons.allPigeons', compact('pigeons', 'i', 'user'));
    }

}