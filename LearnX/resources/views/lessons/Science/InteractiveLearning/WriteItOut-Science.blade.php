<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">Science:</span><br>
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
                            <span class="font-black">Science:</span><br>
                            <b>Write It Out</b>
                        </div>
                        <form>
                            <label for="q1">Fill in blank:</label><br>
                            <input type="text" id="q1" name="q1"><br>
                            <label for="q2">Short Answer:</label><br>
                            <input type="text" id="q2" name="q2">
                        </form> 
                        {{-- Fill in the blanks and short answers --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>