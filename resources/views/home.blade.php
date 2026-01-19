@extends('layouts.app')

@section('title', 'Streetversity - African Product Design Institute')
@section('description', 'Where street smarts meet world-class design. Streetversity is a transformative African product design institute empowering the next generation of designers.')

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
<div class="bg-gray flex flex-col w-full">
    <!-- Hero Section -->
    <section class="relative py-20 md:py-32 w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
                <div class="space-y-4" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
                    <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                        Transforming Design Education
                    </span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tighter">
                        Where street smarts meet world-class design
                    </h1>
                    <p class="text-lg text-muted-foreground max-w-[600px]">
                        Empowering the next generation of African product designers through
                        innovative, inclusive, and transformative education.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="{{ Route::has('apply') ? route('apply') : '#' }}" class="bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-sm font-medium transition-colors inline-block text-center">
                            Apply Now
                        </a>
                        <a href="{{ Route::has('programs') ? route('programs') : '#' }}" class="border border-gray-300 bg-background hover:bg-accent hover:text-accent-foreground px-6 py-3 rounded-md text-sm font-medium transition-colors inline-block text-center">
                            Explore Programs
                        </a>
                    </div>
                </div>
                <div class="relative h-[400px] lg:h-[500px]">
                    <img
                        src="{{ asset('images/metal.jpg') }}"
                        alt="Streetversity students working on design projects"
                        class="object-cover rounded-lg w-full h-full"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Counters -->
    <section class="bg-dark text-white py-24">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-12 md:gap-16">
                    <div class="text-center group">
                        <div class="relative">
                            <div class="font-bold text-4xl md:text-5xl" data-counter data-end="50" data-suffix="+"></div>
                            <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-8 h-0.5 bg-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <p class="text-gray-400 text-sm mt-3 font-medium tracking-wide uppercase">
                            Students Trained
                        </p>
                    </div>
                    <div class="text-center group">
                        <div class="relative">
                            <div class="font-bold text-4xl md:text-5xl" data-counter data-end="2" data-suffix="+"></div>
                            <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-8 h-0.5 bg-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <p class="text-gray-400 text-sm mt-3 font-medium tracking-wide uppercase">
                            Schools Partnered
                        </p>
                    </div>
                    <div class="text-center group">
                        <div class="relative">
                            <div class="font-bold text-4xl md:text-5xl" data-counter data-end="30" data-suffix="+"></div>
                            <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-8 h-0.5 bg-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <p class="text-gray-400 text-sm mt-3 font-medium tracking-wide uppercase">
                            Jobs Created
                        </p>
                    </div>
                    <div class="text-center group">
                        <div class="relative">
                            <div class="font-bold text-4xl md:text-5xl" data-counter data-end="25" data-suffix="+"></div>
                            <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-8 h-0.5 bg-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <p class="text-gray-400 text-sm mt-3 font-medium tracking-wide uppercase">
                            Communities Impacted
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-24 md:py-32 bg-white w-full relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-64 h-64 border-2 border-primary rounded-full"></div>
            <div class="absolute bottom-20 right-10 w-48 h-48 border-2 border-highlight rounded-full"></div>
            <div class="absolute top-1/2 left-1/3 w-32 h-32 bg-primary/10 rounded-full blur-xl"></div>
        </div>

        <div class="container mx-auto px-4 md:px-6 relative z-10">
            <div class="text-center space-y-6 mb-20">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Our Programs
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight">
                    World-Class Design Education
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Transformative programs designed to turn raw talent into professional expertise
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @php
                $programs = [
                    ['title' => 'Product Design', 'description' => 'Transform ideas into tangible solutions that change lives', 'emoji' => '🎨', 'gradient' => 'from-blue-500/20 to-purple-500/20'],
                    ['title' => 'Graphic Design', 'description' => 'Master the art of visual storytelling and brand communication', 'emoji' => '✨', 'gradient' => 'from-pink-500/20 to-red-500/20'],
                    ['title' => '3D Signage', 'description' => 'Create dimensional experiences that captivate and guide', 'emoji' => '🏗️', 'gradient' => 'from-green-500/20 to-teal-500/20'],
                    ['title' => 'Metal Fabrication', 'description' => 'Forge strength and beauty from raw materials', 'emoji' => '⚡', 'gradient' => 'from-orange-500/20 to-yellow-500/20'],
                    ['title' => 'Woodwork', 'description' => 'Shape nature\'s gifts into functional art and furniture', 'emoji' => '🌳', 'gradient' => 'from-amber-500/20 to-orange-500/20'],
                    ['title' => 'Interior Design', 'description' => 'Transform spaces into experiences that inspire daily life', 'emoji' => '🏡', 'gradient' => 'from-indigo-500/20 to-blue-500/20'],
                ];
                @endphp
                @foreach($programs as $index => $program)
                <div class="group relative">
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
                                <p class="text-lg text-muted-foreground">{{ $program['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-16">
                <a href="{{ Route::has('programs') ? route('programs') : '#' }}" class="bg-primary text-dark hover:bg-highlight px-8 py-4 rounded-md text-lg font-semibold transition-colors inline-block">
                    Discover All Programs
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 md:py-24 bg-gray w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-12">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Testimonials
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">Success Stories</h2>
                <p class="text-lg text-muted-foreground max-w-[800px] mx-auto">
                    Hear from our students about how Streetversity has transformed
                    their lives and careers.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @php
                $testimonials = [
                    ['quote' => 'Streetversity gave me the skills and confidence to start my own design business. The hands-on approach to learning was exactly what I needed.', 'name' => 'Kwame Mensah', 'role' => 'Product Designer'],
                    ['quote' => 'I went from having no formal design training to working with top clients in just one year after graduating from Streetversity.', 'name' => 'Ama Darko', 'role' => 'Interior Designer'],
                    ['quote' => 'The mentorship and practical training at Streetversity opened doors I never thought possible. Now I\'m teaching others what I learned.', 'name' => 'Kofi Addo', 'role' => ''],
                ];
                @endphp
                @foreach($testimonials as $testimonial)
                <div class="bg-white border-none rounded-xl border py-6 shadow-sm">
                    <div class="px-6">
                        <div class="space-y-4">
                            <p class="italic text-lg text-muted-foreground">
                                "{{ $testimonial['quote'] }}"
                            </p>
                            <div class="flex items-center gap-4">
                                <div>
                                    <p class="font-semibold">{{ $testimonial['name'] }}</p>
                                    @if($testimonial['role'])
                                    <p class="text-sm text-muted-foreground">
                                        {{ $testimonial['role'] }}
                                    </p>
                                    @endif
                                </div>
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
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
                <div class="space-y-4">
                    <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                        Join Us
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">
                        Ready to transform your future?
                    </h2>
                    <p class="text-lg text-gray-400 max-w-[600px]">
                        Apply now to join our next cohort of talented designers and
                        craftspeople. Limited spots available.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="{{ Route::has('apply') ? route('apply') : '#' }}" class="bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-sm font-medium transition-colors inline-block text-center">
                            Apply Now
                        </a>
                        <a href="{{ Route::has('sponsorship') ? route('sponsorship') : '#' }}" class="border border-gray-300 bg-transparent hover:bg-gray-800 px-6 py-3 rounded-md text-sm font-medium transition-colors inline-block text-center">
                            Sponsor a Student
                        </a>
                    </div>
                </div>
                <div class="relative h-[300px] lg:h-[400px]">
                    <img
                        src="{{ asset('images/student1.jpg') }}"
                        alt="Streetversity students collaborating"
                        class="object-cover rounded-lg w-full h-full"
                    >
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
