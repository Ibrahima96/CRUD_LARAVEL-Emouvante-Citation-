<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        
        return view( 'security.login');
    }



    public function login(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password' => 'required|string'

        ]);

        
    }
}
