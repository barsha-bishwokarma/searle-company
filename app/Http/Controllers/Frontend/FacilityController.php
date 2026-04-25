<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
 

class FacilityController extends Controller
{
    public function show($slug)
    {
        $facility = Facility::findOrFail($slug);
        return view('frontend.facilities.show', compact('facility'));
    }
}
