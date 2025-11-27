<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Streetversity') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
        <link rel="shortcut icon" href="{{ asset('logo.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|poppins:400,500,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-black">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black">
            <!-- Logo Section -->
            <div class="flex items-center space-x-4 mb-8">
                <div class="w-16 h-16 rounded-lg flex items-center justify-center shadow-lg overflow-hidden border-2 border-gold">
                    <img src="{{ asset('logo.png') }}" alt="Streetversity Logo" class="w-full h-full object-contain">
                </div>
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-gold">Streetversity</h1>
                    <p class="text-sm text-gray-400">Free Training Hub</p>
                </div>
            </div>

            <!-- Card Container -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-gray-900 border border-gold shadow-2xl overflow-hidden sm:rounded-2xl">
                {{ $slot }}
            </div>

            <!-- Back to Home Link -->
            <div class="mt-8 text-center">
                <a href="{{ route('home') }}" class="text-gold hover:text-yellow-400 font-medium transition-colors duration-200 flex items-center justify-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span>Back to Home</span>
                </a>
            </div>
        </div>

        <!-- Custom Styles -->
        <style>
            .gold-gradient {
                background: linear-gradient(135deg, #FFD700 0%, #B8860B 100%);
            }
            .text-gold {
                color: #FFD700;
            }
            .border-gold {
                border-color: #FFD700;
            }
        </style>
    </body>
</html>