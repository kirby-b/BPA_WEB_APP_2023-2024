<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6"><!--Makes it a flex so the page is responsive-->
                <!-- Activity Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <div class="font-Preahvihear text-3xl">
                        <div class="text-center bg-purple-400">Flashcards</div>
                        <div class="text-center bg-green-400">Learning Fun</div>
                        <div class="text-center bg-purple-400">Write it Out</div>
                    </div>
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear text-center text-4xl">
                            <b>ENGLISH</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans w-50/100 float-right">
                                <br>
                                <a href="{{ route('page.lettersandsounds') }}" class="hover:text-purple-300">Letters & Sounds</a>
                                <br>
                                <a href="{{ route('page.vsandcs') }}" class="hover:text-purple-300">Vowels & Consentents</a>
                                <br>
                                <a href="{{ route('page.partsofspeech') }}" class="hover:text-purple-300">Nous, Verbs, etc.</a><!--link to choose-->
                                <br>
                                <a href="{{ route('page.small.spelling') }}" class="hover:text-purple-300">Small Spelling</a>
                                <br>
                                <a href="{{ route('page.contractions') }}" class="hover:text-purple-300">Contractions</a>
                                <br>
                            </div> 
                            <div class="font-sans w-50/100 float-left">
                                <a href="{{ route('page.punctuation') }}" class="hover:text-purple-300">Puntuaction</a>
                                <br> 
                                <a href="{{ route('page.definitions') }}" class="hover:text-purple-300">Definitions</a>
                                <br>
                                <a href="{{ route('page.essays') }}" class="hover:text-purple-300">Essays</a>
                                <br>
                                <a href="{{ route('page.research.citations') }}" class="hover:text-purple-300">Reaseach/Citations</a>
                                <br>
                                <a href="{{ route('page.storytelling') }}" class="hover:text-purple-300">Story Telling</a>
                                <br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
