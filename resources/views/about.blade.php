@extends('layouts.app')

@section('title', 'About Streetversity - Free Training Hub')
@section('description', 'Learn about Streetversity mission to provide free community training and skill development opportunities for everyone.')

@section('content')
    <!-- Hero Section -->
    <section class="gold-gradient text-black py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight fade-in-up">
                About Streetversity
            </h1>
            <p class="text-xl md:text-2xl text-gray-800 max-w-3xl mx-auto leading-relaxed fade-in-up">
                Empowering communities through accessible education and skill development
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-6">
                        Our Mission
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        At Streetversity, we believe that education should be accessible to everyone, 
                        regardless of their background or financial situation. We're committed to 
                        breaking down barriers to learning and creating opportunities for personal 
                        and professional growth.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Our platform brings together passionate educators, industry experts, and 
                        curious learners in a collaborative environment where knowledge is shared 
                        freely and skills are developed collectively.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-lg font-medium border border-yellow-200">
                            Free Access
                        </div>
                        <div class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-lg font-medium border border-yellow-200">
                            Community First
                        </div>
                        <div class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-lg font-medium border border-yellow-200">
                            Quality Education
                        </div>
                    </div>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.2s">
                    <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-8 h-96 flex items-center justify-center border border-yellow-200">
                        <svg class="w-48 h-48 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 14l9-5-9-5-9 5 9 5zm0 0l9-5m-9 5v9"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 18v4"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 15v4a2 2 0 002 2h6a2 2 0 002-2v-4"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
                    Our Values
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    The principles that guide everything we do at Streetversity
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-white border border-gold rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6 border border-yellow-200">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4">Accessibility</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We believe education should be free and accessible to all. No barriers, 
                        no prerequisites - just pure learning opportunities for everyone.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white border border-gold rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6 border border-yellow-200">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4">Community</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Learning is better together. We foster a supportive community where 
                        members help each other grow and succeed through collaboration.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white border border-gold rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6 border border-yellow-200">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4">Growth</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We're committed to continuous improvement and innovation in education. 
                        Our platform evolves with the needs of our community.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
                    Our Story
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    How Streetversity began and where we're headed
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in-up">
                    <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-8 h-96 flex items-center justify-center border border-yellow-200">
                        <svg class="w-48 h-48 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.2s">
                    <h3 class="text-2xl font-bold text-black mb-6">From Idea to Impact</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Streetversity was born from a simple observation: many people have 
                        valuable skills and knowledge to share, while many others are eager 
                        to learn but lack access to quality education resources.
                    </p>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        What started as a small community initiative has grown into a 
                        comprehensive platform connecting learners with mentors, providing 
                        free training materials, and fostering a culture of continuous learning.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Today, we're proud to serve thousands of learners worldwide, and 
                        we're just getting started. Our vision is to create a world where 
                        anyone, anywhere can access the education they need to thrive.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gray-50">
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

    <!-- CTA Section -->
    <section class="py-20 gold-gradient text-black">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Join Our Community Today
            </h2>
            <p class="text-xl text-gray-800 mb-8">
                Be part of the movement to make education accessible for everyone.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center px-8 py-4 bg-black text-gold font-bold rounded-lg hover:bg-gray-900 transform hover:scale-105 transition-all duration-300 border-2 border-black">
                    Start Learning
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 border-2 border-black text-black font-bold rounded-lg hover:bg-black hover:text-gold transform hover:scale-105 transition-all duration-300">
                    Get Involved
                </a>
            </div>
        </div>
    </section>
@endsection