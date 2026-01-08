<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Streetversity - Free Training Hub')</title>
    <meta name="description" content="@yield('description', 'Streetversity - Your free community training hub for skill development and knowledge sharing')">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}">

    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#fbbf24">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|poppins:400,500,600,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <!-- Additional Styles -->
    @stack('styles')
</head>
<body class="font-sans antialiased bg-white">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50 border-b border-gold">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center shadow-lg overflow-hidden border border-gold">
                            <img src="{{ asset('logo.png') }}" alt="Streetversity Logo" class="w-full h-full object-contain">
                        </div>
                        <span class="text-xl font-bold text-black">Streetversity</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gold font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-gold border-b-2 border-gold pb-1' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-gold font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'text-gold border-b-2 border-gold pb-1' : '' }}">
                        About
                    </a>
                    <a href="{{ route('blog.index') }}" class="text-gray-600 hover:text-gold font-medium transition-colors duration-200 {{ request()->routeIs('blog.*') ? 'text-gold border-b-2 border-gold pb-1' : '' }}">
                        Blog
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-600 hover:text-gold font-medium transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-gold border-b-2 border-gold pb-1' : '' }}">
                        Contact
                    </a>
                    
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gold font-medium transition-colors duration-200 {{ request()->routeIs('admin.*') ? 'text-gold border-b-2 border-gold pb-1' : '' }}">
                            Admin
                        </a>
                    @endauth
                </div>

                <!-- Auth Links / User Menu -->
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium text-gray-600 hover:text-gold focus:outline-none transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-gold font-medium transition-colors duration-200">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="gold-gradient text-black px-4 py-2 rounded-lg font-medium hover:shadow-lg transition-all duration-200 shadow-md border border-gold">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-600 hover:text-gold hover:bg-yellow-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gold transition-colors duration-200">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="mobile-menu hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-gold">
                    <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-600 hover:text-gold font-medium {{ request()->routeIs('home') ? 'text-gold bg-yellow-50 rounded' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-600 hover:text-gold font-medium {{ request()->routeIs('about') ? 'text-gold bg-yellow-50 rounded' : '' }}">
                        About
                    </a>
                    <a href="{{ route('blog.index') }}" class="block px-3 py-2 text-gray-600 hover:text-gold font-medium {{ request()->routeIs('blog.*') ? 'text-gold bg-yellow-50 rounded' : '' }}">
                        Blog
                    </a>
                    <a href="{{ route('contact') }}" class="block px-3 py-2 text-gray-600 hover:text-gold font-medium {{ request()->routeIs('contact') ? 'text-gold bg-yellow-50 rounded' : '' }}">
                        Contact
                    </a>
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 text-gray-600 hover:text-gold font-medium {{ request()->routeIs('admin.*') ? 'text-gold bg-yellow-50 rounded' : '' }}">
                            Admin
                        </a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <main class="min-h-screen bg-white">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center shadow-lg overflow-hidden border border-gold">
                            <img src="{{ asset('logo.png') }}" alt="Streetversity Logo" class="w-full h-full object-contain">
                        </div>
                        <span class="text-xl font-bold text-white">Streetversity</span>
                    </div>
                    <p class="text-gray-400 mb-4 max-w-md">
                        Your free community training hub for skill development and knowledge sharing. 
                        Join us in building a better future through education.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-gold transition-colors duration-200">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gold transition-colors duration-200">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-gold tracking-wider uppercase mb-4">
                        Quick Links
                    </h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-base text-gray-300 hover:text-gold transition-colors duration-200">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-base text-gray-300 hover:text-gold transition-colors duration-200">About</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-base text-gray-300 hover:text-gold transition-colors duration-200">Blog</a></li>
                        <li><a href="{{ route('contact') }}" class="text-base text-gray-300 hover:text-gold transition-colors duration-200">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-sm font-semibold text-gold tracking-wider uppercase mb-4">
                        Contact
                    </h3>
                    <ul class="space-y-2">
                        <li class="text-base text-gray-300">info@streetversity.com</li>
                        <li class="text-base text-gray-300">(+233) 55 296 4481</li>
                        <li class="text-base text-gray-300">Oduom Bus Stop, Kumasi, Ashanti Region, Ghana</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-800">
                <p class="text-base text-gray-400 text-center">
                    &copy; {{ date('Y') }} Streetversity. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Flash Messages -->
    @if (session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
             class="fixed top-20 right-4 gold-gradient text-black px-6 py-3 rounded-lg shadow-lg z-50 transition-all duration-300 transform translate-x-0 border border-gold">
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
             class="fixed top-20 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transition-all duration-300 transform translate-x-0 border border-red-600">
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <span class="font-medium">{{ session('error') }}</span>
            </div>
        </div>
    @endif

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>

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

    @stack('scripts')

    <!-- Service Worker Registration -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('ServiceWorker registration successful');
                    })
                    .catch(err => {
                        console.log('ServiceWorker registration failed: ', err);
                    });
            });
        }
    </script>
</body>
</html>