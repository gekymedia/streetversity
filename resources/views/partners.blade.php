@extends('layouts.app')

@section('title', 'Partners - Streetversity')
@section('description', 'Partner with Streetversity to empower the next generation of product designers.')

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
                        Partnerships
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tighter">
                        Building Bridges Through Collaboration
                    </h1>
                    <p class="text-lg text-muted-foreground max-w-[600px]">
                        Partner with Streetversity to empower the next generation of
                        product designers.
                    </p>
                </div>
                <div class="relative h-[400px]">
                    <img
                        src="{{ asset('images/team-short.jpg') }}"
                        alt="Streetversity partnerships"
                        class="object-cover rounded-lg w-full h-full"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Current Partners -->
    <section class="py-16 md:py-32 bg-white w-full relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-40 right-20 w-72 h-72 border-2 border-primary rounded-full"></div>
            <div class="absolute bottom-40 left-20 w-56 h-56 border-2 border-highlight rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 md:px-6 relative z-10">
            <div class="text-center space-y-6 mb-16">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Our Network
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight">
                    Trusted Partners
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    We're proud to collaborate with leading institutions and
                    organizations committed to design education in Africa.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @php
                $partners = [
                    ['name' => 'KNUST', 'type' => 'Academic Partner', 'description' => 'Collaborating on technical education programs and student exchange initiatives.', 'logo' => 'knust.svg'],
                    ['name' => 'Sunyani Technical University', 'type' => 'Academic Partner', 'description' => 'Collaborating on technical education programs and student exchange initiatives.', 'logo' => 'sunyani.svg'],
                    ['name' => 'TK Innovate Co. Ltd', 'type' => 'Industry Partner', 'description' => 'Connecting students with professional designers and industry opportunities.', 'logo' => 'logo1.svg'],
                ];
                @endphp
                @foreach($partners as $partner)
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-indigo-500/10 rounded-xl transition-all duration-500 blur-md opacity-30 group-hover:opacity-100"></div>
                    <div class="relative bg-white/90 backdrop-blur-sm border border-gray-100 rounded-xl p-6 h-full transition-all duration-500 group-hover:transform group-hover:scale-[1.02] group-hover:shadow-xl group-hover:border-primary/20">
                        <div class="flex flex-col h-full">
                            <div class="mb-6">
                                <div class="relative h-16 mb-4 overflow-hidden">
                                    <img
                                        src="{{ asset('logos/' . $partner['logo']) }}"
                                        alt="{{ $partner['name'] }}"
                                        class="object-contain h-full w-full transition-transform duration-500 group-hover:scale-110"
                                    >
                                </div>
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold text-gray-900 transition-colors duration-300">
                                        {{ $partner['name'] }}
                                    </h3>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-md text-xs font-medium">
                                        {{ $partner['type'] }}
                                    </span>
                                </div>
                            </div>
                            <p class="text-muted-foreground flex-grow">
                                {{ $partner['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Partnership Benefits -->
    <section class="py-16 md:py-32 bg-gray w-full relative overflow-hidden">
        <div class="container mx-auto px-4 md:px-6 relative z-10">
            <div class="text-center space-y-6 mb-16">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Benefits
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight">
                    Why Partner with Streetversity?
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Join us in creating transformative opportunities for African youth
                    through design education.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                @php
                $benefits = [
                    ['title' => 'Brand Visibility', 'description' => 'Enhance your organization\'s reputation as a supporter of education and innovation in Africa.', 'emoji' => '🏢', 'gradient' => 'from-blue-500/20 to-purple-500/20'],
                    ['title' => 'Talent Pipeline', 'description' => 'Access to skilled graduates ready to contribute to your organization with fresh perspectives.', 'emoji' => '🎓', 'gradient' => 'from-pink-500/20 to-red-500/20'],
                    ['title' => 'Social Impact', 'description' => 'Make a tangible difference in communities across Africa through design education.', 'emoji' => '🤝', 'gradient' => 'from-green-500/20 to-teal-500/20'],
                    ['title' => 'Network Growth', 'description' => 'Connect with other forward-thinking organizations and institutions across the continent.', 'emoji' => '🌍', 'gradient' => 'from-amber-500/20 to-orange-500/20'],
                ];
                @endphp
                @foreach($benefits as $benefit)
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $benefit['gradient'] }} group-hover:opacity-100 opacity-0 rounded-2xl transition-all duration-500 blur-xl"></div>
                    <div class="relative bg-white/80 backdrop-blur-sm border border-gray-100 rounded-2xl p-8 h-full transition-all duration-500 group-hover:transform group-hover:scale-105 group-hover:shadow-2xl group-hover:border-primary/20">
                        <div class="space-y-6">
                            <div class="relative">
                                <div class="text-6xl mb-4 inline-block">{{ $benefit['emoji'] }}</div>
                                <div class="absolute -top-2 -right-2 w-4 h-4 bg-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-2xl font-bold text-gray-900 transition-colors duration-300">
                                    {{ $benefit['title'] }}
                                </h3>
                                <p class="text-lg text-muted-foreground">
                                    {{ $benefit['description'] }}
                                </p>
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
                    Join Us
                </span>
                <h2 class="text-3xl md:text-4xl font-bold">
                    Together, We Can Transform Design Education
                </h2>
                <p class="text-gray-400">
                    Partner with us to create opportunities and build a brighter
                    future for African designers.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-lg font-semibold transition-colors inline-block">
                        Contact Us
                    </a>
                    <a href="{{ Route::has('sponsorship') ? route('sponsorship') : '#' }}" class="border border-gray-300 bg-transparent hover:bg-gray-800 px-6 py-3 rounded-md text-lg font-semibold transition-colors inline-block">
                        Sponsor a Student
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
