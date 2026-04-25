<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Investor;

class InvestorController extends Controller
{
    // Profile of Company page
    public function profile()
    {
        return view('frontend.investors.profile');
    }

    // Governance page
    public function governance()
    {
        return view('frontend.investors.governance');
    }

    

    // Investor's Relations page
    public function relations()
    {
        $agm   = Investor::where('type', 'agm')->get();
        $eogm  = Investor::where('type', 'eogm')->get();
        $compliance = Investor::where('type', 'website_compliance')->get();
        $briefing   = Investor::where('type', 'corporate_briefing')->get();

        return view('frontend.investors.relations', compact(
            'agm',
            'eogm',
            'compliance',
            'briefing'
        ));
    }

    // Media page
    public function media()
    {
        return view('frontend.investors.media');
    }

    // Investor Information page
    public function information()
    {
        $reports    = Investor::where('type', 'financial_report')->get();
        $highlights = Investor::where('type', 'financial_highlights')->get();
        $ratio      = Investor::where('type', 'ratio_analysis')->get();
        $dividend   = Investor::where('type', 'unclaimed_dividend')->get();
        $shareholder = Investor::where('type', 'shareholder_form')->get();
        $shareholding = Investor::where('type', 'shareholding_pattern')->get();

        return view('frontend.investors.information', compact(
            'reports',
            'highlights',
            'ratio',
            'dividend',
            'shareholder',
            'shareholding'
        ));
    }
}
