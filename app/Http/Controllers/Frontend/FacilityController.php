<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        return view('frontend.facilities.index', compact('facilities'));
    }

    public function show(Facility $facility)
    {
        return view('frontend.facilities.show', compact('facility'));
    }
}
