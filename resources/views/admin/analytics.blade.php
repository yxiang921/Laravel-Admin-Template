@extends('layouts.sidebar')
@section('content')
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between border-b border-gray-200">
            <div class="text-gray-800 text-xl font-semibold">Events</div>
        </header>

        <!-- Main area -->
        <main class="flex flex-col m-4">
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
            <div class="grid grid-cols-2 gap-4">
                <!-- Data analytic 1 -->
                <div class="bg-white shadow-md p-4">
                    <h2 class="text-lg font-semibold mb-4">Data Analytic 1</h2>
                    <!-- Add your data analytic code here -->
                </div>

                <!-- Data analytic 2 -->
                <div class="bg-white shadow-md p-4">
                    <h2 class="text-lg font-semibold mb-4">Data Analytic 2</h2>
                    <!-- Add your data analytic code here -->
                </div>

                <!-- Data analytic 3 -->
                <div class="bg-white shadow-md p-4">
                    <h2 class="text-lg font-semibold mb-4">Data Analytic 3</h2>
                    <!-- Add your data analytic code here -->
                </div>

                <!-- Data analytic 4 -->
                <div class="bg-white shadow-md p-4">
                    <h2 class="text-lg font-semibold mb-4">Data Analytic 4</h2>
                    <!-- Add your data analytic code here -->
                </div>
            </div>

            <!-- Chart -->
            <div class="bg-white shadow-md p-4 mt-4">
                <h2 class="text-lg font-semibold mb-4">Chart</h2>
                <!-- Add your chart code here -->
            </div>
        </main>
    </div>
@endsection
