@extends('layouts.sidebar')
@section('content')
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between border-b border-gray-200">
            <div class="text-gray-800 text-xl font-semibold">Notifications</div>
            <div class="flex items-center space-x-4">
                {{-- <div class="text-gray-800">{{ Auth::user()->name }}</div> --}}
                {{-- <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="w-8 h-8 rounded-full"> --}}
            </div>
        </header>

        <!-- Main area -->
        <main class=" m-4">
                <!-- Notifications List -->
                <div class="space-y-4">
                    <!-- Notification 1 -->
                    <div class="flex items-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-50">
                        <div class="flex-shrink-0 bg-blue-500 text-white rounded-full h-10 w-10 flex items-center justify-center mr-4">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M21 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-800">System Update Available</h2>
                            <p class="text-gray-600 text-sm">A new update for the system is available. Please update to version 2.0.</p>
                            <span class="text-gray-400 text-xs">5 minutes ago</span>
                        </div>
                    </div>
        
                    <!-- Notification 2 -->
                    <div class="flex items-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-50">
                        <div class="flex-shrink-0 bg-green-500 text-white rounded-full h-10 w-10 flex items-center justify-center mr-4">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-800">Payment Received</h2>
                            <p class="text-gray-600 text-sm">Your payment of $150 has been successfully processed.</p>
                            <span class="text-gray-400 text-xs">10 minutes ago</span>
                        </div>
                    </div>
        
                    <!-- Notification 3 -->
                    <div class="flex items-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-50">
                        <div class="flex-shrink-0 bg-yellow-500 text-white rounded-full h-10 w-10 flex items-center justify-center mr-4">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m0-4h.01M12 12h.01M21 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-800">Password Expiring Soon</h2>
                            <p class="text-gray-600 text-sm">Your password will expire in 5 days. Please update it to avoid any disruption.</p>
                            <span class="text-gray-400 text-xs">30 minutes ago</span>
                        </div>
                    </div>
        
                    <!-- Notification 4 -->
                    <div class="flex items-center p-4 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-50">
                        <div class="flex-shrink-0 bg-red-500 text-white rounded-full h-10 w-10 flex items-center justify-center mr-4">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M21 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-800">Server Downtime</h2>
                            <p class="text-gray-600 text-sm">We are experiencing server issues. Our team is working on resolving the problem.</p>
                            <span class="text-gray-400 text-xs">1 hour ago</span>
                        </div>
                    </div>
                </div>
        </main>
    </div>
@endsection
