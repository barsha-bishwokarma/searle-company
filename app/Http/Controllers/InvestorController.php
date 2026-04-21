<?php

namespace App\Http\Controllers;

use App\Models\Investor;
 

class InvestorController extends Controller
{
    public function index()
    {
        $investors = Investor::all();
        return view('investors.index', compact('investors'));
    }
}
