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
                    <p class=" font-sans m-4">
                        <div class="font-Preahvihear text-xl">
                            <b>RESEARCH/CITATIONS</b><br>
                        </div>

                       <span class="font-bold">APA Style:</span><br>
                       <br>
                        <span class="font-semibold">Book:</span><br>
                        Author, A. A. (Year of publication). Title of work: Capital letter also for subtitle. Publisher.<br>
                        <br>
                        <span class="font-semibold">Example:</span><br>
                        Smith, J. A. (2005). The Art of Writing: A Guide to Perfecting Your Skills. Academic Press.<br>
                        <br>
                        <span class="font-semibold">Website:</span><br>
                        Author, A. A. (Year, Month Day of publication). Title of webpage. Name of Website. URL<br>
                        <br>
                        <span class="font-semibold">Example:</span><br>
                        Doe, J. (2022, January 9). The Impact of Climate Change on Biodiversity. Environmental Insights. https://www.example.com/climate-change-biodiversity-example<br>
                        <br>
                        <br>
                        <span class="font-bold">MLA Style:</span><br>
                        <br>
                        <span class="font-semibold">Book:</span><br>
                        Author's Last name, First name. Title of Book. Publisher, Publication Date.<br>
                        <br>
                        <span class="font-semibold">Example:</span><br>
                        Smith, John A. The Art of Writing: A Guide to Perfecting Your Skills. Academic Press, 2005.<br>
                        <br>
                        <span class="font-semibold">Website:</span><br>
                        Author's Last name, First name. "Title of Webpage." Name of Website, Publication Date, URL.<br>
                        <br>
                        <span class="font-semibold">Example:</span><br>
                        Doe, John. "The Impact of Climate Change on Biodiversity." Environmental Insights, 9 Jan. 2022, https://www.exampletwo.com/climate-change-biodiversity-example.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
                