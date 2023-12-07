<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        English:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <br>
                        <div><a href="{{ route('page.lettersandsounds') }}" class="hover:text-purple-300">Letters & Sounds</a></div>
                        <br>
                        <div><a href="{{ route('page.vsandcs') }}" class="hover:text-purple-300">Vowels & Consentents</a></div>
                        <br>
                        <div><a href="{{ route('page.partsofspeech') }}" class="hover:text-purple-300">Nous, Verbs, etc.</a></div><!--link to choose-->
                        <br>
                        <div><a href="{{ route('page.small.spelling') }}" class="hover:text-purple-300">Small Spelling</a></div>
                        <br>
                        <div><a href="{{ route('page.contractions') }}" class="hover:text-purple-300">Contractions</a></div>
                        <br>
                        <div><a href="{{ route('page.punctuation') }}" class="hover:text-purple-300">Puntuaction</a></div>
                        <br> 
                        <div><a href="{{ route('page.definitions') }}" class="hover:text-purple-300">Definitions</a></div>
                        <br>
                        <div><a href="{{ route('page.essays') }}" class="hover:text-purple-300">Essays</a></div>
                        <br>
                        <div><a href="{{ route('page.research.citations') }}" class="hover:text-purple-300">Reaseach/Citations</a></div>
                        <br>
                        <div><a href="{{ route('page.storytelling') }}" class="hover:text-purple-300">Story Telling</a></div>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <b>LETTER & SOUNDS</b>
                        </div>

                        <!--video goes here-->

                        <div class="font-Preahvihear">
                            <a><--Go Back<a>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
