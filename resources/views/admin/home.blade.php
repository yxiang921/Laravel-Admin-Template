@extends('layouts.sidebar')
@section('content')
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between border-b border-gray-200">
            <div class="text-gray-800 text-xl font-semibold">Dashboard</div>
            <div class="flex items-center space-x-4">
                {{-- <div class="text-gray-800">{{ Auth::user()->name }}</div> --}}
                <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="w-8 h-8 rounded-full">
            </div>
        </header>

        <!-- Main area -->
        <main class="flex-1 p-6">
            <!-- Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-between">
                    <div class="text-gray-700 text-lg font-semibold">Total Events</div>
                    <div class="text-3xl font-bold text-blue-600">124</div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-between">
                    <div class="text-gray-700 text-lg font-semibold">Upcoming Events</div>
                    <div class="text-3xl font-bold text-green-600">45</div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-between">
                    <div class="text-gray-700 text-lg font-semibold">Registered Users</div>
                    <div class="text-3xl font-bold text-purple-600">890</div>
                </div>
            </div>

            <!-- Recent Records Table -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-gray-700 text-lg font-semibold mb-4">Recent Records</h2>
                <table class="w-full border-collapse">
                    <thead class="bg-gray-200 text-gray-600">
                        <tr>
                            <th class="border px-4 py-2 text-left">Event</th>
                            <th class="border px-4 py-2 text-left">Date</th>
                            <th class="border px-4 py-2 text-left">Date</th>
                            <th class="border px-4 py-2 text-left">Date</th>
                            <th class="border px-4 py-2 text-left">Location</th>
                            <th class="border px-4 py-2 text-left">Location</th>
                            <th class="border px-4 py-2 text-left">Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Event 1</td>
                            <td class="border px-4 py-2">2024-08-10</td>
                            <td class="border px-4 py-2">2024-08-10</td>
                            <td class="border px-4 py-2">2024-08-10</td>
                            <td class="border px-4 py-2">Location A</td>
                            <td class="border px-4 py-2">Location A</td>
                            <td class="border px-4 py-2">Location A</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection