<!-- resources/svgs/logo.blade.php -->
@props(['width' => '316', 'height' => '316'])

<img src="{{ asset('logo.png') }}" alt="Streetversity Logo" {{ $attributes->merge(['class' => 'w-' . $width . ' h-' . $height]) }}>