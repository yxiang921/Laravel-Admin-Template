@extends('layouts.sidebar')
@section('content')
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between border-b border-gray-200">
            <div class="text-gray-800 text-xl font-semibold">Admin Management</div>
            <div class="flex items-center space-x-4">
                {{-- <div class="text-gray-800">{{ Auth::user()->name }}</div> --}}
                {{-- <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="w-8 h-8 rounded-full"> --}}
            </div>
        </header>

        <!-- Main area -->
        <main class=" m-4">
            <!-- User Table -->
            <div class="bg-white min-h-screen rounded-lg p-6 overflow-x-auto">
                <!-- Filter -->
                <div class="flex flex-col md:flex-row md:space-x-4 space-y-2 md:space-y-0 mb-4">
                    <!-- Keyword Input -->
                    <input type="text" id="keyword-input" placeholder="Search by keyword..."
                        class="w-full md:w-1/3 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex flex-col md:flex-row md:space-x-4 space-y-2 md:space-y-0 mb-4">

                    <!-- Category Select -->
                    {{-- <select id="category-select"
                        class="w-full md:w-1/3 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="all">All Categories</option>
                        <option value="technology">Technology</option>
                        <option value="science">Science</option>
                        <option value="math">Math</option>
                        <option value="history">History</option>
                    </select> --}}
                </div>

                <table class="w-full border-collapse hidden md:table">
                    <thead class="bg-gray-200 text-gray-600">
                        <tr>
                            <th class="border px-2 py-2 text-left">Admin ID</th>
                            <th class="border px-2 py-2 text-left">Username</th>
                            <th class="border px-2 py-2 text-left">Full Name</th>
                            <th class="border px-2 py-2 text-left">Email Address</th>
                            <th class="border px-2 py-2 text-left">Phone Number</th>
                            <th class="border px-2 py-2 text-left">Gender</th>
                            <th class="border px-2 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-2 py-2">1</td>
                            <td class="border px-2 py-2">john_doe</td>
                            <td class="border px-2 py-2">John Doe</td>
                            <td class="border px-2 py-2">johndoe@gmail.com</td>
                            <td class="border px-2 py-2">+1 123 256 7890</td>
                            <td class="border px-2 py-2">Male</td>
                            <td class="border px-2 py-2">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                                    Edit
                                </button>
                                <button class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Card View for Small Screens -->
                <div class="md:hidden">
                    <div class="bg-gray-100 p-4 rounded-lg shadow mb-4">
                        <div class="flex justify-between">
                            <div class="font-bold text-gray-700">Admin ID</div>
                            <div class="text-gray-600">1</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Username</div>
                            <div class="text-gray-600">johndoe</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Full Name</div>
                            <div class="text-gray-600">John Doe</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Email Address</div>
                            <div class="text-gray-600">johndoe@gmail.com</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Phone Number</div>
                            <div class="text-gray-600">
                                +1 123 256 7890
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="font-bold text-gray-700">Gender</div>
                            <div class="text-gray-600">Male</div>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                                Edit
                            </button>
                            <button class="ml-4 bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                                Delete
                            </button>
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
