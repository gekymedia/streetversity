<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::where('is_published', true)
            ->with('user')
            ->orderBy('published_at', 'desc')
            ->paginate(6);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->where('is_published', true)
            ->with(['user', 'approvedComments.user'])
            ->firstOrFail();

        return view('blog.show', compact('post'));
    }

    public function storeComment(Request $request, BlogPost $post)
    {
        $validated = $request->validate([
            'content' => 'required|string|min:5|max:1000',
            'guest_name' => 'required_if:user_id,null|string|max:255',
            'guest_email' => 'required_if:user_id,null|email|max:255',
        ]);

        $comment = new BlogComment();
        $comment->content = $validated['content'];
        $comment->blog_post_id = $post->id;
        
        if (Auth::check()) {
            $comment->user_id = Auth::id();
            $comment->is_approved = true; // Auto-approve logged in users
        } else {
            $comment->guest_name = $validated['guest_name'];
            $comment->guest_email = $validated['guest_email'];
            $comment->is_approved = false; // Require approval for guests
        }

        $comment->save();

        return redirect()
            ->route('blog.show', $post->slug)
            ->with('success', Auth::check() ? 'Comment added successfully!' : 'Comment submitted for approval!');
    }
}
