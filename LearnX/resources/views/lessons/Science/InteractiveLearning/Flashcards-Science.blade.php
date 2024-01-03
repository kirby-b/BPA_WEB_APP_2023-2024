<x-partials.FlashCardLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">Science:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.writeout.science') }}" class="hover:text-purple-300">Write it Out</a><br>
                        <br>
                        <a href="{{ route('page.learnfun.science') }}" class="hover:text-purple-300">Learning Fun</a><br>
                        <br>
                        <a href="{{ route('page.flashcards.science') }}" class="hover:text-purple-300">Flashcards</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">Science:</span><br>
                            <b>Flash Cards</b>
                        </div>
                        {{-- Generate a quizlet essentially --}}
                        <div id="1" x-data="{ flipped: false }" class="py-32 relative w-96 h-96 mx-auto mt-8 mb-8 cursor-pointer text-center font-bold tracking-light text-lg">
                            <div x-show.transition.scale.5.duration.400ms="!flipped" class="absolute text-center py-16 bg-gradient-to-br from-purple-500 via-violet-300 to-transparent overflow-hidden inset-0 rounded-lg shadow-lg" @click="flipped = true;" >
                                Front
                            </div>
                            <div x-show.transition.scale.5.duration.400ms="flipped" style="display: none;" class="absolute text-center py-16 bg-gradient-to-br from-white via-teal-200 to-green-500 bg-blue-300 overflow-hidden inset-0 rounded-lg shadow-lg" @click="flipped = false;" >
                                Back
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.FlashCardLayout>