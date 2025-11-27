@extends('layouts.app')

@section('title', 'Dashboard - Streetversity')
@section('description', 'Your Streetversity user dashboard')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-black">Welcome to Your Dashboard!</h1>
            <p class="text-gray-600 mt-2">{{ __("You're logged in!") }}</p>
        </div>

        <!-- Admin Access Card -->
        @if(auth()->user()->hasRole('admin'))
            <div class="bg-yellow-50 border border-gold rounded-2xl p-6 mb-6">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3 border border-yellow-200">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-black mb-1">Admin Access</h2>
                        <p class="text-gray-700">You have administrator privileges.</p>
                    </div>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center px-6 py-3 gold-gradient text-black font-bold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300 border border-gold">
                    Go to Admin Panel
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
        @endif

        <!-- Quick Actions Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Quick Actions -->
            <div class="bg-white border border-gold rounded-2xl p-6">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center mr-3 border border-yellow-200">
                        <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg text-black">Quick Actions</h3>
                </div>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('profile.edit') }}" class="flex items-center text-gray-600 hover:text-gold transition-colors duration-200 group">
                            <svg class="w-4 h-4 mr-3 text-gray-400 group-hover:text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Update Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog.index') }}" class="flex items-center text-gray-600 hover:text-gold transition-colors duration-200 group">
                            <svg class="w-4 h-4 mr-3 text-gray-400 group-hover:text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9m0 0v12m0 0h2m-2 0h4"></path>
                            </svg>
                            View Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="flex items-center text-gray-600 hover:text-gold transition-colors duration-200 group">
                            <svg class="w-4 h-4 mr-3 text-gray-400 group-hover:text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Account Info -->
            <div class="bg-white border border-gold rounded-2xl p-6">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center mr-3 border border-yellow-200">
                        <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg text-black">Account Info</h3>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between items-center py-2 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Name:</span>
                        <span class="text-black">{{ auth()->user()->name }}</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Email:</span>
                        <span class="text-black">{{ auth()->user()->email }}</span>
                    </div>
                    <div class="flex justify-between items-center py-2">
                        <span class="text-gray-600 font-medium">Role:</span>
                        <div class="flex space-x-1">
                            @foreach(auth()->user()->getRoleNames() as $role)
                                <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full border border-yellow-200">
                                    {{ ucfirst($role) }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity (Optional) -->
        <div class="mt-8 bg-white border border-gold rounded-2xl p-6">
            <div class="flex items-center mb-4">
                <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center mr-3 border border-yellow-200">
                    <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg text-black">Recent Activity</h3>
            </div>
            <div class="text-center py-8">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <p class="text-gray-500">No recent activity to display</p>
                <p class="text-sm text-gray-400 mt-1">Your activity will appear here as you use Streetversity</p>
            </div>
        </div>
    </div>
</div>
@endsection