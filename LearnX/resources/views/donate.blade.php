<x-partials.layout>

<div class="bg-green-250">

    <h1 class="text-center">LearnX Can't Do It Alone</h1>
    <p class="text-center text-lg">
        We apperciate your donation, please type in the amount you wish to donate below:
    </p>
        

    <form method="POST" action="/users/authenticate" class="position:absolute;">
        @csrf <!--Makes it so people cant use scripts against your site-->
            <div class="justify-center items-center mt-3/100 ml-600">
                Dollar Amount
                <div>
                    <input class="w-75 h-15 border-black border-solid border-2 p-3 text-2xl" type="text" id="dollar" name="dollar" placeholder="Dollar Amt" value="{{old('dollar')}}">
                </div>
                    <br>
                    <br>
                    <br>
                    Credit/Debit Card #
                <div>
                    <input class="w-75 h-15 border-black border-solid border-2 p-3 text-2xl" type="text" id="Cred-Deb" name="Cred-Deb" placeholder="Card ####-####-####-####" value="{{old('Cred-Deb')}}">
                </div>
                    <br>
                    <br>
                    <br>
                    CVC
                <div>
                    <input class="w-75 h-15 border-black border-solid border-2 p-3 text-2xl" type="text" id="CVC" name="CVC" placeholder="CVC" value="{{old('CVC')}}">
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

</div>
</x-partials.layout>