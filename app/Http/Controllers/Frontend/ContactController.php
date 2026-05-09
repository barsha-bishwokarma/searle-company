<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contacts.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'phone'      => 'required|string|max:20',
            'email'      => 'required|email|max:255',
            'message'    => 'required|string|max:5000',
        ]);

        Contact::create($request->only([
            'first_name',
            'last_name',
            'phone',
            'email',
            'message',
        ]));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
