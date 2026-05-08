<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProfileCompany;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
     public function company_profile()
    {
        $profiles = ProfileCompany::all();

        return view('frontend.investors.profile', compact('profiles'));
    }
}
