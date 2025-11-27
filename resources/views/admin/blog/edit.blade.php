@extends('layouts.admin')

@section('title', 'Edit Post: ' . $post->title)

@section('content')
    <div class="py-6">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Edit Post</h1>
                        <p class="text-gray-600 mt-2">Update your blog post content and settings.</p>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <span>Created: {{ $post->created_at ? $post->created_at->format('M d, Y') : 'Not set' }}</span>
                        <span>•</span>
                        <span>Last updated: {{ $post->updated_at ? $post->updated_at->format('M d, Y') : 'Not set' }}</span>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                <form action="{{ route('admin.blog.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="space-y-6">
                        <!-- Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Post Title *</label>
                            <input 
                                type="text" 
                                name="title" 
                                id="title"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                value="{{ old('title', $post->title) }}"
                                placeholder="Enter a compelling title..."
                            >
                            @error('title')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Excerpt -->
                        <div>
                            <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">Excerpt</label>
                            <textarea 
                                name="excerpt" 
                                id="excerpt" 
                                rows="3"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                placeholder="Brief description of your post (optional)..."
                            >{{ old('excerpt', $post->excerpt) }}</textarea>
                            @error('excerpt')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content *</label>
                            <textarea 
                                name="content" 
                                id="content" 
                                rows="12"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200 font-mono text-sm"
                                placeholder="Write your post content here... You can use Markdown formatting."
                            >{{ old('content', $post->content) }}</textarea>
                            @error('content')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-2 text-sm text-gray-500">
                                Supports Markdown formatting. Use # for headings, **bold**, *italic*, etc.
                            </p>
                        </div>

                        <!-- Featured Image -->
                        <div>
                            <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
                            
                            @if($post->featured_image)
                                <div class="mb-4">
                                    <div class="flex items-center space-x-4">
                                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Current featured image" class="w-32 h-20 object-cover rounded-lg">
                                        <div>
                                            <p class="text-sm text-gray-600">Current image</p>
                                            <label class="flex items-center text-sm text-gray-500">
                                                <input type="checkbox" name="remove_featured_image" value="1" class="mr-2">
                                                Remove current image
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <input 
                                type="file" 
                                name="featured_image" 
                                id="featured_image"
                                accept="image/*"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                            >
                            @error('featured_image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-2 text-sm text-gray-500">
                                Optional. Maximum file size: 2MB. Supported formats: JPG, PNG, GIF, WebP.
                            </p>
                        </div>

                        <!-- Publish Options -->
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <label for="is_published" class="text-sm font-medium text-gray-700">Publish Status</label>
                                    <p class="text-sm text-gray-500">Make this post visible to the public</p>
                                </div>
                                <div class="relative inline-block w-12 mr-2 align-middle select-none">
                                    <input 
                                        type="checkbox" 
                                        name="is_published" 
                                        id="is_published" 
                                        value="1"
                                        {{ old('is_published', $post->is_published) ? 'checked' : '' }}
                                        class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-200"
                                    >
                                    <label for="is_published" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-200"></label>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pt-6 border-t border-gray-200">
                            <div class="mb-4 sm:mb-0">
                                <a href="{{ route('admin.blog.index') }}" class="text-sm text-gray-600 hover:text-gray-900 transition-colors duration-200">
                                    ← Back to all posts
                                </a>
                            </div>
                            <div class="flex space-x-3">
                                @if($post->slug)
                                    <a 
                                        href="{{ route('blog.show', $post->slug) }}" 
                                        target="_blank"
                                        class="px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-50 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors duration-200"
                                    >
                                        View Post
                                    </a>
                                @endif
                                <button 
                                    type="submit" 
                                    class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200"
                                >
                                    Update Post
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .toggle-checkbox:checked {
        right: 0;
        border-color: #6366f1;
    }
    .toggle-checkbox:checked + .toggle-label {
        background-color: #6366f1;
    }
</style>
@endpush