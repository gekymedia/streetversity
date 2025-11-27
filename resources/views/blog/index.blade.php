@extends('layouts.app')

@section('title', 'Blog - Streetversity')
@section('description', 'Read our latest articles, tutorials, and insights on skill development and community learning.')

@section('content')
    <!-- Blog Header -->
    <section class="gold-gradient text-black py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 fade-in-up">
                    Streetversity Blog
                </h1>
                <p class="text-xl text-gray-800 max-w-3xl mx-auto fade-in-up" style="animation-delay: 0.2s">
                    Insights, tutorials, and stories from our community of learners and educators
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-3">
                    @if($posts->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            @foreach($posts as $post)
                                <x-card
                                    title="{{ $post->title }}"
                                    description="{{ $post->excerpt }}"
                                    link="{{ route('blog.show', $post->slug) }}"
                                    date="{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}"
                                    author="{{ $post->user->name }}"
                                />
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-12">
                            {{ $posts->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <h3 class="text-2xl font-bold text-black mb-4">No Posts Yet</h3>
                            <p class="text-gray-500 max-w-md mx-auto">
                                We're working on creating amazing content for you. Check back soon for our latest articles and tutorials.
                            </p>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Search Widget -->
                    <div class="bg-white border border-gold rounded-2xl p-6 mb-6">
                        <h3 class="text-lg font-bold text-black mb-4">Search Blog</h3>
                        <form action="{{ route('blog.index') }}" method="GET" class="space-y-4">
                            <div class="relative">
                                <input 
                                    type="text" 
                                    name="search" 
                                    placeholder="Search articles..." 
                                    value="{{ request('search') }}"
                                    class="w-full px-4 py-2 bg-white border border-gray-300 text-gray-900 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200"
                                >
                                <button type="submit" class="absolute right-2 top-2 text-gray-400 hover:text-gold">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Categories Widget -->
                    <div class="bg-white border border-gold rounded-2xl p-6 mb-6">
                        <h3 class="text-lg font-bold text-black mb-4">Categories</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="{{ route('blog.index') }}" class="flex items-center justify-between text-gray-600 hover:text-gold transition-colors duration-200">
                                    <span>All Posts</span>
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-sm border border-yellow-200">
                                        {{ $posts->total() }}
                                    </span>
                                </a>
                            </li>
                            <!-- Add more categories as needed -->
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gold transition-colors duration-200">
                                    <span>Tutorials</span>
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-sm border border-yellow-200">0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between text-gray-600 hover:text-gold transition-colors duration-200">
                                    <span>Community</span>
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-sm border border-yellow-200">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="bg-white border border-gold rounded-2xl p-6">
                        <h3 class="text-lg font-bold text-black mb-4">Recent Posts</h3>
                        <div class="space-y-4">
                            @foreach($posts->take(3) as $recentPost)
                            <a href="{{ route('blog.show', $recentPost->slug) }}" class="block group">
                                <div class="flex items-start space-x-3">
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-sm font-medium text-gray-600 group-hover:text-gold transition-colors duration-200 line-clamp-2">
                                            {{ $recentPost->title }}
                                        </h4>
                                        <p class="text-xs text-gray-500 mt-1">
                                            {{ $recentPost->published_at ? $recentPost->published_at->format('M d, Y') : 'Draft' }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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