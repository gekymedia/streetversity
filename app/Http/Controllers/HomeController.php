<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPosts = BlogPost::where('is_published', true)
            ->with('user')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('home', compact('featuredPosts'));
    }
}
