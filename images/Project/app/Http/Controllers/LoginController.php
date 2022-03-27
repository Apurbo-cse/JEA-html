<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function signin()
    {
        return view('frontend.signin');
    }
    
    public function join()
    {
        return view('frontend.join');
    }
}
