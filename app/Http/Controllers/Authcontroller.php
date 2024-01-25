<?php

namespace App\Http\Controllers;

use App\Http\Requests\Loginrequest;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    //
    public function login(){
        return view ('authlogin');
    }
    public function dologin(Loginrequest $request){
            
    }
}
