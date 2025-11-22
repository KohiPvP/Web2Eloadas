<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        // Ha csak a bejelentkezett felhasználó üzeneteit akarod:
        // $messages = Message::where('sender', auth()->user()->email)
        //     ->orderBy('created_at', 'desc')
        //     ->get();

        // Minden üzenet, legújabb elöl:
        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('messages', compact('messages'));
    }
}
