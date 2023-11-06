<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="/css/app.css"> 
{{-- @vite('resources/css/app.css') --}}
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Sign Up">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-white">
    <div class="w-100 h-126 absolute ml-550 mt-80 bg-white">
        <!--Goes to route and then to UserController to be varified and stored-->
        <!--The value "old" makes it so the boxes retain what they say so the user doesnt have 
        to repeat themself-->
        <form form method="POST" action="/users" class="absolute ml-45 mt-20">
            @csrf <!--Makes it so people cant use scripts against your site-->
            <label class="text-lg" for="name">Name:</label><br>
            <input class="max-w-75 max-h-15 border-black p-3 text-2xl" type="text" id="name" name="name" placeholder="Hugh Man" value="{{old('name')}}"><br>
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
            <br>
            <!--Gets name. Errors if you dont put it in or it is incorrect-->
            <label for="mail">Email:</label><br>
            <input class="max-w-75 max-h-15 border-black p-3 text-2xl" type="email" id="mail" name="email" placeholder="username@example.com" value="{{old('email')}}"><br>
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
            <br>
            <!--Gets email. Errors if you dont put it in or it is incorrect-->
            <label for="password">Password:</label><br>
            <input class="max-w-75 max-h-15 border-black p-3 text-2xl" type="password" id="newPassword" name="password" placeholder="Password123456!" value="{{old('password')}}"><br>
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
            <br>
            <!--Gets password. Errors if you dont put it in or it is incorrect-->
            <label for="passord2">Confirm Password:</label><br>
            <input class="max-w-75 max-h-15 border-black p-3 text-2xl" type="password" id="password2" name="password_confirmation" placeholder="Password123456!" value="{{old('password_confirmation')}}"><br>
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
            <br>
            <!--Confirms password with a custom confirmation name. Errors if you dont put it in or it is incorrect-->
            
            <!--<input type="radio" id="choice1" name="radio" value="Org">
            <label for="choice1"> I am an organization</label><br>
            <input type="radio" id="choice2" name="radio" value="Teacher">
            <label for="choice2"> I am a teacher</label><br>
            <input type="radio" id="choice3" name="radio" value="Student">
            <label for="choice3"> I am a student</label><br>-->
            @error('radio')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror

            <!--Gets your position and errors if you dont pick one-->
            <!--Will add parts next to make it get small errors under the inputs if
            they arent good, along with other features.-->

            <!--<input type="text" id="orgAt" name="argAt" placeholder="What is your organizations @"><br>
            <input type="text" id="homeSchool" name="homeSchool" placeholder="What is your (or your childs) email"><br>-->

            
            <!--<label for="message"> What is your purpose for joining</label><br>
            <textarea name="message" rows="10" cols="30" value="{{old('message')}}"></textarea><br>-->
            <!--Gets the users reason for joining-->

            <input class="no-underline border-none cursor-pointer bg-black" type="submit" id="submit" name="submit" value="Create Account">
        </form>
    </div>
</body>
</html>