@extends('layouts.app')

@section('title', 'Programs - Streetversity')
@section('description', 'Discover our range of practical, industry-focused design programs that combine traditional craftsmanship with modern design principles.')

@push('styles')
<style>
    .bg-gray {
        background-color: #f3f3f3;
    }
    .bg-dark {
        background-color: #191a23;
    }
    .bg-primary {
        background-color: hsl(60, 93%, 52%);
    }
    .bg-highlight {
        background-color: #b7e918;
    }
    .text-primary {
        color: hsl(60, 93%, 52%);
    }
    .text-dark {
        color: #191a23;
    }
    .text-muted-foreground {
        color: hsl(240, 3.8%, 46.1%);
    }
</style>
@endpush

@section('content')
<div class="flex flex-col w-full">
    <!-- Hero Section -->
    <section class="bg-gray py-16 md:py-24 w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
                <div class="space-y-4">
                    <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                        Our Programs
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tighter">Comprehensive Design Education</h1>
                    <p class="text-lg text-muted-foreground max-w-[600px]">
                        Discover our range of practical, industry-focused design programs that combine traditional craftsmanship
                        with modern design principles.
                    </p>
                </div>
                <div class="relative h-[400px]">
                    <img
                        src="{{ asset('images/instructor2.jpg') }}"
                        alt="Streetversity design workshop"
                        class="object-cover rounded-lg w-full h-full"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Overview -->
    <section class="py-16 md:py-24 bg-white w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-12">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Explore
                </span>
                <h2 class="text-3xl md:text-4xl font-bold">Our Training Categories</h2>
                <p class="text-muted-foreground max-w-[800px] mx-auto">
                    Each program is designed to provide practical skills, industry knowledge, and hands-on experience.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $programs = [
                    ['title' => 'Product Design', 'description' => 'Learn to create innovative products that solve real-world problems through user-centered design approaches.', 'emoji' => '🎨', 'gradient' => 'from-blue-500/20 to-cyan-500/20'],
                    ['title' => '3D Signage', 'description' => 'Create impactful three-dimensional signage for businesses and organizations using modern and traditional techniques.', 'emoji' => '📊', 'gradient' => 'from-purple-500/20 to-indigo-500/20'],
                    ['title' => 'Metal Fabrication', 'description' => 'Learn techniques for working with metal to create functional and artistic pieces that combine form and function.', 'emoji' => '⚡', 'gradient' => 'from-orange-500/20 to-yellow-500/20'],
                    ['title' => 'Woodwork', 'description' => 'Master the craft of woodworking to build furniture and decorative items with precision and creativity.', 'emoji' => '🌳', 'gradient' => 'from-amber-500/20 to-orange-500/20'],
                    ['title' => 'Interior Design', 'description' => 'Transform spaces with innovative interior design concepts and techniques that balance aesthetics and functionality.', 'emoji' => '🏡', 'gradient' => 'from-indigo-500/20 to-blue-500/20'],
                ];
                @endphp
                @foreach($programs as $index => $program)
                <div class="group relative h-full">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $program['gradient'] }} group-hover:opacity-100 opacity-0 rounded-2xl transition-all duration-500 blur-xl"></div>
                    <div class="relative bg-white/80 backdrop-blur-sm border border-gray-100 rounded-2xl p-8 h-full transition-all duration-500 group-hover:transform group-hover:scale-105 group-hover:shadow-2xl group-hover:border-primary/20">
                        <div class="space-y-6">
                            <div class="relative">
                                <div class="text-6xl mb-4 inline-block">{{ $program['emoji'] }}</div>
                                <div class="absolute -top-2 -right-2 w-4 h-4 bg-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="space-y-3">
                                <h3 class="text-2xl font-bold text-gray-900 transition-colors duration-300">
                                    {{ $program['title'] }}
                                </h3>
                                <p class="text-muted-foreground">{{ $program['description'] }}</p>
                            </div>
                            <a href="{{ Route::has('apply') ? route('apply') : '#' }}" class="mt-4 bg-primary text-dark hover:bg-highlight px-4 py-2 rounded-md text-sm font-medium transition-colors inline-flex items-center gap-1">
                                Apply for this program
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Program Structure -->
    <section class="py-16 md:py-24 bg-gray w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-12">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Our Approach
                </span>
                <h2 class="text-3xl md:text-4xl font-bold">Program Structure</h2>
                <p class="text-muted-foreground max-w-[800px] mx-auto">
                    Our unique approach combines theoretical knowledge, practical skills, and real-world experience.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                $structure = [
                    ['title' => 'Foundational Knowledge', 'description' => 'Build a strong theoretical foundation in design principles, history, and theory.', 'emoji' => '📚', 'gradient' => 'from-blue-500/20 to-cyan-500/20'],
                    ['title' => 'Hands-on Practice', 'description' => 'Develop practical skills through extensive workshop time and guided projects.', 'emoji' => '🛠️', 'gradient' => 'from-purple-500/20 to-indigo-500/20'],
                    ['title' => 'Industry Projects', 'description' => 'Work on real client briefs and industry challenges to build your portfolio.', 'emoji' => '💼', 'gradient' => 'from-orange-500/20 to-yellow-500/20'],
                    ['title' => 'Career Support', 'description' => 'Receive mentorship, job placement assistance, and entrepreneurship guidance.', 'emoji' => '🎓', 'gradient' => 'from-amber-500/20 to-orange-500/20'],
                ];
                @endphp
                @foreach($structure as $item)
                <div class="group relative h-full">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $item['gradient'] }} group-hover:opacity-100 opacity-0 rounded-2xl transition-all duration-500 blur-xl"></div>
                    <div class="relative bg-white/80 backdrop-blur-sm border border-gray-100 rounded-2xl p-8 h-full transition-all duration-500 group-hover:transform group-hover:scale-105 group-hover:shadow-2xl group-hover:border-primary/20">
                        <div class="space-y-6">
                            <div class="relative">
                                <div class="text-6xl mb-4 inline-block">{{ $item['emoji'] }}</div>
                                <div class="absolute -top-2 -right-2 w-4 h-4 bg-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="space-y-3">
                                <h3 class="text-xl font-bold text-gray-900 transition-colors duration-300">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="text-muted-foreground">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 md:py-24 bg-dark text-white w-full">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <div class="space-y-4 max-w-[800px] mx-auto">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Get Started
                </span>
                <h2 class="text-3xl md:text-4xl font-bold">Ready to Begin Your Design Journey?</h2>
                <p class="text-gray-400">
                    Applications are now open for our upcoming cohorts. Limited spots available.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4 justify-center">
                    <a href="{{ Route::has('apply') ? route('apply') : '#' }}" class="bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-lg font-semibold transition-colors inline-block">
                        Apply Now
                    </a>
                    <a href="{{ route('contact') }}" class="border border-gray-300 bg-transparent hover:bg-gray-800 px-6 py-3 rounded-md text-lg font-semibold transition-colors inline-block">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
