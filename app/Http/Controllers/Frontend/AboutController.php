<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
     
    public function ceo()
    {
        return view('frontend.about.ceo');
    }

    public function ibl()
    {
        return view('frontend.about.ibl');
    }

    public function history()
    {
        return view('frontend.about.history');
    }

    public function mission()
    {
        return view('frontend.about.mission');
    }

    public function facilities()
    {
        return view('frontend.about.facilities');
    }

    public function csr()
    {
        return view('frontend.about.csr');
    }

    public function global()
    {
        return view('frontend.about.global');
    }

    public function policies()
    {
        return view('frontend.about.policies');
    }
}
