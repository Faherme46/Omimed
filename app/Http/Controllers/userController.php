<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //

    public function firstMethod(){
        return view("login");
    }

    public function televisor(){
        return view('tv');
    }
    public function doctores(){
        return view('doctores');
    }

    public function recepcion(){
        return view('recepcion');
    }

}
