@extends('layouts.app')

@section('title', $post->title . ' - Streetversity')
@section('description', $post->excerpt)

@section('content')
    <article class="min-h-screen bg-white">
        <!-- Article Header -->
        <header class="gold-gradient text-black py-16">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight fade-in-up">
                        {{ $post->title }}
                    </h1>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center space-y-3 sm:space-y-0 sm:space-x-6 text-gray-800 fade-in-up" style="animation-delay: 0.2s">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>By {{ $post->user->name }}</span>
                        </div>
                        
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>{{ $post->published_at ? $post->published_at->format('F d, Y') : 'Draft' }}</span>
                        </div>
                        
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ $post->reading_time }} min read</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Article Content -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-3">
                    @if($post->featured_image)
                        <div class="mb-8 rounded-2xl overflow-hidden shadow-lg border border-gold">
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 md:h-96 object-cover">
                        </div>
                    @endif

                    <!-- Article Body -->
                    <div class="prose prose-lg max-w-none prose-headings:font-bold prose-a:text-gold hover:prose-a:text-yellow-600 prose-img:rounded-2xl prose-blockquote:border-l-gold prose-blockquote:bg-yellow-50 prose-blockquote:py-1 prose-p:text-gray-700 prose-headings:text-black prose-strong:text-black prose-li:text-gray-700 prose-blockquote:text-gray-700">
                        {!! Str::markdown($post->content) !!}
                    </div>

                    <!-- Article Footer -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div class="flex items-center space-x-2 text-sm text-gray-600">
                                <span>Posted in</span>
                                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full border border-yellow-200">General</span>
                            </div>
                            <div class="flex space-x-4">
                                <!-- Social Sharing -->
                                <button onclick="shareOnTwitter()" class="text-gray-400 hover:text-gold transition-colors duration-200">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                    </svg>
                                </button>
                                <button onclick="shareOnLinkedIn()" class="text-gray-400 hover:text-gold transition-colors duration-200">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="mt-12">
                        <div class="flex items-center justify-between mb-8">
                            <h2 class="text-2xl font-bold text-black">
                                Comments ({{ $post->approvedComments->count() }})
                            </h2>
                        </div>

                        <!-- Comments List -->
                        <div class="space-y-6 mb-8">
                            @forelse($post->approvedComments as $comment)
                                <div class="bg-white border border-gold rounded-2xl p-6">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center border border-yellow-200">
                                                <span class="text-yellow-600 font-semibold text-sm">
                                                    {{ substr($comment->author_name, 0, 1) }}
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-black">{{ $comment->author_name }}</h4>
                                                <p class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                        @auth
                                            @if(Auth::id() === $comment->user_id || Auth::user()->hasRole('admin'))
                                                <form action="{{ route('comments.destroy', $comment) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-700 text-sm font-medium">
                                                        Delete
                                                    </button>
                                                </form>
                                            @endif
                                        @endauth
                                    </div>
                                    <p class="text-gray-700 leading-relaxed">{{ $comment->content }}</p>
                                </div>
                            @empty
                                <div class="text-center py-8">
                                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                    <p class="text-gray-500">No comments yet. Be the first to share your thoughts!</p>
                                </div>
                            @endforelse
                        </div>

                        <!-- Add Comment Form -->
                        <div class="bg-white border border-gold rounded-2xl p-6">
                            <h3 class="text-xl font-bold text-black mb-4">Add a Comment</h3>
                            
                            <form action="{{ route('blog.comments.store', $post) }}" method="POST">
                                @csrf
                                
                                @guest
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label for="guest_name" class="block text-sm font-medium text-black mb-2">Name *</label>
                                            <input 
                                                type="text" 
                                                name="guest_name" 
                                                id="guest_name"
                                                required
                                                class="w-full px-4 py-2 bg-white border border-gray-300 text-gray-900 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200"
                                                value="{{ old('guest_name') }}"
                                            >
                                            @error('guest_name')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="guest_email" class="block text-sm font-medium text-black mb-2">Email *</label>
                                            <input 
                                                type="email" 
                                                name="guest_email" 
                                                id="guest_email"
                                                required
                                                class="w-full px-4 py-2 bg-white border border-gray-300 text-gray-900 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200"
                                                value="{{ old('guest_email') }}"
                                            >
                                            @error('guest_email')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                @endguest

                                <div class="mb-4">
                                    <label for="content" class="block text-sm font-medium text-black mb-2">Comment *</label>
                                    <textarea 
                                        name="content" 
                                        id="content" 
                                        rows="4"
                                        required
                                        class="w-full px-4 py-2 bg-white border border-gray-300 text-gray-900 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200"
                                        placeholder="Share your thoughts..."
                                    >{{ old('content') }}</textarea>
                                    @error('content')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button 
                                    type="submit" 
                                    class="w-full md:w-auto px-6 py-3 gold-gradient text-black font-bold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300 border border-gold"
                                >
                                    Post Comment
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Author Bio -->
                    <div class="bg-white border border-gold rounded-2xl p-6 mb-6">
                        <h3 class="text-lg font-bold text-black mb-4">About the Author</h3>
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center border border-yellow-200">
                                <span class="text-yellow-600 font-semibold">
                                    {{ substr($post->user->name, 0, 1) }}
                                </span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-black">{{ $post->user->name }}</h4>
                                <p class="text-sm text-gray-500">Community Contributor</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Passionate about sharing knowledge and helping others learn and grow through community education.
                        </p>
                    </div>

                    <!-- Share Widget -->
                    <div class="bg-white border border-gold rounded-2xl p-6">
                        <h3 class="text-lg font-bold text-black mb-4">Share This Post</h3>
                        <div class="flex space-x-3">
                            <button onclick="shareOnTwitter()" class="flex-1 flex items-center justify-center px-4 py-2 gold-gradient text-black font-bold rounded-lg hover:shadow-lg transition-all duration-200 border border-gold">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                </svg>
                                Twitter
                            </button>
                            <button onclick="shareOnLinkedIn()" class="flex-1 flex items-center justify-center px-4 py-2 gold-gradient text-black font-bold rounded-lg hover:shadow-lg transition-all duration-200 border border-gold">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                                LinkedIn
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection

@push('scripts')
<script>
    function shareOnTwitter() {
        const url = encodeURIComponent(window.location.href);
        const text = encodeURIComponent("{{ $post->title }}");
        window.open(`https://twitter.com/intent/tweet?text=${text}&url=${url}`, '_blank');
    }

    function shareOnLinkedIn() {
        const url = encodeURIComponent(window.location.href);
        window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${url}`, '_blank');
    }
</script>
@endpush