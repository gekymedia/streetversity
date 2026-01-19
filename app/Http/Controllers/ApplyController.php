<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index()
    {
        return view('apply');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'age' => 'required|integer|min:16|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'program' => 'required|string|max:255',
            'statement' => 'required|string|min:100|max:2000',
            'portfolio' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);

        // Handle file upload if provided
        $portfolioPath = null;
        if ($request->hasFile('portfolio')) {
            $portfolioPath = $request->file('portfolio')->store('portfolios', 'public');
        }

        Application::create([
            'full_name' => $validated['fullName'],
            'age' => $validated['age'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'program' => $validated['program'],
            'statement' => $validated['statement'],
            'portfolio' => $portfolioPath,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('apply')
            ->with('success', 'Thank you for your application! We will review it and get back to you soon.');
    }
}
