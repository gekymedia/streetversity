@extends('layouts.app')

@section('title', 'Sponsorship - Streetversity')
@section('description', 'Your sponsorship can transform the life of a talented prospect. Help us provide product design education to those who need it most.')

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
<div class="flex flex-col w-full" x-data="{ isSuccess: false, isSubmitting: false }">
    <!-- Hero Section -->
    <section class="bg-gray py-16 md:py-24 w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
                <div class="space-y-4">
                    <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                        Make a Difference
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tighter">
                        Sponsor a Student, Shape a Future
                    </h1>
                    <p class="text-lg text-muted-foreground max-w-[600px]">
                        Your sponsorship can transform the life of a talented prospect.
                        Help us provide product design education to those who need it
                        most.
                    </p>
                </div>
                <div class="relative h-[400px]">
                    <img
                        src="{{ asset('images/student2.jpg') }}"
                        alt="Streetversity sponsored students"
                        class="object-cover rounded-lg w-full h-full"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="py-16 md:py-32 bg-white w-full relative overflow-hidden">
        <div class="container mx-auto px-4 md:px-6 relative z-10">
            <div class="text-center space-y-6 mb-16">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Your Impact
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight">
                    What Your Sponsorship Achieves
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Every sponsorship directly impacts a student's life and future
                    career prospects.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                @php
                $impacts = [
                    ['title' => 'Education Access', 'description' => 'Provides full tuition for a student who couldn\'t otherwise afford it, opening doors to design education.', 'emoji' => '📚', 'gradient' => 'from-blue-500/20 to-purple-500/20'],
                    ['title' => 'Materials & Tools', 'description' => 'Covers essential design materials, tools, and equipment needed for hands-on learning and project development.', 'emoji' => '🔧', 'gradient' => 'from-pink-500/20 to-red-500/20'],
                    ['title' => 'Mentorship', 'description' => 'Enables one-on-one mentorship and career guidance from industry professionals to help students excel.', 'emoji' => '🏆', 'gradient' => 'from-green-500/20 to-teal-500/20'],
                    ['title' => 'Life Change', 'description' => 'Creates sustainable career opportunities for underserved youth, transforming lives and communities.', 'emoji' => '❤️', 'gradient' => 'from-amber-500/20 to-orange-500/20'],
                ];
                @endphp
                @foreach($impacts as $impact)
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $impact['gradient'] }} group-hover:opacity-100 opacity-0 rounded-2xl transition-all duration-500 blur-xl"></div>
                    <div class="relative bg-white/80 backdrop-blur-sm border border-gray-100 rounded-2xl p-8 h-full transition-all duration-500 group-hover:transform group-hover:scale-105 group-hover:shadow-2xl group-hover:border-primary/20">
                        <div class="space-y-6">
                            <div class="relative">
                                <div class="text-6xl mb-4 inline-block">{{ $impact['emoji'] }}</div>
                                <div class="absolute -top-2 -right-2 w-4 h-4 bg-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-2xl font-bold text-gray-900 transition-colors duration-300">
                                    {{ $impact['title'] }}
                                </h3>
                                <p class="text-lg text-muted-foreground">
                                    {{ $impact['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Sponsorship Tiers -->
    <section class="py-16 md:py-24 bg-gray w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-12">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Sponsorship Options
                </span>
                <h2 class="text-3xl md:text-4xl font-bold">
                    Choose Your Level of Support
                </h2>
                <p class="text-muted-foreground max-w-[800px] mx-auto">
                    Every contribution makes a difference. Choose a sponsorship level
                    that works for you.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-[1000px] mx-auto">
                @php
                $tiers = [
                    ['title' => 'Bronze Sponsor', 'amount' => 'GHS500', 'description' => 'Covers materials and tools for one student', 'features' => ['Sponsor certificate', 'Quarterly progress updates', 'Thank you letter from student']],
                    ['title' => 'Silver Sponsor', 'amount' => 'GHS1,500', 'description' => 'Covers partial tuition for one student', 'features' => ['All Bronze benefits', 'Student portfolio access', 'Invitation to graduation ceremony', 'Recognition on our website'], 'featured' => true],
                    ['title' => 'Gold Sponsor', 'amount' => 'GHS3,000', 'description' => 'Covers full tuition for one student', 'features' => ['All Silver benefits', 'Direct communication with student', 'VIP event invitations', 'Annual impact report', 'Naming opportunity']],
                ];
                @endphp
                @foreach($tiers as $tier)
                <div class="h-full">
                    <div class="bg-white border {{ isset($tier['featured']) && $tier['featured'] ? 'border-primary shadow-lg' : 'border-gray-200' }} rounded-xl h-full">
                        @if(isset($tier['featured']) && $tier['featured'])
                        <div class="bg-primary text-dark text-center py-2 text-sm font-medium">
                            Most Popular
                        </div>
                        @endif
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-2">{{ $tier['title'] }}</h3>
                            <div class="text-3xl font-bold text-dark bg-primary/90 px-4 py-2 rounded-md inline-block mt-2 mb-1">
                                {{ $tier['amount'] }}
                            </div>
                            <p class="text-muted-foreground mb-4">{{ $tier['description'] }}</p>
                            <ul class="space-y-2">
                                @foreach($tier['features'] as $feature)
                                <li class="flex items-start gap-2">
                                    <svg class="h-5 w-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-sm">{{ $feature }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Sponsorship Form -->
    <section class="py-16 md:py-24 bg-white w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-[800px] mx-auto">
                <div x-show="!isSuccess" class="bg-gray border-none rounded-xl border py-6 shadow-sm">
                    <div class="px-6 pb-6">
                        <h2 class="text-2xl font-bold mb-2">Sponsorship Form</h2>
                        <p class="text-muted-foreground mb-6">
                            Complete the form below to sponsor a Streetversity student.
                        </p>
                        <form action="{{ route('sponsorship.store') }}" method="POST" x-data="{ isSubmitting: false, isSuccess: false }" @submit="isSubmitting = true">
                            @csrf
                            
                            @if(session('success'))
                                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">
                                    {{ session('success') }}
                                </div>
                            @endif
                            
                            @if($errors->any())
                                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">
                                    <ul class="list-disc list-inside">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="grid md:grid-cols-2 gap-4 mb-4">
                                <div class="space-y-2">
                                    <label for="name" class="text-sm font-medium">Name/Organization *</label>
                                    <input
                                        id="name"
                                        name="name"
                                        type="text"
                                        placeholder="Your name or organization"
                                        required
                                        disabled="isSubmitting"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                    >
                                </div>
                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-medium">Email Address *</label>
                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        placeholder="your@email.com"
                                        required
                                        disabled="isSubmitting"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                    >
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4 mb-4">
                                <div class="space-y-2">
                                    <label for="phone" class="text-sm font-medium">Phone Number *</label>
                                    <input
                                        id="phone"
                                        name="phone"
                                        type="tel"
                                        placeholder="+233 123 456 789"
                                        required
                                        disabled="isSubmitting"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                    >
                                </div>
                                <div class="space-y-2">
                                    <label for="amount" class="text-sm font-medium">Sponsorship Amount (GHS) *</label>
                                    <input
                                        id="amount"
                                        name="amount"
                                        type="number"
                                        placeholder="Enter amount"
                                        min="100"
                                        required
                                        disabled="isSubmitting"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                    >
                                </div>
                            </div>

                            <div class="space-y-2 mb-6">
                                <label for="message" class="text-sm font-medium">Message (Optional)</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    placeholder="Any special requests or message for the student"
                                    class="min-h-[100px] w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                    disabled="isSubmitting"
                                ></textarea>
                            </div>

                            <div class="bg-white p-4 rounded-lg mb-6">
                                <p class="text-sm text-muted-foreground">
                                    <strong>Note:</strong> After submitting this form,
                                    you'll receive payment instructions via email.
                                    Sponsorships can be paid via bank transfer, mobile
                                    money, or credit card.
                                </p>
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-sm font-medium transition-colors"
                                :disabled="isSubmitting"
                            >
                                <span x-show="!isSubmitting">Submit Sponsorship</span>
                                <span x-show="isSubmitting" class="flex items-center justify-center gap-2">
                                    <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Submitting...
                                </span>
                            </button>
                        </form>
                    </div>
                </div>

                <div x-show="isSuccess || @js(session('success'))" x-cloak class="bg-gray border-none rounded-xl border py-6 shadow-sm">
                    <div class="px-6">
                        <div class="text-center space-y-4 py-12">
                            <div class="inline-flex h-16 w-16 items-center justify-center rounded-full bg-primary">
                                <svg class="h-8 w-8 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold">
                                Thank You for Your Generosity!
                            </h2>
                            <p class="text-muted-foreground max-w-[600px] mx-auto">
                                Your sponsorship commitment has been received. We'll
                                contact you within 24 hours with payment details and
                                next steps.
                            </p>
                            <p class="text-muted-foreground">
                                Together, we're transforming lives through design
                                education.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="py-16 md:py-24 bg-dark text-white w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-[800px] mx-auto text-center">
                <blockquote class="space-y-4">
                    <p class="text-xl md:text-2xl italic">
                        "Thanks to my sponsor, I was able to complete my training at
                        Streetversity and now run my own successful design studio. The
                        sponsorship didn't just pay for my education – it changed my
                        entire life trajectory."
                    </p>
                    <footer class="text-primary">
                        <cite class="not-italic font-semibold">
                            — Akosua Mensah, Streetversity Graduate
                        </cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>
</div>
@endsection
