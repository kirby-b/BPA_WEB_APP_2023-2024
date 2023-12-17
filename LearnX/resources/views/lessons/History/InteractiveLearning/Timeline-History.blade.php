<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">History:</span><br>
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
                            <span class="font-black">History:</span><br>
                            <b>Timeline</b>
                        </div>
                         {{-- Drag boxes to correct place on timeline
                            Links for help:
                            https://www.w3schools.com/howto/howto_js_draggable.asp
                            https://stackoverflow.com/questions/49113948/create-box-that-allows-draggable-elements-to-be-dropped-in-it-using-js
                            https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/draggable
                            https://mdbootstrap.com/docs/standard/plugins/drag-and-drop/
                            https://www.w3schools.com/TAGS/att_draggable.asp --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>