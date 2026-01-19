@extends('layouts.app')

@section('title', 'Apply - Streetversity')
@section('description', 'Take the first step towards a transformative design education and career. Applications are now open for our upcoming cohorts.')

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
<div class="flex flex-col w-full" x-data="{ isSuccess: false, isSubmitting: false, fileSelected: false }">
    <!-- Hero Section -->
    <section class="bg-gray py-16 md:py-24 w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
                <div class="space-y-4">
                    <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                        Apply Now
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tighter">
                        Become a Streetversity Apprentice
                    </h1>
                    <p class="text-lg text-muted-foreground max-w-[600px]">
                        Take the first step towards a transformative design education
                        and career. Applications are now open for our upcoming cohorts.
                    </p>
                </div>
                <div class="relative h-[400px]">
                    <img
                        src="{{ asset('images/person3.png') }}"
                        alt="Streetversity application process"
                        class="object-cover rounded-lg w-full h-full"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form -->
    <section class="py-16 md:py-24 bg-white w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-[800px] mx-auto">
                <div x-show="!isSuccess" class="bg-gray border-none rounded-xl border py-6 shadow-sm">
                    <div class="px-6 pb-6">
                        <h2 class="text-2xl font-bold mb-2">Application Form</h2>
                        <p class="text-muted-foreground mb-6">
                            Fill out the form below to apply for our design programs.
                            All fields marked with * are required.
                        </p>
                        <form action="{{ route('apply.store') }}" method="POST" enctype="multipart/form-data" x-data="{ isSubmitting: false, isSuccess: false }" @submit="isSubmitting = true">
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
                                    <label for="fullName" class="text-sm font-medium">Full Name *</label>
                                    <input
                                        id="fullName"
                                        name="fullName"
                                        type="text"
                                        placeholder="Enter your full name"
                                        required
                                        disabled="isSubmitting"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                    >
                                </div>
                                <div class="space-y-2">
                                    <label for="age" class="text-sm font-medium">Age *</label>
                                    <input
                                        id="age"
                                        name="age"
                                        type="number"
                                        placeholder="Enter your age"
                                        min="16"
                                        max="100"
                                        required
                                        disabled="isSubmitting"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                    >
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4 mb-4">
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
                            </div>

                            <div class="space-y-2 mb-4">
                                <label for="program" class="text-sm font-medium">Area of Interest *</label>
                                <select
                                    id="program"
                                    name="program"
                                    required
                                    disabled="isSubmitting"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                >
                                    <option value="">Select a program</option>
                                    <option value="product-design">Product Design</option>
                                    <option value="graphic-design">Graphic Design</option>
                                    <option value="3d-signage">3D Signage</option>
                                    <option value="metal-fabrication">Metal Fabrication</option>
                                    <option value="woodwork">Woodwork</option>
                                    <option value="interior-design">Interior Design</option>
                                    <option value="leatherwork">Leatherwork</option>
                                </select>
                            </div>

                            <div class="space-y-2 mb-4">
                                <label for="statement" class="text-sm font-medium">Personal Statement *</label>
                                <textarea
                                    id="statement"
                                    name="statement"
                                    placeholder="Tell us why you want to join Streetversity and what you hope to achieve (minimum 100 words)"
                                    class="min-h-[150px] w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                    required
                                    disabled="isSubmitting"
                                ></textarea>
                            </div>

                            <div class="space-y-2 mb-6">
                                <label for="portfolio" class="text-sm font-medium">
                                    CV or Portfolio (Optional)
                                </label>
                                <div class="flex items-center gap-4">
                                    <input
                                        id="portfolio"
                                        name="portfolio"
                                        type="file"
                                        accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                                        @change="fileSelected = $event.target.files.length > 0"
                                        disabled="isSubmitting"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary file:text-dark hover:file:bg-highlight"
                                    >
                                    <svg x-show="fileSelected" class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-sm text-muted-foreground">
                                    Accepted formats: PDF, DOC, DOCX, JPG, PNG (Max 5MB)
                                </p>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-4">
                                <button
                                    type="submit"
                                    class="bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-sm font-medium transition-colors"
                                    :disabled="isSubmitting"
                                >
                                    <span x-show="!isSubmitting">Submit Application</span>
                                    <span x-show="isSubmitting" class="flex items-center gap-2">
                                        <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        Submitting...
                                    </span>
                                </button>
                                <a
                                    href="https://wa.me/233552964481"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="border border-gray-300 bg-background hover:bg-accent hover:text-accent-foreground px-6 py-3 rounded-md text-sm font-medium transition-colors inline-flex items-center justify-center gap-2"
                                >
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                    Contact via WhatsApp
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                                <div x-show="isSuccess || @js(session('success'))" x-cloak class="bg-gray border-none rounded-xl border py-6 shadow-sm">
                    <div class="px-6">
                        <div class="text-center space-y-4 py-12">
                            <div class="inline-flex h-16 w-16 items-center justify-center rounded-full bg-primary">
                                <svg class="h-8 w-8 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold">
                                Application Submitted Successfully!
                            </h2>
                            <p class="text-muted-foreground max-w-[600px] mx-auto">
                                Thank you for applying to Streetversity. We'll review
                                your application and get back to you within 5-7 business
                                days.
                            </p>
                            <div class="pt-4">
                                <a
                                    href="https://wa.me/233552964481"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-sm font-medium transition-colors inline-flex items-center gap-2"
                                >
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                    Contact us on WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Information -->
    <section class="py-16 md:py-32 bg-gray w-full relative overflow-hidden">
        <div class="container mx-auto px-4 md:px-6 relative z-10">
            <div class="text-center space-y-6 mb-16">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    Application Process
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight">
                    What Happens Next?
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Here's what you can expect after submitting your application.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @php
                $steps = [
                    ['step' => '1', 'title' => 'Application Review', 'description' => 'Our admissions team will carefully review your application within 5-7 business days to assess your fit for the program.', 'emoji' => '📋', 'gradient' => 'from-blue-500/20 to-purple-500/20'],
                    ['step' => '2', 'title' => 'Interview', 'description' => 'Selected candidates will be invited for an interview (in-person or virtual) to discuss your goals and aspirations.', 'emoji' => '🗣️', 'gradient' => 'from-pink-500/20 to-red-500/20'],
                    ['step' => '3', 'title' => 'Enrollment', 'description' => 'Successful applicants will receive an offer letter and enrollment details to begin your journey with Streetversity.', 'emoji' => '🎓', 'gradient' => 'from-green-500/20 to-teal-500/20'],
                ];
                @endphp
                @foreach($steps as $step)
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $step['gradient'] }} group-hover:opacity-100 opacity-0 rounded-2xl transition-all duration-500 blur-xl"></div>
                    <div class="relative bg-white/80 backdrop-blur-sm border border-gray-100 rounded-2xl p-8 h-full transition-all duration-500 group-hover:transform group-hover:scale-105 group-hover:shadow-2xl group-hover:border-primary/20">
                        <div class="space-y-6">
                            <div class="relative">
                                <div class="flex items-center gap-4">
                                    <div class="flex-shrink-0 h-14 w-14 flex items-center justify-center rounded-full bg-primary text-dark font-bold text-2xl">
                                        {{ $step['step'] }}
                                    </div>
                                    <div class="text-5xl inline-block">{{ $step['emoji'] }}</div>
                                </div>
                                <div class="absolute -top-2 -right-2 w-4 h-4 bg-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="space-y-4">
                                <h3 class="text-2xl font-bold text-gray-900 transition-colors duration-300">
                                    {{ $step['title'] }}
                                </h3>
                                <p class="text-lg text-muted-foreground">
                                    {{ $step['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
