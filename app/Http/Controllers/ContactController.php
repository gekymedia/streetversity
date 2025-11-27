<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // Store message in database
        ContactMessage::create($validated);

        // Send email notification (you can configure this later)
        // Mail::to('admin@streetversity.com')->send(new ContactMessageReceived($validated));

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
