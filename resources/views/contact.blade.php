@extends('layouts.app')

@section('title', 'Contact - Streetversity')
@section('description', 'Have questions about our programs, partnerships, or sponsorship opportunities? We\'re here to help and would love to hear from you.')

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
<div class="flex flex-col w-full" x-data="{ isSuccess: {{ session('success') ? 'true' : 'false' }}, isSubmitting: false }">
    <!-- Hero Section -->
    <section class="bg-gray py-16 md:py-24 w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
                <div class="space-y-4">
                    <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                        Get in Touch
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tighter">
                        Let's Start a Conversation
                    </h1>
                    <p class="text-lg text-muted-foreground max-w-[600px]">
                        Have questions about our programs, partnerships, or sponsorship
                        opportunities? We're here to help and would love to hear from
                        you.
                    </p>
                </div>
                <div class="relative h-[400px]">
                    <img
                        src="{{ asset('images/contact.jpg') }}"
                        alt="Streetversity contact"
                        class="object-cover rounded-lg w-full h-full"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-16 md:py-24 bg-white w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Details -->
                <div>
                    <div class="space-y-8">
                        <div>
                            <h2 class="text-2xl font-bold mb-6">
                                Contact Information
                            </h2>
                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <div class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-primary">
                                        <svg class="h-5 w-5 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold">Visit Us</h3>
                                        <p class="text-muted-foreground">
                                            Oduom Bus Stop
                                            <br />
                                            Kumasi, Ashanti Region
                                            <br />
                                            Ghana
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-primary">
                                        <svg class="h-5 w-5 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold">Office Hours</h3>
                                        <p class="text-muted-foreground">
                                            Monday - Friday: 8:00 AM - 5:00 PM
                                            <br />
                                            Saturday: 9:00 AM - 1:00 PM
                                            <br />
                                            Sunday: Closed
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="bg-gray border-none rounded-xl border py-6 shadow-sm">
                            <div class="px-6">
                                <h3 class="font-semibold mb-4">Quick Actions</h3>
                                <div class="space-y-3">
                                    <a
                                        href="https://wa.me/+233552964481"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="w-full bg-primary text-dark hover:bg-highlight px-4 py-2 rounded-md text-sm font-medium transition-colors inline-flex items-center justify-center gap-2"
                                    >
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                        Chat on WhatsApp
                                    </a>
                                    <a
                                        href="tel:+233552964481"
                                        class="w-full border border-gray-300 bg-background hover:bg-accent hover:text-accent-foreground px-4 py-2 rounded-md text-sm font-medium transition-colors inline-flex items-center justify-center gap-2"
                                    >
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        Call Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <div x-show="!isSuccess" class="bg-gray border-none rounded-xl border py-6 shadow-sm">
                        <div class="px-6 pb-6">
                            <h2 class="text-2xl font-bold mb-2">Send Us a Message</h2>
                            <p class="text-muted-foreground mb-6">
                                Fill out the form below and we'll get back to you as soon
                                as possible.
                            </p>
                            <form action="{{ route('contact.store') }}" method="POST" @submit.prevent="isSubmitting = true; $el.submit();">
                                @csrf
                                
                                @if(session('success'))
                                <div class="p-4 rounded-lg bg-green-50 border border-green-200 flex items-center gap-3 mb-6">
                                    <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <div>
                                        <p class="text-green-800 font-medium">Message Sent Successfully!</p>
                                        <p class="text-green-600 text-sm">{{ session('success') }}</p>
                                    </div>
                                </div>
                                @endif
                                
                                @if(session('error'))
                                <div class="p-4 rounded-lg bg-red-50 border border-red-200 flex items-center gap-3 mb-6">
                                    <svg class="h-5 w-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="text-red-800 font-medium">Submission Failed</p>
                                        <p class="text-red-600 text-sm">{{ session('error') }}</p>
                                    </div>
                                </div>
                                @endif

                                <div class="grid md:grid-cols-2 gap-4 mb-4">
                                    <div class="space-y-2">
                                        <label for="firstName" class="text-sm font-medium">First Name *</label>
                                        <input
                                            id="firstName"
                                            name="firstName"
                                            type="text"
                                            placeholder="John"
                                            required
                                            disabled="isSubmitting"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                            value="{{ old('firstName') }}"
                                        >
                                    </div>
                                    <div class="space-y-2">
                                        <label for="lastName" class="text-sm font-medium">Last Name *</label>
                                        <input
                                            id="lastName"
                                            name="lastName"
                                            type="text"
                                            placeholder="Doe"
                                            required
                                            disabled="isSubmitting"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                            value="{{ old('lastName') }}"
                                        >
                                    </div>
                                </div>

                                <div class="space-y-2 mb-4">
                                    <label for="email" class="text-sm font-medium">Email Address *</label>
                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        placeholder="john.doe@example.com"
                                        required
                                        disabled="isSubmitting"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                        value="{{ old('email') }}"
                                    >
                                </div>

                                <div class="space-y-2 mb-4">
                                    <label for="subject" class="text-sm font-medium">Subject *</label>
                                    <input
                                        id="subject"
                                        name="subject"
                                        type="text"
                                        placeholder="What is your message about?"
                                        required
                                        disabled="isSubmitting"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                        value="{{ old('subject') }}"
                                    >
                                </div>

                                <div class="space-y-2 mb-6">
                                    <label for="message" class="text-sm font-medium">Message *</label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        placeholder="Tell us how we can help you..."
                                        class="min-h-[150px] w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                                        required
                                        disabled="isSubmitting"
                                    >{{ old('message') }}</textarea>
                                </div>

                                <button
                                    type="submit"
                                    class="w-full bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-sm font-medium transition-colors"
                                    :disabled="isSubmitting"
                                >
                                    <span x-show="!isSubmitting">Send Message</span>
                                    <span x-show="isSubmitting" class="flex items-center justify-center gap-2">
                                        <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        Sending...
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div x-show="isSuccess" x-cloak class="bg-gray border-none rounded-xl border py-6 shadow-sm">
                        <div class="px-6">
                            <div class="text-center space-y-4 py-12">
                                <div class="inline-flex h-16 w-16 items-center justify-center rounded-full bg-primary">
                                    <svg class="h-8 w-8 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <h2 class="text-2xl font-bold">
                                    Message Sent Successfully!
                                </h2>
                                <p class="text-muted-foreground max-w-[400px] mx-auto">
                                    Thank you for contacting us. We'll get back to you
                                    within 24 hours.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 md:py-24 bg-white w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-12">
                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-highlight text-dark">
                    FAQs
                </span>
                <h2 class="text-3xl md:text-4xl font-bold">
                    Frequently Asked Questions
                </h2>
                <p class="text-muted-foreground max-w-[800px] mx-auto">
                    Find answers to common questions about Streetversity.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 max-w-[1000px] mx-auto">
                @php
                $faqs = [
                    [
                        'question' => 'What are the admission requirements?',
                        'answer' => 'Applicants must be at least 16 years old and have a passion for design. No prior experience is required, but basic literacy is necessary.',
                    ],
                    [
                        'question' => 'How long are the programs?',
                        'answer' => 'Programs range from 6 to 24 months depending on the specialization. All programs include both theoretical and practical training.',
                    ],
                    [
                        'question' => 'Is financial aid available?',
                        'answer' => 'Yes, we offer sponsorship opportunities for qualified students who cannot afford tuition. Apply for sponsorship during the application process.',
                    ],
                    [
                        'question' => 'Do you provide job placement?',
                        'answer' => 'We offer career support including job placement assistance, entrepreneurship guidance, and connections to our industry network.',
                    ],
                ];
                @endphp
                @foreach($faqs as $faq)
                <div class="bg-gray border-none rounded-xl border py-6 shadow-sm">
                    <div class="px-6">
                        <h3 class="font-semibold mb-2">{{ $faq['question'] }}</h3>
                        <p class="text-muted-foreground">{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
