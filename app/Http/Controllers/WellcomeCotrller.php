<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeCotrller extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function signup(){
        return view("signup");
    }

    public function process_signup(Request $request){
        return $request->all();
    }
}
