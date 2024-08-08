<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Event Management System</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <aside class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full lg:relative lg:translate-x-0 transition-transform duration-200">
            <div class="text-white text-2xl font-semibold px-4">College Events</div>
            <nav>
                <a href="#" class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors">Dashboard</a>
                <a href="#" class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors">Events</a>
                <a href="#" class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors">Users</a>
                <a href="#" class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors">Reports</a>
                <a href="#" class="block py-3 px-4 rounded hover:bg-gray-700 transition-colors">Settings</a>
            </nav>
        </aside>

        <div class="lg:hidden absolute top-0 right-0 mt-4 mr-4">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        @yield('content')
        
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.querySelector('aside').classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
