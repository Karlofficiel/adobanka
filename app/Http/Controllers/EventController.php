<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('year', 'desc')->get();
        $totalEvents = $events->count();
        $admin = Auth::guard('admin')->user(); // récupère l'admin connecté        
        return view('historique-admin', compact('events', 'totalEvents', 'admin'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'message' => 'required|string',
            'type' => 'required|string',
            'year' => 'required|integer|min:1900|max:2100',
            'voir_plus' => 'required|string',
        ]);

        // Upload image si présente
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('events', 'public');
        }

        Event::create($data);

        return back()->with('success', 'Historique créé avec succès.');
    }

public function update(Request $request, Event $event)
{
    $data = $request->validate([
        'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        'message' => 'required|string',
        'type' => 'required|string',
        'year' => 'required|integer|min:1900|max:2100',
        'voir_plus' => 'required|string',
    ]);

    if ($request->hasFile('image')) {
        if ($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image);
        }

        $data['image'] = $request->file('image')->store('events', 'public');
    }

    $event->update($data);

    return back()->with('success', 'Historique mis à jour.');
}



    public function destroy(Event $event)
    {
        if ($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return back()->with('success', 'Historique supprimé.');
    }
}
