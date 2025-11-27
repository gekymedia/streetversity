@props(['title', 'description', 'image' => null, 'link' => null, 'date' => null, 'author' => null])

<div class="bg-gray-900 border border-gold rounded-2xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden group">
    @if($image)
        <div class="h-48 bg-gray-800 overflow-hidden">
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        </div>
    @endif
    <div class="p-6">
        @if($date || $author)
            <div class="flex items-center text-sm text-gray-400 mb-3">
                @if($date)
                    <span>{{ $date }}</span>
                @endif
                @if($date && $author)
                    <span class="mx-2">•</span>
                @endif
                @if($author)
                    <span>By {{ $author }}</span>
                @endif
            </div>
        @endif
        
        <h3 class="text-xl font-bold text-gold mb-3 line-clamp-2 group-hover:text-yellow-300 transition-colors duration-200">
            @if($link)
                <a href="{{ $link }}" class="hover:text-yellow-300 transition-colors duration-200">
                    {{ $title }}
                </a>
            @else
                {{ $title }}
            @endif
        </h3>
        
        @if($description)
            <p class="text-gray-300 mb-4 line-clamp-3 leading-relaxed">
                {{ $description }}
            </p>
        @endif
        
        @if($link)
            <a href="{{ $link }}" class="inline-flex items-center text-gold font-medium hover:text-yellow-300 transition-colors duration-200 group/link">
                Read more
                <svg class="ml-1 w-4 h-4 transform group-hover/link:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        @endif
    </div>
</div>