@php
$navItems = [
    ['href' => route('home'), 'label' => 'Home', 'icon' => 'home'],
    ['href' => route('about'), 'label' => 'About', 'icon' => 'user'],
    ['href' => route('blog.index'), 'label' => 'Blog', 'icon' => 'book'],
    ['href' => (Route::has('programs') ? route('programs') : '#'), 'label' => 'Programs', 'icon' => 'graduation-cap'],
    ['href' => (Route::has('partners') ? route('partners') : '#'), 'label' => 'Partners', 'icon' => 'handshake'],
    ['href' => (Route::has('sponsorship') ? route('sponsorship') : '#'), 'label' => 'Sponsorship', 'icon' => 'heart'],
    ['href' => route('contact'), 'label' => 'Contact', 'icon' => 'mail'],
];
$applyRoute = Route::has('apply') ? route('apply') : '#';
@endphp

<header class="sticky top-0 z-50 w-full border-b bg-dark text-white" x-data="{ isMenuOpen: false }">
    <div class="container mx-auto px-6 sm:px-8 flex h-16 items-center justify-between">
        <div class="flex items-center gap-2">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="relative p-1.5 bg-white rounded-full shadow-md hover:shadow-lg transition-shadow duration-300">
                    <img src="{{ asset('logos/TK StreetVersity 23 1.svg') }}" alt="StreetVersity Logo" class="h-12 w-12 filter contrast-125 saturate-110">
                </div>
            </a>
        </div>

        <!-- Mobile menu button -->
        <button
            class="block md:hidden z-50 relative"
            @click="isMenuOpen = !isMenuOpen"
            aria-label="Toggle menu"
        >
            <svg x-show="!isMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg x-show="isMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Desktop navigation -->
        <nav class="hidden md:flex items-center gap-6">
            @foreach($navItems as $item)
                @php
                    $isActive = false;
                    if ($item['href'] === route('home') && request()->routeIs('home')) {
                        $isActive = true;
                    } elseif ($item['href'] === route('about') && request()->routeIs('about')) {
                        $isActive = true;
                    } elseif ($item['href'] === route('blog.index') && request()->routeIs('blog.*')) {
                        $isActive = true;
                    } elseif ($item['href'] === route('contact') && request()->routeIs('contact')) {
                        $isActive = true;
                    } elseif (Route::has('programs') && $item['href'] === route('programs') && request()->routeIs('programs')) {
                        $isActive = true;
                    } elseif (Route::has('partners') && $item['href'] === route('partners') && request()->routeIs('partners')) {
                        $isActive = true;
                    } elseif (Route::has('sponsorship') && $item['href'] === route('sponsorship') && request()->routeIs('sponsorship')) {
                        $isActive = true;
                    }
                @endphp
                <a
                    href="{{ $item['href'] }}"
                    class="flex items-center gap-2 text-sm font-medium transition-colors {{ $isActive ? 'text-primary' : 'hover:text-primary' }}"
                >
                    <span>{{ $item['label'] }}</span>
                </a>
            @endforeach
            <a href="{{ $applyRoute }}" class="bg-primary text-dark hover:bg-highlight px-4 py-2 rounded-md text-sm font-medium transition-colors">
                Apply Now
            </a>
        </nav>

        <!-- Mobile navigation overlay -->
        <div
            x-show="isMenuOpen"
            @click="isMenuOpen = false"
            class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 md:hidden"
            style="display: none;"
        ></div>

        <!-- Mobile navigation drawer -->
        <div
            x-show="isMenuOpen"
            class="fixed top-0 right-0 h-full w-80 bg-dark border-l border-gray-800 z-40 md:hidden transform transition-transform duration-300 ease-in-out"
            :class="isMenuOpen ? 'translate-x-0' : 'translate-x-full'"
            style="display: none;"
        >
            <div class="flex flex-col h-full">
                <!-- Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-800">
                    <div class="flex items-center gap-3">
                        <div class="relative p-1.5 bg-white rounded-full shadow-md">
                            <img src="{{ asset('logos/TK StreetVersity 23 1.svg') }}" alt="StreetVersity Logo" class="h-11 w-11 filter contrast-125 saturate-110">
                        </div>
                        <div class="flex items-center">
                            <span class="text-lg font-bold tracking-tight text-primary">STREET</span>
                            <span class="text-lg font-bold tracking-tight">VERSITY</span>
                        </div>
                    </div>
                </div>

                <!-- Navigation items -->
                <nav class="flex-1 px-6 py-8">
                    <div class="space-y-2">
                        @foreach($navItems as $item)
                            @php
                                $isActive = false;
                                if ($item['href'] === route('home') && request()->routeIs('home')) {
                                    $isActive = true;
                                } elseif ($item['href'] === route('about') && request()->routeIs('about')) {
                                    $isActive = true;
                                } elseif ($item['href'] === route('blog.index') && request()->routeIs('blog.*')) {
                                    $isActive = true;
                                } elseif ($item['href'] === route('contact') && request()->routeIs('contact')) {
                                    $isActive = true;
                                } elseif (Route::has('programs') && $item['href'] === route('programs') && request()->routeIs('programs')) {
                                    $isActive = true;
                                } elseif (Route::has('partners') && $item['href'] === route('partners') && request()->routeIs('partners')) {
                                    $isActive = true;
                                } elseif (Route::has('sponsorship') && $item['href'] === route('sponsorship') && request()->routeIs('sponsorship')) {
                                    $isActive = true;
                                }
                            @endphp
                            <a
                                href="{{ $item['href'] }}"
                                class="flex items-center gap-4 py-4 px-4 rounded-lg hover:bg-gray-800 transition-all duration-200 group {{ $isActive ? 'text-primary bg-gray-800/50' : 'text-white hover:text-primary' }}"
                                @click="isMenuOpen = false"
                            >
                                <span class="text-base font-medium">{{ $item['label'] }}</span>
                            </a>
                        @endforeach
                    </div>

                    <!-- Apply button -->
                    <div class="mt-8 pt-6 border-t border-gray-800">
                        <a
                            href="{{ $applyRoute }}"
                            class="w-full py-4 bg-primary text-dark hover:bg-highlight text-base font-semibold rounded-lg transition-all duration-200 hover:scale-105 flex items-center justify-center gap-2"
                            @click="isMenuOpen = false"
                        >
                            Apply Now
                        </a>
                    </div>
                </nav>

                <!-- Footer -->
                <div class="p-6 border-t border-gray-800">
                    <p class="text-sm text-gray-400 text-center">
                        Empowering communities through education
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
