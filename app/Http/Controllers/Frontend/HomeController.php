<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $facilities = Facility::all();
        return view('frontend.home',compact('facilities'));
    }
}
