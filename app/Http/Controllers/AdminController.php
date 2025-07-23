<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //  Show Dashboard to admin
    public function index(){
        return view('admin.dashboard');
    }
}
