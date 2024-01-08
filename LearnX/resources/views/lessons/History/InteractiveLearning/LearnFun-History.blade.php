<x-partials.QuizLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">History:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.timeline.hist') }}" class="hover:text-purple-300">Timeline</a><br>
                        <br>
                        <a href="{{ route('page.learnfun.hist') }}" class="hover:text-purple-300">Learning Fun</a><br>
                        <br>
                        <a href="{{ route('page.writeout.hist') }}" class="hover:text-purple-300">Write It Out</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">History:</span><br>
                            <b>Learning Fun</b>
                        </div>
                        <form>
                            <p>Q1</p>
                            <input type="radio" id="ans1" name="question1" value="ans1">
                            <label for="ans1">A. ans1</label><br>
                            <input type="radio" id="ans2" name="question1" value="ans2">
                            <label for="ans2">B. ans2</label><br>
                            <input type="radio" id="ans3" name="question1" value="ans3">
                            <label for="ans3">C. ans3</label>
                            <input type="radio" id="ans4" name="question1" value="ans4">
                            <label for="ans4">D. ans4</label>
                        </form>
                    {{-- Put questions here in mutiple choice format --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.QuizLayout>