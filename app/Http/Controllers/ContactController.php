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
            'firstName' => 'nullable|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // Combine firstName and lastName if provided, otherwise use name
        $name = $validated['name'] ?? trim(($validated['firstName'] ?? '') . ' ' . ($validated['lastName'] ?? ''));

        // Prepare data for database
        $data = [
            'name' => $name,
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ];

        // Store message in database
        ContactMessage::create($data);

        // Send email notification (you can configure this later)
        // Mail::to('admin@streetversity.com')->send(new ContactMessageReceived($data));

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
