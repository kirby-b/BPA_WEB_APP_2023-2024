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
                        <div class="font-Preahvihear items-center text-2xl">
                            <b>PARTS OF SPEECH</b>
                        </div>
                        <div class="text-xl font-sans m-4">
                            <b>Nouns:</b> Words that represent people, places, things, or ideas. <br>
                            Examples: dog, city, love<br>
                            <br>
                            <b>Verbs:</b> Words that describe actions or states of being.<br>
                            Examples: run, eat, think<br>
                            <br>
                            <b>Adjectives:</b> Words that modify or describe nouns, giving more information about them.<br>
                            Examples: happy, tall, blue<br>
                            <br>
                            <b>Adverbs:</b> Words that modify or describe verbs, adjectives, or other adverbs, providing more details about how, when, where, or to what extent.<br>
                            Examples: quickly, very, often<br>
                            <br>
                            <b>Pronouns:</b> Words that take the place of nouns.<br>
                            Examples: he, she, it, they<br>
                            <br>
                            <b>Conjunctions:</b> Words that connect words, phrases, or clauses.<br>
                            Examples: and, but, or<br>
                            <br>
                            <b>Articles:</b> The words "a," "an," and "the," which are used to specify or limit a noun<br>
                            Examples: I saw a cat in the backyard./Can you please pass the salt?
                            <br>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
        
