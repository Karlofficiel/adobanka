<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;


class activiteruserController extends Controller
{
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'desc')->get();
         $admin = Auth::guard('admin')->user(); // récupère l'admin connecté
        return view('Activiter-user', compact('publications', 'admin'));
    }   


}
