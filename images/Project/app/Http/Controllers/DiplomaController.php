<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiplomaController extends Controller
{
    public function diploma()
    {
        return view('frontend.diploma');
    }
}
