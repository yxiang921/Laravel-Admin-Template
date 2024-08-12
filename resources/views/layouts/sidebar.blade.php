<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Event Management System</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> <!-- flatpickr library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- chart.js library -->

    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <aside
            class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full lg:relative lg:translate-x-0 transition-transform duration-200">
            <div class="text-white text-2xl font-semibold px-4">
                <a href="{{ route('admin.home') }}">College Events</a>
            </div>
            <nav>
                <a href="{{ route('admin.home') }}"
                    class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors 
                {{ Route::current()->getName() == 'admin.home' ? 'text-slate-200' : 'text-slate-500' }}">
                    <i class="fa-solid fa-house pr-2"></i> Home</a>

                <a href="{{ route('admin.events') }}"
                    class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors
                {{ Route::current()->getName() == 'admin.events' ? 'text-slate-200' : 'text-slate-500' }}">
                    <i class="fa-regular fa-calendar-days pr-2"></i> Events</a>

                <a href="{{ route('admin.analytics') }}"
                    class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors
                {{ Route::current()->getName() == 'admin.analytics' ? 'text-slate-200' : 'text-slate-500' }}">
                    <i class="fa-solid fa-chart-simple pr-2"></i> Analytics</a>

                <a href="{{ route('admin.notifications') }}"
                    class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors
                {{ Route::current()->getName() == 'admin.notifications' ? 'text-slate-200' : 'text-slate-500' }}">
                    <i class="fa-solid fa-bell pr-2"></i> Notifications</a>

                <a href="{{ route('admin.users') }}"
                    class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors
                {{ Route::current()->getName() == 'admin.users' ? 'text-slate-200' : 'text-slate-500' }}">
                    <i class="fa-solid fa-user pr-2"></i> Users</a>

                <a href="{{ route('admin.admins') }}"
                    class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors
                {{ Route::current()->getName() == 'admin.admins' ? 'text-slate-200' : 'text-slate-500' }}">
                    <i class="fa-solid fa-user-gear pr-2"></i> Admin</a>

                <a href="{{ route('admin.settings') }}"
                    class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors
                {{ Route::current()->getName() == 'admin.settings' ? 'text-slate-200' : 'text-slate-500' }}">
                    <i class="fa-solid fa-gear pr-2"></i> Settings</a>
            </nav>
        </aside>

        <div class="lg:hidden absolute top-0 right-0 mt-4 mr-4">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <div class="overflow-scroll no-scrollbar w-full">
            @yield('content')
        </div>

    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.querySelector('aside').classList.toggle('-translate-x-full');
        });


        document.addEventListener('DOMContentLoaded', function () {
            flatpickr("#date-input", {
                mode: "range",
                dateFormat: "Y-m-d",
                onChange: function(selectedDates) {
                    filterTable();
                }
            });
        }); 
    </script>
</body>

</html>
