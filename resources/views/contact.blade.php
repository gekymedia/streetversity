@extends('layouts.app')

@section('title', 'Contact Us - Streetversity')
@section('description', 'Get in touch with Streetversity. We would love to hear from you about collaborations, questions, or feedback.')

@section('content')
    <!-- Hero Section -->
    <section class="gold-gradient text-black py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 fade-in-up">
                    Get In Touch
                </h1>
                <p class="text-xl text-gray-800 max-w-3xl mx-auto fade-in-up" style="animation-delay: 0.2s">
                    Have questions, suggestions, or want to collaborate? We'd love to hear from you.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Contact Information -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-2xl border border-gold p-8 shadow-sm">
                        <h2 class="text-2xl font-bold text-black mb-8">Contact Information</h2>
                        
                        <div class="space-y-6">
                            <!-- Email -->
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-yellow-100 rounded-2xl flex items-center justify-center flex-shrink-0 border border-yellow-200">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-black mb-1">Email Us</h3>
                                    <p class="text-gray-600">info@streetversity.com</p>
                                    <p class="text-gray-600">support@streetversity.com</p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-yellow-100 rounded-2xl flex items-center justify-center flex-shrink-0 border border-yellow-200">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-black mb-1">Call Us</h3>
                                    <p class="text-gray-600">(+233) 55 296 4481</p>
                                    <p class="text-gray-600">Mon - Fri, 9am - 6pm</p>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-yellow-100 rounded-2xl flex items-center justify-center flex-shrink-0 border border-yellow-200">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-black mb-1">Visit Us</h3>
                                    <p class="text-gray-600">Oduom Bus Stop, Kumasi, </p>
                                    <p class="text-gray-600">Ashanti Region, Ghana</p>
                                </div>
                            </div>

                            <!-- Social Media -->
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-yellow-100 rounded-2xl flex items-center justify-center flex-shrink-0 border border-yellow-200">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-black mb-3">Follow Us</h3>
                                    <div class="flex space-x-4">
                                        <a href="#" class="text-gray-400 hover:text-gold transition-colors duration-200">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-gold transition-colors duration-200">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                            </svg>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-gold transition-colors duration-200">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl border border-gold p-8 shadow-sm">
                        <h2 class="text-2xl font-bold text-black mb-2">Send us a Message</h2>
                        <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- Name -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-black mb-2">Full Name *</label>
                                    <input 
                                        type="text" 
                                        name="name" 
                                        id="name"
                                        required
                                        class="w-full px-4 py-3 bg-white border border-gray-300 text-gray-900 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200"
                                        value="{{ old('name') }}"
                                        placeholder="Your full name"
                                    >
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-black mb-2">Email Address *</label>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        id="email"
                                        required
                                        class="w-full px-4 py-3 bg-white border border-gray-300 text-gray-900 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200"
                                        value="{{ old('email') }}"
                                        placeholder="your.email@example.com"
                                    >
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="mb-6">
                                <label for="subject" class="block text-sm font-medium text-black mb-2">Subject *</label>
                                <input 
                                    type="text" 
                                    name="subject" 
                                    id="subject"
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-300 text-gray-900 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200"
                                    value="{{ old('subject') }}"
                                    placeholder="What is this regarding?"
                                >
                                @error('subject')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Message -->
                            <div class="mb-6">
                                <label for="message" class="block text-sm font-medium text-black mb-2">Message *</label>
                                <textarea 
                                    name="message" 
                                    id="message" 
                                    rows="6"
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-300 text-gray-900 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200"
                                    placeholder="Tell us how we can help you..."
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button 
                                type="submit" 
                                class="w-full md:w-auto px-8 py-4 gold-gradient text-black font-bold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300 border border-gold"
                            >
                                Send Message
                                <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="text-xl text-gray-600">
                    Quick answers to common questions
                </p>
            </div>

            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white border border-gold rounded-2xl p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-black mb-2">
                        Is Streetversity really free?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Yes! All our training resources, blog content, and community features are completely free. 
                        We believe education should be accessible to everyone.
                    </p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white border border-gold rounded-2xl p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-black mb-2">
                        How can I contribute to Streetversity?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        We welcome contributions! You can write blog posts, create tutorials, mentor other learners, 
                        or help improve our platform. Contact us to discuss how you can get involved.
                    </p>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white border border-gold rounded-2xl p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-black mb-2">
                        How long does it take to get a response?
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        We typically respond to all messages within 24-48 hours. For urgent matters, 
                        please call us directly during business hours.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection