<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BscController extends Controller
{
    public function bsc()
    {
        return view('frontend.bsc');
    }

    public function blog_detailes()
    {
        return view('frontend.detailes');
    }
}
