@extends('layouts.sidebar')
@section('content')
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between border-b border-gray-200">
            <div class="text-gray-800 text-xl font-semibold">Dashboard</div>
            <div class="flex items-center space-x-4">
                {{-- <div class="text-gray-800">{{ Auth::user()->name }}</div> --}}
                {{-- <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="w-8 h-8 rounded-full"> --}}
            </div>
        </header>

        <!-- Main area -->
        <main class="flex flex-col">
            <!-- Summary Cards -->
            <div class="m-4 flex flex-col justify-center items-center lg:flex-row">
                <div class="bg-white w-5/6 shadow-lg rounded-lg p-6 flex items-center justify-between mb-4 lg:mr-4">
                    <div class="text-gray-700 text-lg font-semibold">Total Events</div>
                    <div class="text-3xl font-bold text-blue-600">124</div>
                </div>
                <div class="bg-white w-5/6 shadow-lg rounded-lg p-6 flex items-center justify-between mb-4 lg:mr-4">
                    <div class="text-gray-700 text-lg font-semibold">Upcoming Events</div>
                    <div class="text-3xl font-bold text-green-600">45</div>
                </div>
                <div class="bg-white w-5/6 shadow-lg rounded-lg p-6 flex items-center justify-between mb-4 lg:mr-4">
                    <div class="text-gray-700 text-lg font-semibold">Registered Users</div>
                    <div class="text-3xl font-bold text-purple-600">890</div>
                </div>
            </div>

            <!-- Recent Records Table -->
            <div class="bg-white shadow-lg rounded-lg p-6 overflow-x-auto m-4">
                <h2 class="text-gray-700 text-lg font-semibold mb-4">Recent Records</h2>
                <table class="w-full border-collapse hidden md:table">
                    <thead class="bg-gray-200 text-gray-600">
                        <tr>
                            <th class="border px-4 py-2 text-left">Event</th>
                            <th class="border px-4 py-2 text-left">Date</th>
                            <th class="border px-4 py-2 text-left">Detail 1</th>
                            <th class="border px-4 py-2 text-left">Detail 2</th>
                            <th class="border px-4 py-2 text-left">Location</th>
                            <th class="border px-4 py-2 text-left">Detail 3</th>
                            <th class="border px-4 py-2 text-left">Detail 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Event 1</td>
                            <td class="border px-4 py-2">2024-08-10</td>
                            <td class="border px-4 py-2">Detail 1</td>
                            <td class="border px-4 py-2">Detail 2</td>
                            <td class="border px-4 py-2">Location A</td>
                            <td class="border px-4 py-2">Detail 3</td>
                            <td class="border px-4 py-2">Detail 4</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>

                <!-- Card View for Small Screens -->
                <div class="md:hidden">
                    <div class="bg-gray-100 p-4 rounded-lg shadow mb-4">
                        <div class="flex justify-between">
                            <div class="font-bold text-gray-700">Event</div>
                            <div class="text-gray-600">Event 1</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Date</div>
                            <div class="text-gray-600">2024-08-10</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 1</div>
                            <div class="text-gray-600">Detail 1</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 2</div>
                            <div class="text-gray-600">Detail 2</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Location</div>
                            <div class="text-gray-600">Location A</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 3</div>
                            <div class="text-gray-600">Detail 3</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 4</div>
                            <div class="text-gray-600">Detail 4</div>
                        </div>
                    </div>
                    <!-- Repeat the above card for each row in the table -->
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 overflow-x-auto m-4">
                <h2 class="text-gray-700 text-lg font-semibold mb-4">Recent Records</h2>
                <table class="w-full border-collapse hidden md:table">
                    <thead class="bg-gray-200 text-gray-600">
                        <tr>
                            <th class="border px-4 py-2 text-left">Event</th>
                            <th class="border px-4 py-2 text-left">Date</th>
                            <th class="border px-4 py-2 text-left">Detail 1</th>
                            <th class="border px-4 py-2 text-left">Detail 2</th>
                            <th class="border px-4 py-2 text-left">Location</th>
                            <th class="border px-4 py-2 text-left">Detail 3</th>
                            <th class="border px-4 py-2 text-left">Detail 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Event 1</td>
                            <td class="border px-4 py-2">2024-08-10</td>
                            <td class="border px-4 py-2">Detail 1</td>
                            <td class="border px-4 py-2">Detail 2</td>
                            <td class="border px-4 py-2">Location A</td>
                            <td class="border px-4 py-2">Detail 3</td>
                            <td class="border px-4 py-2">Detail 4</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>

                <!-- Card View for Small Screens -->
                <div class="md:hidden">
                    <div class="bg-gray-100 p-4 rounded-lg shadow mb-4">
                        <div class="flex justify-between">
                            <div class="font-bold text-gray-700">Event</div>
                            <div class="text-gray-600">Event 1</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Date</div>
                            <div class="text-gray-600">2024-08-10</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 1</div>
                            <div class="text-gray-600">Detail 1</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 2</div>
                            <div class="text-gray-600">Detail 2</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Location</div>
                            <div class="text-gray-600">Location A</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 3</div>
                            <div class="text-gray-600">Detail 3</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 4</div>
                            <div class="text-gray-600">Detail 4</div>
                        </div>
                    </div>
                    <!-- Repeat the above card for each row in the table -->
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 overflow-x-auto m-4">
                <h2 class="text-gray-700 text-lg font-semibold mb-4">Recent Records</h2>
                <table class="w-full border-collapse hidden md:table">
                    <thead class="bg-gray-200 text-gray-600">
                        <tr>
                            <th class="border px-4 py-2 text-left">Event</th>
                            <th class="border px-4 py-2 text-left">Date</th>
                            <th class="border px-4 py-2 text-left">Detail 1</th>
                            <th class="border px-4 py-2 text-left">Detail 2</th>
                            <th class="border px-4 py-2 text-left">Location</th>
                            <th class="border px-4 py-2 text-left">Detail 3</th>
                            <th class="border px-4 py-2 text-left">Detail 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Event 1</td>
                            <td class="border px-4 py-2">2024-08-10</td>
                            <td class="border px-4 py-2">Detail 1</td>
                            <td class="border px-4 py-2">Detail 2</td>
                            <td class="border px-4 py-2">Location A</td>
                            <td class="border px-4 py-2">Detail 3</td>
                            <td class="border px-4 py-2">Detail 4</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>

                <!-- Card View for Small Screens -->
                <div class="md:hidden">
                    <div class="bg-gray-100 p-4 rounded-lg shadow mb-4">
                        <div class="flex justify-between">
                            <div class="font-bold text-gray-700">Event</div>
                            <div class="text-gray-600">Event 1</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Date</div>
                            <div class="text-gray-600">2024-08-10</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 1</div>
                            <div class="text-gray-600">Detail 1</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 2</div>
                            <div class="text-gray-600">Detail 2</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Location</div>
                            <div class="text-gray-600">Location A</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 3</div>
                            <div class="text-gray-600">Detail 3</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Detail 4</div>
                            <div class="text-gray-600">Detail 4</div>
                        </div>
                    </div>
                    <!-- Repeat the above card for each row in the table -->
                </div>
            </div>
        </main>
    </div>
@endsection
