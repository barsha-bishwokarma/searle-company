<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;


class FacilityController extends Controller
{
    public function show($id)
    {
        $facility = Facility::findOrFail($id);
        $facilities = Facility::all(); // Fetch all facilities for the accordion

        return view('frontend.facilities.show', compact('facility', 'facilities'));
    }
}
