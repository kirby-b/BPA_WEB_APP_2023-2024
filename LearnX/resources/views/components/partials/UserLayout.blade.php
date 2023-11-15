<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Donate page">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-pink-50">
    <header>
        <div class="border-2 border-solid border-black font-Preahvihear text-3xl text-left h-24 w-full bg-green-50">
            <div>
                <div class="absolute ml-140"><img src="/Images/LearnXLogo.png" alt="Image cannot load" width="75px" height="100px"></div>
                <div class="absolute ml-350"><!--Science--><a href={{ route("page.science") }}><img src="/Images/Science_Icon.jpg" alt="Image cannot load" width="90px" height="100px"></a><!--Image by rawpixel.com on Freepik>--></div>
                <div class="absolute ml-500"><!--Math--><a href={{ route("page.math") }}><img src="/Images/Math_Icon.jpg" alt="Image cannot load" width="80px" height="90px"></a><!--Image by brgfx on Freepik--></div>
                <div class="absolute ml-650"><!--English--><a href={{ route("page.english") }}><img src="/Images/English_Icon.jpg" alt="Image cannot load" width="80px" height="90px"></a><!--Image by upklyak on Freepik--></div>
                <div class="absolute ml-800"><!--History--><a href={{ route("page.history") }}><img src="/Images/History_Icon.jpg" alt="Image cannot load" width="80px" height="80px"></a><!--Image by Freepik--></div>
                <div style="absolute ml-950"><!--Grades--><a href={{ route("page.gradebook") }}><img src="/Images/Grade_Icon.png" alt="Image cannot load" width="100px" height="100px"></a><!--Image by Freepik--></div>
                <div class="absolute ml-85/100 mtop-3"><!--pfp--><a href={{ route("page.profile") }}><img src="/Images/Default_Pfp.png" alt="Image cannot load" width="90px" height="90px"></a></div><!--Image by qalebstudio on Freepik-->
                <div class="absolute ml-93/100"><!--Home Button--><a href={{ route("page.home") }}><img src="/Images/Home_Icon.png" alt="Image cannot load" width="90px" height="90px"></a></div><!--Image by qalebstudio on Freepik-->
                LearnX     
                <br> 
                A+ A+ A+
            </div> 
            {{-- <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-center space-x-6">
                    <a href="{{ route('page.faq') }}" class="hover:text-purple-300">FAQ</a>
                    <a href="{{ route('page.about') }}" class="hover:text-purple-300">ABOUT</a>
                    <a href="{{ route('page.why.us') }}" class="hover:text-purple-300">WHY US</a>
                    <a href="{{ route('page.donate') }}" class="hover:text-purple-300">DONATE</a>
                    <a href="{{ route('page.reviews') }}" class="hover:text-purple-300">REVIEWS</a>
                </div>
            </div> For reference to make the nav better--}}
        </div>
    </header>

    <main class="flex-grow">
        {{ $slot }} <!-- This is where your page content will be injected -->
    </main>

    <footer class="bg-gradient-to-r from-purple-500 to-pink-500 text-white text-center py-6">
        <div class="max-w-6xl mx-auto px-4">

            <p class="mt-6 text-sm">© 2023 LearnX. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>