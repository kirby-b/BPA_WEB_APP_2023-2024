<!DOCTYPE html>
<m-44 inline rel="stylesheet" type="text/css" href="/css/app.css"> 
{{-- @vite('resources/css/app.css') --}}
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Donate page">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-green-250">

<div>

    <h1 class="text-center">LearnX Can't Do It Alone</h1>
    <p class="text-center text-lg">
        We apperciate your donation, please type in the amount you wish to donate below:
    </p>
        

    <form method="POST" action="/users/authenticate" class="position:absolute;">
        @csrf <!--Makes it so people cant use scripts against your site-->
            <div class="justify-center items-center mt-3/100 ml-600">
                Dollar Amount
                <div>
                    <input class="w-75 h-15 border-black p-3 text-2xl" type="text" id="dollar" name="dollar" placeholder="Dollar Amt" value="{{old('dollar')}}">
                </div>
                    <br>
                    <br>
                    <br>
                    Credit/Debit Card #
                <div>
                    <input class="w-75 h-15 border-black p-3 text-2xl" type="text" id="Cred-Deb" name="Cred-Deb" placeholder="Card ####-####-####-####" value="{{old('Cred-Deb')}}">
                </div>
                    <br>
                    <br>
                    <br>
                    CVC
                <div>
                    <input class="w-75 h-15 border-black p-3 text-2xl" type="text" id="CVC" name="CVC" placeholder="CVC" value="{{old('CVC')}}">
                </div>
                    <!--submit button-->
                <div class= "absolute ml-75 mt-50">
                    <input class="font-Preahvihear text-3xl no-underline border-none cursor-pointer bg-black" type="submit" id="submit" name="submit" value="DONATE>">
                </div>
                <!--Gets your input and tries to verify your account info. endError sections determine what will happen if they input the
                wrong info -->
            </div>
        </form>

</div>

<div class="Preahvihear text-center text-3xl absolute width-full h-17 bg-center bg-cover bg-[url('/Images/Light-Rainbow-Gradient.jpg')] mt-1400 border-7 border-solid border-black" class="mt-540">
    <div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.faq") }}>FAQ</a> 
        </div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.about") }}>ABOUT</a>
        </div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.why.us") }}>WHY US</a>
        </div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.index") }}>MENU</a> 
        </div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.reviews") }}>WHAT TEACHERS/STUDENTS SAY</a>
        </div>
        <!--Links to various places on the website-->
    </div>
</div>

</body>

</html>