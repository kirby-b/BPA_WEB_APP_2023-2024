<x-partials.layout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg flex justify-center items-center">
                    <div class="text-xl font-sans m-4">
                        <h1 class="text-center text-4xl">LearnX Can't Do It Alone</h1>
                        <p class="text-center text-xl">
                            We apperciate your donation, please type in the amount you wish to donate below:
                        </p>
                        <br>
                        <form method="POST" action="/users/authenticate" class="">
                            @csrf <!--Makes it so people cant use scripts against your site-->
                            <div class="justify-center items-center">
                                Dollar Amount
                                <div>
                                    <input class="w-75 h-15 border-black border-solid border-2 p-3 text-2xl" type="text" id="dollar" name="dollar" placeholder="Dollar Amt" value="{{old('dollar')}}">
                                </div>
                                    <br>
                                    Credit/Debit Card #
                                <div>
                                    <input class="w-75 h-15 border-black border-solid border-2 p-3 text-2xl" type="text" id="Cred-Deb" name="Cred-Deb" placeholder="Card ####-####-####-####" value="{{old('Cred-Deb')}}">
                                </div>
                                    <br>
                                    CVC
                                <div>
                                    <input class="w-75 h-15 border-black border-solid border-2 p-3 text-2xl" type="text" id="CVC" name="CVC" placeholder="CVC" value="{{old('CVC')}}">
                                </div>
                                    <!--submit button-->
                                <div class="">
                                    <input class="font-Preahvihear text-3xl no-underline border-none cursor-pointer text-black" type="submit" id="submit" name="submit" value="DONATE>">
                                </div>
                                <!--Gets your input and tries to verify your account info. endError sections determine what will happen if they input the
                                    wrong info -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-partials.layout>