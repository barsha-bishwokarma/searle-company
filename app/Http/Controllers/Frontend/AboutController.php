<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;

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
        $facility = Facility::first();   // for hero image
        $facilities = Facility::all();   // for accordion list

        return view('Frontend.about.facilities', compact('facility', 'facilities'));
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
