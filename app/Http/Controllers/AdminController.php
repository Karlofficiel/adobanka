<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
      public function showLoginForm()
    {
        return view('connexion'); // Ton fichier Blade de connexion
    }   
  public function login(Request $request)
{
    $request->validate([
        'nom_utilisateur' => 'required|string',
        'mot_de_passe' => 'required|string',
    ]);

    $user = Admin::where('nom_utilisateur', $request->nom_utilisateur)->first();

    if (!$user || !Hash::check($request->mot_de_passe, $user->password)) {
        return back()->withErrors([
            'nom_utilisateur' => 'Nom d’utilisateur ou mot de passe incorrect.',
        ]);
    }

    // Authentifier via le guard admin
    Auth::guard('admin')->login($user);

    if ($user->is_admin) {
        return redirect('/index-admin')->with('success', 'Connexion admin réussie.');
    }

    return redirect('/index')->with('success', 'Connexion réussie.');
}


    public function register(Request $request)
    {
        $request->validate([
            'register-fullname' => 'required|string|max:255',
            'register-email' => 'required|email|unique:admins,email',
            'register-username' => 'required|string|unique:admins,nom_utilisateur',
            'register-password' => 'required|string|min:8|confirmed',
        ]);

        Admin::create([ 
            'nom' => $request->input('register-fullname'),
            'email' => $request->input('register-email'),
            'nom_utilisateur' => $request->input('register-username'),
            'password' => Hash::make($request->input('register-password')),
            'is_admin' => false,
        ]);

        return redirect('/index')->with('success', 'Compte créé avec succès.');
    }
   public function indexAdmin()
{
    $admin = Auth::guard('admin')->user();

    if (!$admin || !$admin->is_admin) {
        abort(403, 'Accès refusé');
    }

    return view('index-admin', compact('admin'));
}


}