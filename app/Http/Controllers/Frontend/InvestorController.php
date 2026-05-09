<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use App\Models\InvestorQuery;
use Illuminate\Http\Request;
 

class InvestorController extends Controller
{
    
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

    public function submitQuery(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'city'      => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'telephone' => 'required|string|max:255',
        ]);

        InvestorQuery::create([
            'name'           => $request->name,
            'organization'   => $request->organization,
            'postal_address' => $request->postal_address,
            'city'           => $request->city,
            'postal_zip'     => $request->postal_zip,
            'country'        => $request->country,
            'email'          => $request->email,
            'telephone'      => $request->telephone,
            'fax'            => $request->fax,
            'url'            => $request->url,
            'interest'       => $request->interest,
            'message'        => $request->message,
        ]);

        return redirect()
            ->route('investors.relations')
            ->with('success', 'Your query has been submitted successfully!');
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
