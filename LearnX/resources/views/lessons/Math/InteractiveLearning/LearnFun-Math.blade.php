<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">Math:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.lettersandsounds') }}" class="hover:text-purple-300">Letters & Sounds</a><br>
                        <br>
                        <a href="{{ route('page.vsandcs') }}" class="hover:text-purple-300">Vowels & Consentents</a><br>
                        <br>
                        <a href="{{ route('page.partsofspeech') }}" class="hover:text-purple-300">Nous, Verbs, etc.</a><br><!--link to choose-->
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">Math:</span><br>
                            <b>Learning Fun</b>
                        </div>
                        <form>
                            <input type="radio" id="ans1" name="question1" value="ans1">
                            <label for="ans1">ans1</label><br>
                            <input type="radio" id="ans2" name="question1" value="ans2">
                            <label for="ans2">ans2</label><br>
                            <input type="radio" id="ans3" name="question1" value="ans3">
                            <label for="ans3">ans3</label>
                        </form>
                        {{-- Put questions here in mutiple choice format --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>