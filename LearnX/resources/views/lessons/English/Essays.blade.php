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
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <b>ESSAYS:</b>
                        </div>
                        <br><br><br>
                        Introduction:<br>
                        Hook - An attention-grabbing sentence or statement to engage the reader.<br>
                        Background Information - Relevant context or information to provide a foundation for the essay.<br>
                        Thesis Statement - A concise statement that presents the main argument or purpose of the essay.<br>
                        <br>
                        Body Paragraphs:<br>
                        Topic Sentence - The main idea of the paragraph, often the first sentence.<br>
                        Supporting Details - Evidence, examples, facts, or quotes that support the topic sentence.<br>
                        Analysis - Explanation and interpretation of the evidence, demonstrating its relevance to the thesis.<br>
                        <br>
                        Transitions:<br>
                        Transitional Phrases - Words or phrases that connect ideas and paragraphs, ensuring a smooth flow of the essay.<br>
                        <br>
                        Conclusion:<br>
                        Restatement of Thesis - A rephrased version of the thesis statement to remind the reader of the main argument.<br>
                        Summary of Key Points - A concise recap of the main points discussed in the essay.<br>
                        <br>
                        Closing Thoughts: A concluding statement that leaves a lasting impression or suggests further implications.<br>
                        <br>
                        Counterargument (optional):<br>
                        Acknowledgment of Counterargument - Recognition of opposing views or counterarguments.<br>
Refutation or Rebuttal: Response to counterarguments, demonstrating why the thesis is still valid.
Conclusion:

Final Thoughts: A reflection on the significance of the essay's argument or a call to action.
Closing Statement: A memorable closing remark that leaves an impact.
References or Works Cited (if applicable):

Citations: Properly formatted citations for any external sources used in the essay.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
                