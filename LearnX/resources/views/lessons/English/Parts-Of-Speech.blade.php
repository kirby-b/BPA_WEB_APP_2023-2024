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
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <b>PARTS OF SPEECH</b>
                        </div>
                        <div class="">
                            Nouns: Words that represent people, places, things, or ideas. <br>
                            Examples: dog, city, love<br>
                            <br>
                            Verbs: Words that describe actions or states of being.<br>
                            Examples: run, eat, think<br>
                            <br>
                            Adjectives: Words that modify or describe nouns, giving more information about them.<br>
                            Examples: happy, tall, blue<br>
                            <br>
                            Adverbs: Words that modify or describe verbs, adjectives, or other adverbs, providing more details about how, when, where, or to what extent.<br>
                            Examples: quickly, very, often<br>
                            <br>
                            Pronouns: Words that take the place of nouns.<br>
                            Examples: he, she, it, they<br>
                            <br>
                            Conjunctions: Words that connect words, phrases, or clauses.<br>
                            Examples: and, but, or<br>
                            <br>
                            Articles: The words "a," "an," and "the," which are used to specify or limit a noun<br>
                            Examples: I saw a cat in the backyard./Can you please pass the salt?
                            <br>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
        
