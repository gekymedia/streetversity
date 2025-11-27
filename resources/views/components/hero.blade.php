@props(['title', 'subtitle', 'ctaText' => 'Get Started', 'ctaLink' => '#'])

<section class="bg-white text-black py-20 lg:py-28 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center fade-in-up">
            <!-- Streetversity Logo -->
            <div class="flex justify-center mb-8">
                <div class="flex items-center space-x-3">
                    <div class="w-16 h-16 gold-gradient rounded-2xl flex items-center justify-center shadow-lg">
                        <span class="text-black font-bold text-2xl">S</span>
                    </div>
                    <span class="text-3xl font-bold text-black">Streetversity</span>
                </div>
            </div>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                <span class="text-black">{{ str_replace('Your', 'Your', $title) }}</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-600 max-w-3xl mx-auto leading-relaxed">
                {{ $subtitle }}
            </p>
            
            @if($ctaText && $ctaLink)
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{ $ctaLink }}" class="inline-flex items-center px-8 py-4 gold-gradient text-black font-bold rounded-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 shadow-lg border-2 border-gold">
                        {{ $ctaText }}
                        <svg class="ml-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    
                    <a href="{{ route('about') }}" class="inline-flex items-center px-8 py-4 border-2 border-black text-black font-bold rounded-lg hover:bg-black hover:text-white transform hover:scale-105 transition-all duration-300">
                        Learn More About Us
                    </a>
                </div>
            @endif

            <!-- Quick Stats -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-2xl mx-auto">
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-gold mb-1">100%</div>
                    <div class="text-sm text-gray-600">Free Access</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-gold mb-1">24/7</div>
                    <div class="text-sm text-gray-600">Available</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-gold mb-1">1000+</div>
                    <div class="text-sm text-gray-600">Members</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-gold mb-1">Ghana</div>
                    <div class="text-sm text-gray-600">Based</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 right-10 w-64 h-64 bg-gold opacity-5 rounded-full"></div>
        <div class="absolute bottom-10 left-10 w-64 h-64 bg-gold opacity-5 rounded-full"></div>
    </div>
</section>

@push('styles')
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
@endpush