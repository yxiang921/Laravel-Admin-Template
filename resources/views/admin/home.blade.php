<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>
<body class="bg-gray-100">
    <div id="app" class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out">
            <div class="flex items-center space-x-2 px-4">
                <span class="text-2xl font-extrabold">Admin Panel</span>
            </div>
            <nav>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Dashboard</a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Events</a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Settings</a>
            </nav>
        </aside>
        
        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="flex justify-between items-center bg-white py-4 px-6">
                <div class="flex items-center">
                    <button id="menu-btn" class="text-gray-500 focus:outline-none md:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                    <span class="text-2xl font-semibold text-gray-700">Dashboard</span>
                </div>
                <div>
                    <button class="flex items-center text-gray-500 focus:outline-none">
                        <span class="mr-2">Admin</span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A10.97 10.97 0 0112 15c2.5 0 4.847.815 6.879 2.196M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </button>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    <div class="flex flex-col mt-8">
                        <div class="py-2 -my-2 overflow-x-auto">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event Name</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <!-- Dummy Data -->
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">Open Day</td>
                                            <td class="px-6 py-4 whitespace-nowrap">2024-09-12</td>
                                            <td class="px-6 py-4 whitespace-nowrap">Main Hall</td>
                                            <td class="px-6 py-4 whitespace-nowrap">Upcoming</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">Graduation Ceremony</td>
                                            <td class="px-6 py-4 whitespace-nowrap">2024-11-24</td>
                                            <td class="px-6 py-4 whitespace-nowrap">Auditorium</td>
                                            <td class="px-6 py-4 whitespace-nowrap">Scheduled</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">Sports Day</td>
                                            <td class="px-6 py-4 whitespace-nowrap">2024-08-15</td>
                                            <td class="px-6 py-4 whitespace-nowrap">Sports Complex</td>
                                            <td class="px-6 py-4 whitespace-nowrap">Completed</td>
                                        </tr>
                                        <!-- More Dummy Data -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.getElementById('menu-btn').addEventListener('click', () => {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
