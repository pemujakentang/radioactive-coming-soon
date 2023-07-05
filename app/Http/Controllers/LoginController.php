<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        // kalo udh login, ga bs balik ke login
        if(Auth::check()){
            return redirect()->intended('/home');
        }
        return view('Login.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            // regenerate biar ga kena session fixation
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login failed!');
    }


    public function logout()
    {
        return route('login');
    }
}
