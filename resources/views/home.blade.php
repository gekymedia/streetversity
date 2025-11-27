@extends('layouts.app')

@section('title', 'Streetversity - Free Training Hub')
@section('description', 'Join Streetversity for free community training, skill development, and knowledge sharing. Your journey to personal and professional growth starts here.')

@section('content')
    <!-- Hero Section -->
    <x-hero 
        title="Unlock Your Potential"
        subtitle="Join our free community training hub where knowledge meets opportunity. Learn, grow, and connect with like-minded individuals."
        ctaText="Explore Our Blog"
        ctaLink="{{ route('blog.index') }}"
    />

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
                    Why Choose Streetversity?
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We believe in making quality education accessible to everyone. 
                    Our platform offers free training resources and a supportive community.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center fade-in-up">
                    <div class="w-20 h-20 bg-yellow-100 rounded-2xl flex items-center justify-center mx-auto mb-6 border border-yellow-200">
                        <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l9-5m-9 5v9"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4">Free Training</h3>
                    <p class="text-gray-600">
                        Access high-quality training materials and resources completely free of charge. 
                        No hidden fees, no subscriptions.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center fade-in-up" style="animation-delay: 0.2s">
                    <div class="w-20 h-20 bg-yellow-100 rounded-2xl flex items-center justify-center mx-auto mb-6 border border-yellow-200">
                        <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4">Community Driven</h3>
                    <p class="text-gray-600">
                        Join a vibrant community of learners and mentors. Share knowledge, 
                        collaborate on projects, and grow together.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center fade-in-up" style="animation-delay: 0.4s">
                    <div class="w-20 h-20 bg-yellow-100 rounded-2xl flex items-center justify-center mx-auto mb-6 border border-yellow-200">
                        <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4">Skill Development</h3>
                    <p class="text-gray-600">
                        From technical skills to personal development, we offer diverse 
                        learning paths to help you achieve your goals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Blog Posts -->
    @if($featuredPosts->count() > 0)
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
                    Latest from Our Blog
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Stay updated with our latest articles, tutorials, and community insights.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($featuredPosts as $post)
                <x-card
                    title="{{ $post->title }}"
                    description="{{ $post->excerpt }}"
                    link="{{ route('blog.show', $post->slug) }}"
                    date="{{ $post->published_at->format('M d, Y') }}"
                    author="{{ $post->user->name }}"
                />
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center px-6 py-3 gold-gradient text-black font-bold rounded-lg hover:shadow-lg transition-all duration-300 transform hover:scale-105 border border-gold">
                    View All Posts
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="py-20 gold-gradient text-black">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Ready to Start Your Learning Journey?
            </h2>
            <p class="text-xl text-gray-800 mb-8">
                Join thousands of learners who are already transforming their lives with Streetversity.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center px-8 py-4 bg-black text-gold font-bold rounded-lg hover:bg-gray-900 transform hover:scale-105 transition-all duration-300 border-2 border-black">
                    Explore Content
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="{{ route('about') }}" class="inline-flex items-center px-8 py-4 border-2 border-black text-black font-bold rounded-lg hover:bg-black hover:text-gold transform hover:scale-105 transition-all duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="fade-in-up">
                    <div class="text-3xl md:text-4xl font-bold text-gold mb-2">1000+</div>
                    <div class="text-gray-600">Active Learners</div>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.1s">
                    <div class="text-3xl md:text-4xl font-bold text-gold mb-2">500+</div>
                    <div class="text-gray-600">Training Resources</div>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.2s">
                    <div class="text-3xl md:text-4xl font-bold text-gold mb-2">50+</div>
                    <div class="text-gray-600">Community Experts</div>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.3s">
                    <div class="text-3xl md:text-4xl font-bold text-gold mb-2">24/7</div>
                    <div class="text-gray-600">Learning Access</div>
                </div>
            </div>
        </div>
    </section>
@endsection