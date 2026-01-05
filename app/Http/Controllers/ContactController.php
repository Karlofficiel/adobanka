<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-user');
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'nullable|string|max:30',
            'motif'     => 'nullable|string|max:100',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
