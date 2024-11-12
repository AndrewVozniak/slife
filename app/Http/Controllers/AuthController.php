<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signInView()
    {
        return view('auth.sign-in');
    }

    public function signUpView()
    {
//        return view('auth.sign-up');
        return "Hello, world!";
    }

    public function forgotPasswordView()
    {
        return view('auth.forgot-password');
    }
}
