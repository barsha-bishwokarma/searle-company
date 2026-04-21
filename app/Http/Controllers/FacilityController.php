<?php

namespace App\Http\Controllers;

use App\Models\Facility;


class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        return view('facilities.index', compact('facilities'));
    }

    public function show(Facility $facility)
    {
        return view('facilities.show', compact('facility'));
    }
}
