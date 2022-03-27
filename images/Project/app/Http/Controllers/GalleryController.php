<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GalleryController extends Controller
{
    public function gallery()
    {
        $data['galleries'] = DB::table('galleries')->where('status', 'active')->get();
        return view('frontend.gallery', $data);
    }
}

