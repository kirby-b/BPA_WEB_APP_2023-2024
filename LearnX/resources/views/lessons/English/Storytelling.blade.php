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
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <b>STORYTELLING</b>
                        </div>

                        <span class="font-bold">Introduction/Exposition:</span><br>
                        <br>
                        What it is: The beginning of the story where characters, setting, and the main conflict are introduced.
                        How to make it: Establish the main characters, the setting (time and place), and provide necessary background information. Introduce the central problem or conflict that the characters will face.
                        <span class="font-Preahvihear text-bold">Inciting Incident:</span><br>
                        <br>
                        What it is: The event that sets the main story in motion and disrupts the ordinary life of the protagonist.
                        How to make it: Present a catalyst that propels the characters into the central conflict. This incident should be intriguing and engaging, capturing the audience's attention.
                        <span class="font-Preahvihear text-bold">Rising Action:</span>

                        What it is: The series of events that build tension and develop the plot.
                        How to make it: Introduce obstacles and challenges that the characters must overcome. Escalate the conflict gradually, raising the stakes and keeping the audience invested in the outcome.
                        Climax:

                        What it is: The turning point of the story, the moment of greatest tension and conflict.
                        How to make it: Build towards a pivotal moment where the main characters confront the central conflict. This is the moment of highest intensity and often determines the direction of the resolution.
                        Falling Action:

                        What it is: The aftermath of the climax, where loose ends are tied up.
                        How to make it: Resolve the remaining conflicts, provide closure for subplots, and guide the story towards its conclusion. Show the consequences of the characters' actions.
                        Resolution/Conclusion:

                        What it is: The final part of the story where the main conflict is fully resolved.
                        How to make it: Conclude the story by tying up all loose ends. Offer insight into how characters have changed or what they've learned. Provide a satisfying ending that resonates with the theme of the story.
                        Characters:

                        What they are: The individuals who drive the story.
                        How to create them: Develop well-rounded characters with distinct personalities, motivations, and conflicts. Make them relatable and give them room for growth throughout the narrative.
                        Setting:

                        What it is: The time and place where the story unfolds.
                        How to create it: Describe the setting vividly to immerse readers or viewers in the world of the story. Consider how the setting influences the characters and plot.
                        Conflict:

                        What it is: The central problem or challenge that characters must face.
                        How to create it: Establish a compelling conflict that drives the narrative. This could be internal (emotional struggle) or external (external challenges, antagonists).
                        Theme:

                        What it is: The central idea or message conveyed by the story.
                        How to create it: Identify the core themes you want to explore, whether it's love, loss, resilience, or any other concept. Weave these themes into the narrative through character actions, dialogue, and events.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
                