<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
 public function index()
{
    $posts = BlogPost::orderBy('created_at', 'desc')
        ->paginate(10);

    return view('admin.blog.index', compact('posts'));
}

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string|min:10',
            'featured_image' => 'nullable|image|max:2048',
            'is_published' => 'boolean',
        ]);

        $post = new BlogPost();
        $post->title = $validated['title'];
        $post->slug = Str::slug($validated['title']);
        $post->excerpt = $validated['excerpt'];
        $post->content = $validated['content'];
        $post->user_id = Auth::id();
        $post->is_published = $validated['is_published'] ?? false;
        
        if ($validated['is_published'] ?? false) {
            $post->published_at = now();
        }

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('blog', 'public');
            $post->featured_image = $imagePath;
        }

        $post->save();

        return redirect()
            ->route('admin.blog.index')
            ->with('success', 'Blog post created successfully!');
    }

    public function show(BlogPost $post)
    {
        return view('admin.blog.show', compact('post'));
    }

    public function edit(BlogPost $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, BlogPost $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string|min:10',
            'featured_image' => 'nullable|image|max:2048',
            'is_published' => 'boolean',
        ]);

        $post->title = $validated['title'];
        $post->excerpt = $validated['excerpt'];
        $post->content = $validated['content'];
        $post->is_published = $validated['is_published'] ?? false;
        
        if ($post->is_published && !$post->published_at) {
            $post->published_at = now();
        }

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('blog', 'public');
            $post->featured_image = $imagePath;
        }

        $post->save();

        return redirect()
            ->route('admin.blog.index')
            ->with('success', 'Blog post updated successfully!');
    }

    public function destroy(BlogPost $post)
    {
        $post->delete();

        return redirect()
            ->route('admin.blog.index')
            ->with('success', 'Blog post deleted successfully!');
    }
}
