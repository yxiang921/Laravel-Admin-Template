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
        <main class="flex flex-col m-4">

            <!-- Events & Competitions Table -->
            <div class="bg-white min-h-screen rounded-lg p-6 overflow-x-auto">
                <!-- Filter -->
                <div class="flex flex-col md:flex-row md:space-x-4 space-y-2 md:space-y-0 mb-4">
                    <!-- Keyword Input -->
                    <input type="text" id="keyword-input" placeholder="Search by keyword..."
                        class="w-full md:w-1/3 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

                    <!-- Date Range Input -->
                    <input type="text" id="date-input" placeholder="Select date range..."
                        class="w-full md:w-1/4 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

                </div>
                <div class="flex flex-col md:flex-row md:space-x-4 space-y-2 md:space-y-0 mb-4">
                    <!-- Organizer Select -->
                    <select id="category-select"
                        class="w-full md:w-1/3 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="all">All Organizer</option>
                        <option value="technology">Technology</option>
                        <option value="science">Science</option>
                        <option value="math">Math</option>
                        <option value="history">History</option>
                    </select>

                    <!-- Location Select -->
                    <select id="category-select"
                        class="w-full md:w-1/3 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="all">All Location</option>
                        <option value="technology">Technology</option>
                        <option value="science">Science</option>
                        <option value="math">Math</option>
                        <option value="history">History</option>
                    </select>

                    <!-- Category Select -->
                    <select id="category-select"
                        class="w-full md:w-1/3 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="all">All Categories</option>
                        <option value="technology">Technology</option>
                        <option value="science">Science</option>
                        <option value="math">Math</option>
                        <option value="history">History</option>
                    </select>
                </div>

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

                <!-- Pagination -->
                <div class="rounded-lg p-4 mt-6 flex justify-between items-center">
                    <div class="text-gray-600">Showing 1 to 3 of 50 entries</div>
                    <div class="flex space-x-2">
                        <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-400">Previous</button>
                        <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">1</button>
                        <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-400">2</button>
                        <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-400">3</button>
                        <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-400">Next</button>
                    </div>
                </div>
            </div>


        </main>
    </div>
@endsection
