<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - @yield('title', 'Streetversity')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|poppins:400,500,600,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
</head>
<body class="font-sans antialiased bg-white">
    <!-- Admin Header -->
    <header class="bg-white shadow-sm border-b border-gold">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-6">
                    <!-- Logo -->
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center overflow-hidden border border-gold">
                            <img src="{{ asset('logo.png') }}" alt="Streetversity Logo" class="w-full h-full object-contain p-1">
                        </div>
                        <span class="text-lg font-bold text-black">Admin Panel</span>
                    </a>
                    
                    <!-- Navigation -->
                    <nav class="hidden md:flex space-x-1">
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gold hover:bg-yellow-50 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-yellow-50 text-gold border-b-2 border-gold' : '' }}">
                            Dashboard
                        </a>
                        <a href="{{ route('admin.blog.index') }}" class="text-gray-600 hover:text-gold hover:bg-yellow-50 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('admin.blog.*') ? 'bg-yellow-50 text-gold border-b-2 border-gold' : '' }}">
                            Blog Posts
                        </a>
                        <a href="{{ route('admin.comments.index') }}" class="text-gray-600 hover:text-gold hover:bg-yellow-50 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('admin.comments.*') ? 'bg-yellow-50 text-gold border-b-2 border-gold' : '' }}">
                            Comments
                        </a>
                        <a href="{{ route('admin.messages.index') }}" class="text-gray-600 hover:text-gold hover:bg-yellow-50 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('admin.messages.*') ? 'bg-yellow-50 text-gold border-b-2 border-gold' : '' }}">
                            Messages
                        </a>
                    </nav>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-gold transition-colors duration-200 flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span>View Site</span>
                    </a>
                    <span class="text-gray-300">|</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-gray-600 hover:text-gold transition-colors duration-200 flex items-center space-x-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Admin Content -->
    <main class="min-h-screen bg-white">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

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