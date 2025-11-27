@extends('layouts.admin')

@section('title', 'Contact Messages - Streetversity Admin')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-black">Contact Messages</h1>
            <p class="text-gray-600 mt-2">Manage and respond to contact form submissions</p>
        </div>

        <!-- Messages Table -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            <!-- Table Header -->
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-gray-900">All Messages</h2>
                    <div class="text-sm text-gray-500">
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs font-medium">
                            Coming Soon
                        </span>
                    </div>
                </div>
            </div>

            <!-- Empty State -->
            <div class="text-center py-12">
                <div class="w-24 h-24 bg-yellow-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No Messages Yet</h3>
                <p class="text-gray-600 max-w-md mx-auto mb-6">
                    Contact form submissions will appear here once users start sending messages through your contact form.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="{{ route('contact') }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        Test Contact Form
                    </a>
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center px-4 py-2 gold-gradient text-black font-bold rounded-lg hover:shadow-lg transition-all duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Back to Dashboard
                    </a>
                </div>
            </div>

            <!-- Future Features Info -->
            <div class="border-t border-gray-200 bg-blue-50 px-6 py-4">
                <div class="flex items-start space-x-3">
                    <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h4 class="text-sm font-semibold text-blue-900">Messages Feature</h4>
                        <p class="text-sm text-blue-800 mt-1">
                            This section will display all contact form submissions. You'll be able to view, reply to, and manage messages from your website visitors.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="bg-white rounded-2xl p-6 border border-gray-200 text-center">
                <div class="text-2xl font-bold text-gold mb-1">0</div>
                <div class="text-sm text-gray-600">Total Messages</div>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-gray-200 text-center">
                <div class="text-2xl font-bold text-gold mb-1">0</div>
                <div class="text-sm text-gray-600">Unread Messages</div>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-gray-200 text-center">
                <div class="text-2xl font-bold text-gold mb-1">0</div>
                <div class="text-sm text-gray-600">Replied Messages</div>
            </div>
        </div>
    </div>
</div>
@endsection