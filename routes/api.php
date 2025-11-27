<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Future API endpoints can be added here
Route::get('/blog/posts', function () {
    return \App\Models\BlogPost::where('is_published', true)
        ->with('user')
        ->orderBy('published_at', 'desc')
        ->paginate(6);
});
