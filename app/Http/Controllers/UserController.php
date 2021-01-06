<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pigeon;
use App\Models\User;


class UserController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(){
        $user = Auth::user();

        return view("account.profile", compact('user'));
    }
    
    public function account(){
        $user = Auth::user();
        return view("account.index", compact('user'));
    }
    
    public function updateProfile(){
        $user = Auth::user();
        return view("account.updateProfile", compact('user'));
    }

    // mask as read (all)
    public function markAsReadAll()
    {
        Auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }

    // mask as read (single)
    public function markAsReadSingle($id)
    {
        Auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        return redirect()->back();
    }
}
