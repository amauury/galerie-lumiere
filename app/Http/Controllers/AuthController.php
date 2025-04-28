<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard');
        }

        else {
            return redirect()->back()->withErrors('Invalid login credentials');
            
        }

        

    }

}
