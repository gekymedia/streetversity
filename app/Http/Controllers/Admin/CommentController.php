<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = BlogComment::with(['blogPost', 'user'])
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.comments.index', compact('comments'));
    }

    public function approve(BlogComment $comment)
    {
        $comment->update(['is_approved' => true]);

        return back()->with('success', 'Comment approved successfully!');
    }

    public function reject(BlogComment $comment)
    {
        $comment->update(['is_approved' => false]);

        return back()->with('success', 'Comment rejected successfully!');
    }

    public function destroy(BlogComment $comment)
    {
        $comment->delete();

        return back()->with('success', 'Comment deleted successfully!');
    }
}
