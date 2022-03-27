<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about(){
       
        $data['abouts'] = DB::table('abouts')->where('status', 'active')->get();
        return view('frontend.about', $data);

    }
}
