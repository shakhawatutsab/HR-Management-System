<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Method Register and login

    public function login(){
        return view('auth.authentication');
    }
}