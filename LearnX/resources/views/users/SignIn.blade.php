<!DOCTYPE html>
{{-- <link rel="stylesheet" type="text/css" href="/css/app.css">  --}}
@vite('resources/css/app.css')
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Sign In">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-cover bg-[url('/Images/Stock-img-Rainbow-background.jpg')]">
</body>

<div class="bg-gradient-to-r from-cyan-300 to-pink-500 flex flex-col md:flex-row justify-center items-center">

    <h1>
        <div class="text-center text-5xl font-ArchivoBlack">
            LearnX
        </div>
    </h1>

    <div class="font-Preahvihear text-lg">
        <a href={{ route("page.index") }}><<< Go Back<a><!--Goes back to index-->
    </div>

    <div class="relative text-center text-9xl font-Preahvihear">
        Sign-In
    </div>
        <!--Goes to the authenticate route and then to the UserController-->
        <form method="POST" action="/users/authenticate">
            @csrf <!--Makes it so people cant use scripts against your site-->
            <div class="justify-center items-center">
                <div>
                    <input class="w-75 h-15 border-black border-solid border-2 p-3 text-lg" type="text" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <input class="w-75 h-15 border-black border-solid border-2 p-3 text-lg" type="password" id="password" name="password" placeholder="Password" value="{{old('password')}}">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class= "">
                    <input class="w-75 h-15 font-Preahvihear text-3xl no-underline border-none cursor-pointer bg-black" type="submit" id="submit" name="submit" value="Lets Go >>>">
                </div>
                <!--Gets your input and tries to verify your account info. endError sections determine what will happen if they input the
                wrong info -->
            </div>
        </form>

    <div class="text-xl">
        <a href={{ route("page.reset.pas") }}>I forgot my password</a>
    </div>

</div>
</html>