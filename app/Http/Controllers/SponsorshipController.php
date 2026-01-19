<?php

namespace App\Http\Controllers;

use App\Models\SponsorshipInquiry;
use Illuminate\Http\Request;

class SponsorshipController extends Controller
{
    public function index()
    {
        return view('sponsorship');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'amount' => 'required|numeric|min:100',
            'message' => 'nullable|string|max:1000',
        ]);

        SponsorshipInquiry::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'amount' => $validated['amount'],
            'message' => $validated['message'] ?? null,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('sponsorship')
            ->with('success', 'Thank you for your sponsorship inquiry! We will contact you soon with payment instructions.');
    }
}
