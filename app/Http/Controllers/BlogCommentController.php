<?php

namespace App\Http\Controllers;

use App\Models\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogCommentController extends Controller
{
    public function destroy(BlogComment $comment)
    {
        // Check if user owns the comment or is admin
        if (Auth::id() !== $comment->user_id && !Auth::user()->is_admin) {
            abort(403);
        }

        $comment->delete();

        return back()->with('success', 'Comment deleted successfully!');
    }
}
