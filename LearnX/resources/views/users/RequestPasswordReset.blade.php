<x-partials.Baselayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg flex justify-center items-center">
                    <div class="text-xl font-sans m-4">
                        <p class="text-xl mb-1">Password Reset</p>
                        <p class="text-base mb-1">Please input your email</p>
                        <!--Goes to the reset route and then to the UserController-->
                        <form method="POST" action="/forgot-password">
                            @csrf <!--Makes it so people cant use scripts against your site-->
                            <div class="items-center">
                                <div>
                                    <input class="w-75 h-15 border-black border-solid border-2 p-3 text-lg" type="text" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                                    @error('email')<!--Email and sends link for password-->
                                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <br>
                                <div class= "">
                                    <input class="font-Preahvihear text-xl no-underline border-none cursor-pointer text-red-600 hover:text-blue-800" type="submit" id="submit" name="submit" value="Send Email">
                                </div>
                                <!--Gets your input and tries to verify your account info. endError sections determine what will happen if they input the
                                wrong info -->
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.Baselayout>