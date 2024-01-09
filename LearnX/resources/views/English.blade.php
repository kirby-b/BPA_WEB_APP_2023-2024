<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6"><!--Makes it a flex so the page is responsive-->
                <!-- Activity Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <div class="font-Preahvihear text-3xl">
                        <div class="text-center bg-purple-400"><a href="{{ route('page.flashcards.english') }}" class="hover:text-purple-300">Flashcards</a></div>
                        <div class="text-center bg-green-400"><a href="{{ route('page.learnfun.english') }}" class="hover:text-purple-300">Learning Fun</a></div>
                        <div class="text-center bg-purple-400"><a href="{{ route('page.writeout.english') }}" class="hover:text-purple-300">Write it Out</a></div>
                    </div>
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear text-center text-4xl">
                            <b>ENGLISH</b>
                        </div>
                        <div class="flex flex-col"> 
                            <!--Route links for related pages-->
                            <div class="font-sans w-50/100 float-right text-xl">
                                <br>
                                <a href="{{ route('page.lettersandsounds') }}" class="hover:text-purple-300">Letters & Sounds</a><br>
                                <br>
                                <a href="{{ route('page.vsandcs') }}" class="hover:text-purple-300">Vowels & Consentents</a><br>
                                <br>
                                <a href="{{ route('page.partsofspeech') }}" class="hover:text-purple-300">Parts of Speech</a><br><!--link to choose-->
                                <br>
                                <a href="{{ route('page.small.spelling') }}" class="hover:text-purple-300">Small Spelling</a><br>
                                <br>
                                <a href="{{ route('page.contractions') }}" class="hover:text-purple-300">Contractions</a><br>
                                <br>
                            </div> 
                            <div class="font-sans w-50/100 float-left text-xl">
                                <a href="{{ route('page.punctuation') }}" class="hover:text-purple-300">Puntuaction</a><br>
                                <br> 
                                <a href="{{ route('page.sentandpara') }}" class="hover:text-purple-300">Sentences and Paragraphs</a><br>
                                <br>
                                <a href="{{ route('page.essays') }}" class="hover:text-purple-300">Essays</a><br>
                                <br>
                                <a href="{{ route('page.research.citations') }}" class="hover:text-purple-300">Reseach/Citations</a><br>
                                <br>
                                <a href="{{ route('page.storytelling') }}" class="hover:text-purple-300">Story Telling</a><br>
                                <br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
