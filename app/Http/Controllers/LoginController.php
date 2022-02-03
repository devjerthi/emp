<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function login(Request $req)
   {
  
       return view('login');
       
   }
   function submit_login(Request $request)
   {
        die('dd');
        $request->validate
        ([

            'email'=>'required',

                'password'=>'required'

        ]);
      
    }
}
