@extends('layouts.app')

@section('title', 'About - Streetversity')
@section('description', 'Learn about Streetversity\'s mission, vision, and the story behind our transformative African product design institute.')

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
                        Our Story
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tighter">Transforming African Design Education</h1>
                    <p class="text-lg text-muted-foreground max-w-[600px]">
                        Founded with a vision to bridge the gap between street-level creativity and world-class design
                        education, Streetversity is empowering the next generation of African product designers.
                    </p>
                </div>
                <div class="relative h-[400px]">
                    <img
                        src="{{ asset('images/street3.jpg') }}"
                        alt="Streetversity campus"
                        class="object-cover rounded-lg w-full h-full"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Founder's Story -->
    <section class="py-16 md:py-24 bg-white w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
                <div class="order-2 lg:order-1 relative h-[400px]">
                    <img
                        src="{{ asset('images/founder1.jpg') }}"
                        alt="Anthony Yevugah, Founder of Streetversity"
                        class="object-cover rounded-lg w-full h-full"
                    >
                </div>
                <div class="order-1 lg:order-2 space-y-6">
                    <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                        Founder's Story
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold">Anthony Yevugah</h2>
                    <p class="text-lg text-muted-foreground">
                        Anthony Yevugah founded Streetversity in 2022 with a bold vision: to transform product design education in Africa by
                        combining traditional craftsmanship with modern design principles.
                    </p>
                    <p class="text-lg text-muted-foreground">
                        Streetversity was born out of <a href="https://tkinnovate.com" target="_blank" rel="noopener noreferrer" class="text-dark underline font-bold">TK Innovate</a>, a premier design and fabrication studio founded by Anthony in 2015. After years of success with TK Innovate, Anthony recognized the need to formalize the training of young talent who showed immense potential but lacked structured education.
                    </p>
                    <p class="text-lg text-muted-foreground">
                        Growing up in Ghana, Anthony witnessed firsthand the incredible creativity and resourcefulness of local
                        artisans who lacked formal training. This inspired him to create an educational institute that would
                        harness this raw talent and provide the technical skills needed to compete in the global design market.
                    </p>
                    <p class="text-lg text-muted-foreground">
                        With a background in industrial design and education, Anthony has built Streetversity into a beacon of
                        innovation and empowerment for young African designers, leveraging the industry expertise and connections established through <a href="https://tkinnovate.com" target="_blank" rel="noopener noreferrer" class="text-dark underline font-bold">TK Innovate</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-16 md:py-32 bg-white w-full relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-64 h-64 border-2 border-primary rounded-full"></div>
            <div class="absolute bottom-20 right-10 w-48 h-48 border-2 border-highlight rounded-full"></div>
            <div class="absolute top-1/2 left-1/3 w-32 h-32 bg-primary/10 rounded-full blur-xl"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-6 relative z-10">
            <div class="text-center space-y-6 mb-16">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Our Purpose
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight">Mission, Vision & Values</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    The guiding principles that drive everything we do at Streetversity
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @php
                $items = [
                    [
                        'title' => 'Mission',
                        'description' => 'To transform African product design education by combining street-level creativity with world-class design principles, creating pathways to sustainable careers for underserved youth.',
                        'emoji' => '🚀',
                        'gradient' => 'from-blue-500/20 to-purple-500/20',
                    ],
                    [
                        'title' => 'Vision',
                        'description' => 'To be the leading design institute in Africa, recognized globally for our innovative approach to design education and the exceptional quality of our graduates.',
                        'emoji' => '🔭',
                        'gradient' => 'from-pink-500/20 to-red-500/20',
                    ],
                    [
                        'title' => 'Core Values',
                        'description' => 'Our foundation is built on innovation, inclusivity, excellence, community, and sustainability.',
                        'emoji' => '💎',
                        'gradient' => 'from-green-500/20 to-teal-500/20',
                    ],
                ];
                @endphp
                @foreach($items as $index => $item)
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $item['gradient'] }} group-hover:opacity-100 opacity-0 rounded-2xl transition-all duration-500 blur-xl"></div>
                    <div class="relative bg-white/80 backdrop-blur-sm border border-gray-100 rounded-2xl p-8 h-full transition-all duration-500 group-hover:transform group-hover:scale-105 group-hover:shadow-2xl group-hover:border-primary/20">
                        <div class="space-y-6">
                            <div class="relative">
                                <div class="text-6xl mb-4 inline-block">{{ $item['emoji'] }}</div>
                                <div class="absolute -top-2 -right-2 w-4 h-4 bg-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-2xl font-bold text-gray-900 transition-colors duration-300">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="text-lg text-muted-foreground">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="py-16 md:py-24 bg-gray w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-12">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Our Work
                </span>
                <h2 class="text-3xl md:text-4xl font-bold">Streetversity in Action</h2>
                <p class="text-lg text-muted-foreground max-w-[800px] mx-auto">
                    See our students and instructors at work, creating and learning together.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @php
                $galleryImages = [
                    'women-tony.jpg',
                    'metal.jpg',
                    'street3.jpg',
                    'metro.JPG',
                    'student3.jpg',
                    'instructor1.jpg',
                    'student4.jpg',
                    'instructor2.jpg',
                ];
                @endphp
                @foreach($galleryImages as $index => $image)
                <div class="relative h-[200px] md:h-[250px]">
                    <img
                        src="{{ asset('images/' . $image) }}"
                        alt="Streetversity students and activities {{ $index + 1 }}"
                        class="object-cover rounded-lg w-full h-full"
                    >
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
                    Join Our Community
                </span>
                <h2 class="text-3xl md:text-4xl font-bold">Be Part of Our Story</h2>
                <p class="text-lg text-gray-400">
                    Whether you're a student, partner, or sponsor, there are many ways to get involved with Streetversity.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4 justify-center">
                    <a href="{{ Route::has('apply') ? route('apply') : '#' }}" class="bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-sm font-medium transition-colors inline-block">
                        Apply as a Student
                    </a>
                    <a href="{{ Route::has('sponsorship') ? route('sponsorship') : '#' }}" class="border border-gray-300 bg-transparent hover:bg-gray-800 px-6 py-3 rounded-md text-sm font-medium transition-colors inline-block">
                        Become a Sponsor
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
