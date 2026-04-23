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
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Contact::create($data);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
