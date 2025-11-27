@extends('layouts.app')

@section('title', 'Profile - Streetversity')
@section('description', 'Manage your Streetversity profile information, password, and account settings.')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gold">Profile Settings</h1>
            <p class="text-gray-300 mt-2">Manage your account settings and preferences</p>
        </div>

        <div class="space-y-6">
            <!-- Update Profile Information -->
            <div class="bg-gray-900 border border-gold rounded-2xl p-6">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gold">Profile Information</h2>
                </div>
                <p class="text-gray-300 mb-6">Update your account's profile information and email address.</p>
                <div class="max-w-2xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="bg-gray-900 border border-gold rounded-2xl p-6">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gold">Update Password</h2>
                </div>
                <p class="text-gray-300 mb-6">Ensure your account is using a long, random password to stay secure.</p>
                <div class="max-w-2xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account -->
            <div class="bg-gray-900 border border-red-500 rounded-2xl p-6">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-red-400">Delete Account</h2>
                </div>
                <p class="text-gray-300 mb-6">Once your account is deleted, all of its resources and data will be permanently deleted.</p>
                <div class="max-w-2xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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