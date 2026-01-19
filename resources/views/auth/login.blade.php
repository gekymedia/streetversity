@extends('layouts.app')

@section('title', 'Login - Streetversity')
@section('description', 'Login to your Streetversity account')

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
<div class="flex flex-col w-full min-h-screen">
    <section class="flex-1 flex items-center justify-center bg-gray py-16 md:py-24 w-full">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-md mx-auto">
                <div class="text-center mb-8">
                    <a href="{{ route('home') }}" class="inline-block mb-4">
                        <img src="{{ asset('logos/TK StreetVersity 23 1.svg') }}" alt="StreetVersity Logo" class="h-16 w-16 mx-auto">
                    </a>
                    <h1 class="text-3xl font-bold mb-2">Welcome Back</h1>
                    <p class="text-muted-foreground">Sign in to your account to continue</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm">
                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium mb-2">Email Address</label>
                            <input 
                                id="email" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary @error('email') border-red-500 @enderror" 
                                type="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autofocus 
                                autocomplete="username"
                            >
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium mb-2">Password</label>
                            <input 
                                id="password" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary @error('password') border-red-500 @enderror"
                                type="password"
                                name="password"
                                required 
                                autocomplete="current-password"
                            >
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between mb-6">
                            <label for="remember_me" class="inline-flex items-center">
                                <input 
                                    id="remember_me" 
                                    type="checkbox" 
                                    class="rounded border-gray-300 text-primary focus:ring-primary" 
                                    name="remember"
                                >
                                <span class="ms-2 text-sm text-muted-foreground">Remember me</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-primary hover:underline" href="{{ route('password.request') }}">
                                    Forgot password?
                                </a>
                            @endif
                        </div>

                        <button 
                            type="submit" 
                            class="w-full bg-primary text-dark hover:bg-highlight px-6 py-3 rounded-md text-sm font-medium transition-colors"
                        >
                            Log in
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-muted-foreground">
                            Don't have an account? 
                            <a href="{{ route('register') }}" class="text-primary hover:underline font-medium">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
