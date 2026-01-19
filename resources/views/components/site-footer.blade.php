@php
$phone = ['+233 552964461', '+233 244847555', '+233 200669653'];
@endphp

<footer class="bg-dark text-white py-8 md:py-12 border-t w-full">
    <div class="container mx-auto px-6 sm:px-8">
        <!-- Main footer content -->
        <div class="space-y-8">
            <!-- Logo and description -->
            <div class="text-center md:text-left">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center md:justify-start mb-4 gap-3">
                    <div class="relative p-2 bg-white rounded-full shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ asset('logos/TK StreetVersity 23 1.svg') }}" alt="StreetVersity Logo" class="h-20 w-20 filter contrast-125 saturate-110">
                    </div>
                </a>
                <p class="text-base text-gray-400 max-w-md mx-auto md:mx-0">
                    Where street smarts meet world-class design. Empowering the next generation of African designers.
                </p>
            </div>

            <!-- Links grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Quick Links</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="text-gray-400 hover:text-primary text-base transition-colors">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="text-gray-400 hover:text-primary text-base transition-colors">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-primary text-base transition-colors">Blog</a>
                        </li>
                        <li>
                            <a href="{{ Route::has('programs') ? route('programs') : '#' }}" class="text-gray-400 hover:text-primary text-base transition-colors">Programs</a>
                        </li>
                        <li>
                            <a href="{{ Route::has('apply') ? route('apply') : '#' }}" class="text-gray-400 hover:text-primary text-base transition-colors">Apply</a>
                        </li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Support</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ Route::has('sponsorship') ? route('sponsorship') : '#' }}" class="text-gray-400 hover:text-primary text-base transition-colors">Sponsorship</a>
                        </li>
                        <li>
                            <a href="{{ Route::has('partners') ? route('partners') : '#' }}" class="text-gray-400 hover:text-primary text-base transition-colors">Partners</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="text-gray-400 hover:text-primary text-base transition-colors">Contact</a>
                        </li>
                        <li>
                            <a href="https://tkinnovate.com" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-primary text-base transition-colors">TK Innovate</a>
                        </li>
                        @guest
                        <li>
                            <a href="{{ route('login') }}" class="text-gray-400 hover:text-primary text-base transition-colors flex items-center gap-2">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Admin Login
                            </a>
                        </li>
                        @endguest
                        @auth
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="text-gray-400 hover:text-primary text-base transition-colors flex items-center gap-2">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                Admin Dashboard
                            </a>
                        </li>
                        @endauth
                    </ul>
                </div>

                <!-- Contact Us -->
                <div class="sm:col-span-2 lg:col-span-1">
                    <h3 class="font-semibold text-lg mb-4">Contact Us</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-gray-400 text-base">
                            <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Oduom Bus Stop,Kumasi, Ashanti Region, Ghana.</span>
                        </li>
                        @foreach($phone as $number)
                            <li>
                                <a href="tel:{{ str_replace(' ', '', $number) }}" class="flex items-start gap-3 text-gray-400 text-base">
                                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span>{{ $number }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom section -->
        <div class="mt-8 pt-6 border-t border-gray-800">
            <div class="flex flex-col items-center space-y-4 md:flex-row md:justify-between md:space-y-0">
                <p class="text-base text-gray-400 text-center md:text-left">
                    &copy; {{ date('Y') }} Streetversity. All rights reserved.
                </p>
                <div class="flex flex-col items-center gap-4 md:flex-row md:gap-6">
                    @guest
                    <a href="{{ route('login') }}" class="text-gray-400 hover:text-primary text-sm transition-colors flex items-center gap-2">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        Admin Login
                    </a>
                    @endguest
                    @auth
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-400 hover:text-primary text-sm transition-colors flex items-center gap-2">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        Admin Dashboard
                    </a>
                    @endauth
                    <div class="flex items-center gap-2 text-white/60 text-sm">
                        <span>Designed & Built by</span>
                        <a href="https://codeasiedu.com" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:text-white transition-colors duration-300">
                            <img src="{{ asset('logos/codeasiedu.svg') }}" alt="CodeAsiedu Logo" class="h-6 w-auto">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
