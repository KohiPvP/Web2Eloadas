<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    // GET /contact – az űrlap megjelenítése
    public function showForm()
    {
        return view('contact');
    }

    // POST /contact – űrlap feldolgozása, validáció + mentés
    public function send(Request $request)
    {
        // szerver oldali validáció
        $validated = $request->validate([
            'sender'  => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // mentés az adatbázisba
        Message::create([
            'sender'  => $validated['sender'],
            'message' => $validated['message'],
        ]);

        // visszairányítás siker üzenettel
        return redirect()
            ->route('contact.show')
            ->with('success', 'Üzenetét sikeresen elküldte.');
    }
}
