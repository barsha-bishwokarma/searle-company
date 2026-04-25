<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about()
    {
        return view('frontend.about');
    }
}
