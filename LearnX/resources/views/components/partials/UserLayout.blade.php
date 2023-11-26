<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LearnX About">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-gradient-to-r from-blue-500 to-purple-500 text-white">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo on the left -->
            <div class="w-1/4 max-w-xs flex-shrink-0">
                <a href="{{ route("page.home") }}"><img src="/Images/LearnXLogo-2.png" alt="LearnX Logo" class="w-full"></a>
            </div>

            <!-- Links on the right -->
            <nav class="flex space-x-4">
                <a href="{{ route('logout') }}" class="text-lg hover:text-purple-300">Log Out</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }} <!-- This is where your page content will be injected -->
    </main>

    <footer class="bg-gradient-to-r from-purple-500 to-pink-500 text-white text-center py-6">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-center space-x-6">
                <a href="{{ route('page.science') }}" class="hover:text-purple-300">SCIENCE</a>
                <a href="{{ route('page.math') }}" class="hover:text-purple-300">MATH</a>
                <a href="{{ route('page.english') }}" class="hover:text-purple-300">ENGLISH</a>
                <a href="{{ route('page.history') }}" class="hover:text-purple-300">HISTORY</a>
                <a href="{{ route('page.gradebook') }}" class="hover:text-purple-300">GRADES</a>
                <a href="{{ route('page.profile') }}" class="hover:text-purple-300">PROFILE</a>
            </div><!--Links to learning pages-->
    
            <p class="mt-6 text-sm">© 2023 LearnX. All rights reserved.</p>
        </div>
    </footer>
    {{-- <footer class="bg-gradient-to-r from-purple-500 to-pink-500 text-white text-center py-6">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-center space-x-6">
                <a href="{{ route('page.science') }}" class="hover:text-purple-300"><img src="/Images/Science_Icon.jpg" alt="Image cannot load" class="w-20 h-24"></a>
                <a href="{{ route('page.math') }}" class="hover:text-purple-300"><img src="/Images/Math_Icon.jpg" alt="Image cannot load" class="w-20 h-24"></a>
                <a href="{{ route('page.english') }}" class="hover:text-purple-300"><img src="/Images/English_Icon.jpg" alt="Image cannot load" class="w-20 h-24"></a>
                <a href="{{ route('page.history') }}" class="hover:text-purple-300"><img src="/Images/History_Icon.jpg" alt="Image cannot load" class="w-20 h-24"></a>
                <a href="{{ route('page.gradebook') }}" class="hover:text-purple-300"><img src="/Images/Grade_Icon.png" alt="Image cannot load" class="w-20 h-24"></a>
                <a href="{{ route('page.profile') }}" class="hover:text-purple-300"><img src="/Images/Default_Pfp.png" alt="Image cannot load" class="w-20 h-24"></a>
            </div><!--Links to learning pages-->
    
            <p class="mt-6 text-sm">© 2023 LearnX. All rights reserved.</p>
        </div>
    </footer> --}}
</body>

</html>