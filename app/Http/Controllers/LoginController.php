<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    function login(){
        return view('login');
    }

    function post_login(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $email=$request->email;
        $password=$request->password;

        if($email ==="admin@domain.com" && $password ==="admin123"){
            $request->session()->regenerate();

            return redirect()->intended('admin-profile');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
