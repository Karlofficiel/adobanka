<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Afficher le formulaire de contact
    public function index()
    {
        return view('contact-user');
    }

    // Enregistrer un nouveau message   
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'type'    => 'required|in:suggestion,question,avis',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        // Pour AJAX
        return response()->json([
            'success' => true,
            'message' => 'Commentaire envoyé avec succès'
        ]);
    }
}
