<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/comments', [BlogController::class, 'storeComment'])->name('blog.comments.store');

// Authenticated User Routes
// Authenticated User Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // User Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Comment Management
    Route::delete('/comments/{comment}', [BlogCommentController::class, 'destroy'])->name('comments.destroy');
    
    // Profile Routes (from Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
// Admin Routes
Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // Blog Management
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class)->parameters([
        'blog' => 'post'
    ]);
    
    // Comment Management
    Route::get('comments', [\App\Http\Controllers\Admin\CommentController::class, 'index'])->name('comments.index');
    Route::post('comments/{comment}/approve', [\App\Http\Controllers\Admin\CommentController::class, 'approve'])->name('comments.approve');
    Route::post('comments/{comment}/reject', [\App\Http\Controllers\Admin\CommentController::class, 'reject'])->name('comments.reject');
    Route::delete('comments/{comment}', [\App\Http\Controllers\Admin\CommentController::class, 'destroy'])->name('comments.destroy');
    
    // Contact Messages
    Route::get('messages', function () {
        return view('admin.messages.index');
    })->name('messages.index');
});

// Breeze Authentication Routes
require __DIR__.'/auth.php';
