<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
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
                        <a href="{{ route('page.punctuation') }}" class="hover:text-purple-300">Puntuaction</a><br>
                        <br> 
                        <a href="{{ route('page.sentandpara') }}" class="hover:text-purple-300">Sentences and Paragraphs</a><br>
                        <br>
                        <a href="{{ route('page.essays') }}" class="hover:text-purple-300">Essays</a><br>
                        <br>
                        <a href="{{ route('page.research.citations') }}" class="hover:text-purple-300">Research/Citations</a><br>
                        <br>
                        <a href="{{ route('page.storytelling') }}" class="hover:text-purple-300">Story Telling</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="m-4">
                        <div class="font-family: 'Preahvihear';Text-align: Center; font-size:5rem;">
                            <b>CONTRACTIONS</b>
                        </div>
                        <div class="display: flex; flex-direction: colum;"> 
                            <div class="text-xl font-sans">
                                I am → I'm<br>
                                Example: I'm going to the store.<br>
                                <br>
                                you are → you're<br>
                                Example: Do you know where you're going?<br>
                                <br>
                                they are → they're<br>
                                Example: They're coming to the party.<br>
                                <br>
                                we are → we're<br>
                                Example: We're excited about the trip.<br>
                                <br>
                                it is → it's<br>
                                Example: It's a beautiful day.<br>
                                <br>
                            </div>
                            <div class="text-xl font-sans">
                                can not → can't<br>
                                Example: I can't believe it.<br>
                                <br>
                                will not → won't<br>
                                Example: She won't be late.<br>
                                <br>
                                does not → doesn't<br>
                                Example: He doesn't like coffee.<br>
                                <br>
                                is not → isn't<br>
                                Example: This isn't what I expected.<br>
                                <br>
                                are not → aren't<br>
                                Example: They aren't coming to the meeting.<br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>