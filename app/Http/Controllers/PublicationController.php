<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'desc')->get();
         $totalPublications = Publication::count(); // récupère le nombre total d'annonces
         $admin = Auth::guard('admin')->user(); // récupère l'admin connecté
        return view('publication-admin', compact('publications','totalPublications', 'admin'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'message' => 'required|string',
        ]);

        Publication::create([
            'titre' => $request->titre,
            'type' => $request->type,
            'message' => $request->message,
            'actif' => true,
        ]);

        return redirect()->back()->with('success', 'Publication ajoutée avec succès !');
    }
 
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'message' => 'required|string',
            'type' => 'required|string',
        ]);

        $pub = Publication::findOrFail($id);

        $pub->update([
            'titre' => $request->titre,
            'message' => $request->message,
            'type' => $request->type,
        ]);

        return back()->with('success', 'Publication modifiée avec succès !');
    }


    public function destroy($id)
    {
        $pub = Publication::findOrFail($id);
        $pub->delete();

        return back()->with('success', 'Publication supprimée avec succès !');
    }

    public function updateStatut($id)
{
    $publication = Publication::findOrFail($id);

    // Basculer le statut
    $publication->statut = $publication->statut === 'En cour' ? 'Terminé' : 'En cour';
    $publication->save();

    return response()->json([
        'statut' => $publication->statut
    ]);
}

    
}

