@extends('layouts.sidebar')
@section('content')
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between border-b border-gray-200">
            <div class="text-gray-800 text-xl font-semibold">Events</div>
            <div class="flex items-center space-x-4">
                {{-- <div class="text-gray-800">{{ Auth::user()->name }}</div> --}}
                {{-- <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="w-8 h-8 rounded-full"> --}}
            </div>
        </header>

        <!-- Main area -->
        <main class="flex flex-col">
            <!-- Search and Filter -->
            <div class="bg-white shadow-lg rounded-lg p-4 mb-6 flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0">
                <div class="flex space-x-2">
                    <input type="text" placeholder="Search..." class="border border-gray-300 rounded px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                    <select class="border border-gray-300 rounded px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Filter by Faculty</option>
                        <option value="science">Science</option>
                        <option value="arts">Arts</option>
                        <option value="engineering">Engineering</option>
                    </select>
                </div>
                <div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Search</button>
                </div>
            </div>

            <!-- Events & Competitions Table -->
            <div class="bg-white shadow-lg rounded-lg p-6 overflow-x-auto">
                <table class="w-full border-collapse hidden md:table">
                    <thead class="bg-gray-200 text-gray-600">
                        <tr>
                            <th class="border px-4 py-2 text-left">Event/Competition</th>
                            <th class="border px-4 py-2 text-left">Date</th>
                            <th class="border px-4 py-2 text-left">Faculty</th>
                            <th class="border px-4 py-2 text-left">Location</th>
                            <th class="border px-4 py-2 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Annual Science Fair</td>
                            <td class="border px-4 py-2">2024-09-15</td>
                            <td class="border px-4 py-2">Science Faculty</td>
                            <td class="border px-4 py-2">Main Hall</td>
                            <td class="border px-4 py-2 text-green-600 font-semibold">Approved</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Engineering Expo</td>
                            <td class="border px-4 py-2">2024-10-20</td>
                            <td class="border px-4 py-2">Engineering Faculty</td>
                            <td class="border px-4 py-2">Expo Center</td>
                            <td class="border px-4 py-2 text-green-600 font-semibold">Approved</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Art & Design Competition</td>
                            <td class="border px-4 py-2">2024-11-05</td>
                            <td class="border px-4 py-2">Arts Faculty</td>
                            <td class="border px-4 py-2">Art Gallery</td>
                            <td class="border px-4 py-2 text-green-600 font-semibold">Approved</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Card View for Small Screens -->
                <div class="md:hidden">
                    <div class="bg-gray-100 p-4 rounded-lg shadow mb-4">
                        <div class="flex justify-between">
                            <div class="font-bold text-gray-700">Event/Competition</div>
                            <div class="text-gray-600">Annual Science Fair</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Date</div>
                            <div class="text-gray-600">2024-09-15</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Faculty</div>
                            <div class="text-gray-600">Science Faculty</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Location</div>
                            <div class="text-gray-600">Main Hall</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Status</div>
                            <div class="text-green-600 font-semibold">Approved</div>
                        </div>
                    </div>
                    <!-- Repeat the above card for each row in the table -->
                </div>
            </div>

            <!-- Pagination -->
            <div class="bg-white shadow-lg rounded-lg p-4 mt-6 flex justify-between items-center">
                <div class="text-gray-600">Showing 1 to 3 of 50 entries</div>
                <div class="flex space-x-2">
                    <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-400">Previous</button>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">1</button>
                    <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-400">2</button>
                    <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-400">3</button>
                    <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-400">Next</button>
                </div>
            </div>
        </main>
    </div>
@endsection