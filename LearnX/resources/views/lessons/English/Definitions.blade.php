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
                        <a href="{{ route('page.lettersandsounds') }}" class="hover:text-purple-300">Letters & Sounds</a><br>
                        <br>
                        <a href="{{ route('page.vsandcs') }}" class="hover:text-purple-300">Vowels & Consentents</a><br>
                        <br>
                        <a href="{{ route('page.partsofspeech') }}" class="hover:text-purple-300">Nous, Verbs, etc.</a><br><!--link to choose-->
                        <br>
                        <a href="{{ route('page.small.spelling') }}" class="hover:text-purple-300">Small Spelling</a><br>
                        <br>
                        <a href="{{ route('page.contractions') }}" class="hover:text-purple-300">Contractions</a><br>
                        <br>
                        <a href="{{ route('page.punctuation') }}" class="hover:text-purple-300">Puntuaction</a><br>
                        <br> 
                        <a href="{{ route('page.definitions') }}" class="hover:text-purple-300">Definitions</a><br>
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
                    <div class="font-Preahvihear items-center text-2xl">
                        <b>DEFINITIONS</b>
                    </div>
                    <p class="text-2xl font-sans m-4">
                        Ocean: A massive body of salt water.<br>
                        Law: A rule written for society to keep it in order.<br>
                        Election: When a society decides who is the leader.<br>
                        Hieroglyphic: A form of language written with small pictures and symbols meant to represent sounds and words.<br>
                        Civilization: A society that has become advanced in one way or another.<br>
                        Agriculture: Harvesting and growing plants and/or animals for food and other needs.<br>
                        Astronomy: The study of stars and planets.<br>
                        Hierarchy: The social order.One group will be on top and another will be on the bottom.<br>
                        Colosseum: A large theater. Used as a place of entertainment.<br>
                        Dynasty: A line of leaders who are related to each other.<br>
                        Plague: A virus, bacteria, or other such thing that causes massive amounts of harm and death.<br>
                        Revolution: When a society decides to over throw something and replace it(usually a leader)<br>
                        Treaty: When a group of diplomats sit down and make a deal for a collective goal.<br>
                        Crisis: A very ergent and harmful thing/time.<br>
                        Settlement: When a group of people move somewhere else and build a new society.<br>
                    </p>
                </div>
            </div> 
        </div>
    </div>
</x-partials.UserLayout>