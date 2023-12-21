<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LearnX About">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby & Adelaide Meisel">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-gradient-to-r from-purple-500 to-green-500 text-white">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo on the left -->
            <div class="w-1/4 max-w-xs flex-shrink-0">
                <a href="{{ route("page.home") }}"><img src="/Images/LearnXLogo-2.png" alt="LearnX Logo" class="w-full"></a>
            </div>

            <!-- Links on the right -->
            <nav class="flex space-x-4">
                <a href="{{ route('page.science') }}" class="text-lg hover:text-purple-300">Science</a>
                <a href="{{ route('page.math') }}" class="text-lg hover:text-purple-300">Math</a>
                <a href="{{ route('page.english') }}" class="text-lg hover:text-purple-300">English</a>
                <a href="{{ route('page.history') }}" class="text-lg hover:text-purple-300">History</a>
                <a href="{{ route('page.gradebook') }}" class="text-lg hover:text-purple-300">Grades</a>
                <a href="{{ route('page.profile') }}" class="text-lg hover:text-purple-300">Profile</a>
                <!--Links to learning pages-->
                <a href="{{ route('logout') }}" class="text-lg hover:text-purple-300">Log Out</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }} <!-- This is where your page content will be injected -->
    </main>

    <footer class="bg-gradient-to-r from-green-500 to-purple-500 text-white text-center py-6">
        <div class="max-w-6xl mx-auto px-4">
            <p class="mt-6 text-sm">© 2023 LearnX. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
