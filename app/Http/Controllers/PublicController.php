<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DateExhibitions;
use App\Models\Pigeon;


class PublicController extends Controller
{
    
    public function index(){

        $date = DateExhibitions::find(1);

        $pigeons = Pigeon::where("category", "A")->limit(3)->get(); 

        return view("index", compact('date', 'pigeons'));
    }



}
