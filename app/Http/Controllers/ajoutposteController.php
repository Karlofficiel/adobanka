<?php
namespace App\Http\Controllers;

use App\Models\ajoutposte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AjoutPosteController extends Controller
{

    public function index()
    {
        $employees = ajoutposte::all(); // récupère tous les employés
        return view('contact-admin', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|unique:ajoutpostes,email',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = $request->file('image')->store('ajoutpostes', 'public');

        ajoutposte::create([
            'nom' => $request->nom,
            'poste' => $request->poste,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Enregistrement effectué avec succès');
    }
     public function destroy($id)
    {
        $employee = ajoutposte::findOrFail($id);

        // Supprimer l'image du stockage si elle existe
        if ($employee->image && Storage::disk('public')->exists($employee->image)) {
            Storage::disk('public')->delete($employee->image);
        }

        $employee->delete();

        return redirect()->route('contact-admin')
                         ->with('success', 'Employé supprimé avec succès.');
    }
}
