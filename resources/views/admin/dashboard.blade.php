@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
                <p class="text-gray-600 mt-2">Welcome back, {{ Auth::user()->name }}! Here's what's happening today.</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Posts -->
                <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-indigo-100 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9m0 0a2 2 0 01-2-2V3a2 2 0 012-2h2a2 2 0 012 2v1a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-500">Total Posts</h3>
                            <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\BlogPost::count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Published Posts -->
                <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-500">Published</h3>
                            <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\BlogPost::where('is_published', true)->count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Pending Comments -->
                <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-yellow-100 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-500">Pending Comments</h3>
                            <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\BlogComment::where('is_approved', false)->count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Total Comments -->
                <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-500">Total Comments</h3>
                            <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\BlogComment::count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Recent Posts -->
                <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-semibold text-gray-900">Recent Posts</h2>
                        <a href="{{ route('admin.blog.index') }}" class="text-sm text-indigo-600 hover:text-indigo-700 font-medium">View All</a>
                    </div>
                    <div class="space-y-4">
                        @forelse(\App\Models\BlogPost::with('user')->latest()->take(5)->get() as $post)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-sm font-medium text-gray-900 truncate">{{ $post->title }}</h3>
                                <div class="flex items-center mt-1 text-xs text-gray-500">
                                    <span>By {{ $post->user->name }}</span>
                                    <span class="mx-2">•</span>
                                    <span>{{ $post->created_at->format('M d, Y') }}</span>
                                    @if($post->is_published)
                                        <span class="ml-2 inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Published
                                        </span>
                                    @else
                                        <span class="ml-2 inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Draft
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <a href="{{ route('admin.blog.edit', $post) }}" class="ml-4 text-sm text-indigo-600 hover:text-indigo-700 font-medium">
                                Edit
                            </a>
                        </div>
                        @empty
                        <div class="text-center py-4">
                            <p class="text-gray-500">No posts yet.</p>
                            <a href="{{ route('admin.blog.create') }}" class="text-sm text-indigo-600 hover:text-indigo-700 font-medium mt-2 inline-block">
                                Create your first post
                            </a>
                        </div>
                        @endforelse
                    </div>
                </div>

                <!-- Recent Comments -->
                <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-semibold text-gray-900">Recent Comments</h2>
                        <a href="{{ route('admin.comments.index') }}" class="text-sm text-indigo-600 hover:text-indigo-700 font-medium">View All</a>
                    </div>
                    <div class="space-y-4">
                        @forelse(\App\Models\BlogComment::with(['blogPost', 'user'])->latest()->take(5)->get() as $comment)
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-start justify-between mb-2">
                                <h3 class="text-sm font-medium text-gray-900">
                                    On: {{ $comment->blogPost->title }}
                                </h3>
                                @if($comment->is_approved)
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Approved
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Pending
                                    </span>
                                @endif
                            </div>
                            <p class="text-sm text-gray-600 mb-2 line-clamp-2">{{ $comment->content }}</p>
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <span>By: {{ $comment->author_name }}</span>
                                <span>{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-4">
                            <p class="text-gray-500">No comments yet.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900 mb-6">Quick Actions</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="{{ route('admin.blog.create') }}" class="flex items-center p-4 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors duration-200">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">New Post</h3>
                            <p class="text-sm text-gray-600">Create a blog post</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.blog.index') }}" class="flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors duration-200">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Manage Posts</h3>
                            <p class="text-sm text-gray-600">Edit existing posts</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.comments.index') }}" class="flex items-center p-4 bg-yellow-50 rounded-lg hover:bg-yellow-100 transition-colors duration-200">
                        <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Moderate</h3>
                            <p class="text-sm text-gray-600">Review comments</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush
