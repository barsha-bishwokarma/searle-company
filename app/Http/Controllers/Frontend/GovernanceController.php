<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Governance;
use Illuminate\Http\Request;

class GovernanceController extends Controller
{
     public function governance()
    {
          $governances = Governance::all();

        return view('frontend.investors.governance', compact('governances'));
    }
}

