<x-partials.Baselayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg flex justify-center items-center">
                    <div class="text-xl font-sans m-4">
                        <!--Goes to route and then to UserController to be varified and stored-->
                        <!--The value "old" makes it so the boxes retain what they say so the user doesnt have 
                        to repeat themself-->
                        <form form method="POST" action="/users" class="">
                            @csrf <!--Makes it so people cant use scripts against your site-->
                            <label class="text-lg" for="name">Name(First and Last):</label><br>
                            <input class="max-w-75 max-h-15 border-black border-solid border-2 p-3 text-2xl" type="text" id="name" name="name" placeholder="Hugh Man" value="{{old('name')}}"><br>
                            @error('name')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror
                            
                            <!--Gets name. Errors if you dont put it in or it is incorrect-->
                            <label class="text-lg" for="mail">Email:</label><br>
                            <input class="max-w-75 max-h-15 border-black border-solid border-2 p-3 text-2xl" type="email" id="mail" name="email" placeholder="username@example.com" value="{{old('email')}}"><br>
                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror
                            
                            <!--Gets email. Errors if you dont put it in or it is incorrect-->
                            <label class="text-lg" for="password">Password:</label><br>
                            <input class="max-w-75 max-h-15 border-black border-solid border-2 p-3 text-2xl" type="password" id="newPassword" name="password" placeholder="Password123456!" value="{{old('password')}}"><br>
                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror
                            
                            <!--Gets password. Errors if you dont put it in or it is incorrect-->
                            <label class="text-lg" for="passord2">Confirm Password:</label><br>
                            <input class="max-w-75 max-h-15 border-black border-solid border-2 p-3 text-2xl" type="password" id="password2" name="password_confirmation" placeholder="Password123456!" value="{{old('password_confirmation')}}"><br>
                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror
                            <br>
                            <!--Confirms password with a custom confirmation name. Errors if you dont put it in or it is incorrect-->
                            
                            <input type="radio" name="permissions" value="ADMIN">
                            <label for="choice1"> I am an administrator</label><br>
                            <input type="radio" name="permissions" value="TEACHER">
                            <label for="choice2"> I am a teacher</label><br>
                            <input type="radio" name="permissions" value="STUDENT">
                            <label for="choice3"> I am a student</label><br>
                            @error('radio')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror

                            <!--Gets your position and errors if you dont pick one-->

                            <!--<label for="message"> What is your purpose for joining</label><br>
                            <textarea name="message" rows="10" cols="30" value="{{old('message')}}"></textarea><br>-->
                            <!--Gets the users reason for joining-->

                            <input class="text-2xl no-underline border-none cursor-pointer text-black text-blue-600 hover:text-blue-800" type="submit" id="submit" name="submit" value="Create Account">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.Baselayout>