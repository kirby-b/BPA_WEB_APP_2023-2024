<!DOCTYPE html>
{{-- <link rel="stylesheet" type="text/css" href="/css/app.css">  --}}
@vite('resources/css/app.css')
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Donate page">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-pink-50">

<div class="border-2 border-solid border-black font-Preahvihear text-3xl text-left h-24 w-full bg-green-50">
    <div>
            <div class="absolute ml-140"><img src="/Images/LearnXLogo.png" alt="Image cannot load" width="75px" height="100px"></div>
            <div class="absolute ml-350"><!--Science--><a href={{ route("page.science") }}><img src="/Images/Science_Icon.jpg" alt="Image cannot load" width="90px" height="100px"></a><!--Image by rawpixel.com on Freepik>--></div>
            <div class="absolute ml-500"><!--Math--><a href={{ route("page.math") }}><img src="/Images/Math_Icon.jpg" alt="Image cannot load" width="80px" height="90px"></a><!--Image by brgfx on Freepik--></div>
            <div class="absolute ml-650"><!--English--><a href={{ route("page.english") }}><img src="/Images/English_Icon.jpg" alt="Image cannot load" width="80px" height="90px"></a><!--Image by upklyak on Freepik--></div>
            <div class="absolute ml-800"><!--History--><a href={{ route("page.history") }}><img src="/Images/History_Icon.jpg" alt="Image cannot load" width="80px" height="80px"></a><!--Image by Freepik--></div>
            <div style="absolute ml-950"><!--Grades--><a href={{ route("page.history") }}><img src="/Images/Grade_Icon.jpg" alt="Image cannot load" width="80px" height="80px"></a><!--Image by Freepik--></div>
            <div class="absolute ml-85/100 mtop-3"><!--pfp--><a href={{ route("page.profile") }}><img src="/Images/Default_Pfp.png" alt="Image cannot load" width="90px" height="90px"></a></div><!--Image by qalebstudio on Freepik-->
            <div class="absolute ml-93/100"><!--Home Button--><a href={{ route("page.home") }}><img src="/Images/Home_Icon.png" alt="Image cannot load" width="90px" height="90px"></a></div><!--Image by qalebstudio on Freepik-->
            LearnX      
        <br>
        A+ A+ A+
    </div>  
</div>

<div>
    <!--Belt Color-->
</div>
<div class="font-Preahvihear text-center text-7xl">
    <b>HISTORY</b>
</div>
    <div style="flex flex-col"> 
        <div class="font-sans w-50/100 float-right">
            <div>Holidays Around the World</div>
            <br>
            <div>Contenents/Oceans</div>
            <br>
            <div>States in the U.S.</div>
            <br>
            <div>Branches of the U.S. Government</div>
            <br>
            <div>Ancient History</div>
            <br>
        </div> 
        <div class="font-sans w-50/100 float-left">
            <div>American History</div>
            <br>
            <div>World History</div>
            <br>
            <div>Economics</div>
            <br>
            <div>Civics</div>
            <br>
            <div>Politics</div>
            <br>
        </div>
    </div>
<div class="font-Preahvihear text-3xl text-left h-24 w-full mt-5">
    <div class="absolute ml-10/100 bg-purple-400">Flashcards</div>
    <div class="absolute ml-43/100 bg-green-400">Learning Fun</div>
    <div class="absolute ml-80/100 bg-purple-400">Timeline</div>
</div>
</body>
</html>