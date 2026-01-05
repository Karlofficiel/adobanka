<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class eventsiteController extends Controller
{
    public function index(){
        $events = Event::all();
        $fondations = Event::count();
        $expansions = Event::count();
        $recompenses = Event::count();
        $etapes = Event::count();
        return view('A propos-user', compact('events', 'fondations', 'expansions', 'recompenses', 'etapes'));
    }
}
