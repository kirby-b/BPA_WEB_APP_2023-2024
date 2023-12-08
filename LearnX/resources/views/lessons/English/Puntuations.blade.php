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
                        <b>PUNCUATIONS</b>
                    </div>
                    <p class="text-xl font-sans m-4">
                        , - Commas are used to break up sentences to make them easier to read. Example: I love vanilla ice cream, but my brother prefers chocolate. <br><br>
                        ' - Used to make contractions and shorten words. Examples: I'm(I am), You're(You are), I've(I have), Don't(Do not)<br><br>
                        "" - Quotation marks are used for quoting speech, titles of short works, or irony and/or scepticism.<br>
                            Example: "I'm going to the store," the man said, "I will be back later."<br>
                            Example 2: I just finished the book, "Alice In Wonderland."<br>
                            Example 3: These so called "experts" couldn't solve the problem.
                        <br><br>
                        ; - Semi-colons are used to break up sentences to make them easier to read. Example: The pancakes were delicious; they were fluffy and sweet.<br><br>
                        : - Colons are meant to give emphasis or present lists.Example: Sara studied hard for one purpose: to succeed in her college courses<br><br>
                        . - Periods are used to end sentences. <--Example<br><br>
                        ? - Used to indicate a question. Example: Why is school important?<br><br>
                        ! - Used to indicate excitement or action. Example: I'm so excited to learn!<br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
                