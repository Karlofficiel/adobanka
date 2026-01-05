<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class ContactAdminController extends Controller
{
     // Afficher la liste
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(5);
           // Nombre total de contacts
        $totalContacts = Contact::count();
        $admin = Auth::guard('admin')->user(); // récupère l'admin connecté

        return view('administration', compact('contacts', 'totalContacts', 'admin'));
    }

    // Supprimer un message
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Message supprimé avec succès.');
    }
}
