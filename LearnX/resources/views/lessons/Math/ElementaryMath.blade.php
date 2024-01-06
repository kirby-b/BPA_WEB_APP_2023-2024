<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        Math:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.number') }}" class="hover:text-purple-300">Numbers</a><br>
                        <br>
                        {{-- <a href="{{ route('page.shapesncolors') }}" class="hover:text-purple-300">Shapes & Colors</a><br>
                        <br> --}}
                        <a href="{{ route('page.probNstats') }}" class="hover:text-purple-300">Probability & Statistics</a><br>
                        <br>
                        <a href="{{ route('page.elementary') }}" class="hover:text-purple-300">Elementary Math</a><br>
                        <br>
                        <a href="{{ route('page.graphing') }}" class="hover:text-purple-300">Graphing</a><br>
                        <br>
                        <a href="{{ route('page.patterns') }}" class="hover:text-purple-300">Patterns</a><br>
                        <br> 
                        <a href="{{ route('page.FDP') }}" class="hover:text-purple-300">Fractions, Decimals, & Precentages</a><br>
                        <br>
                        <a href="{{ route('page.algebra') }}" class="hover:text-purple-300">Algebra</a><br>
                        <br>
                        <a href="{{ route('page.geometry') }}" class="hover:text-purple-300">Geometry</a><br>
                        <br>
                        <a href="{{ route('page.calculus') }}" class="hover:text-purple-300">Calculus</a><br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <span class="font-black">Math:</span><br>
                        <span class="font-bold">Elementary Math:</span><br><br>
                        <span class="font-semibold">Arithmetic Operations:</span> Elementary math includes fundamental operations like addition, subtraction, multiplication, and division.<br>
                        <br>
                        <span class="font-semibold">Number Sense:</span> Developing an understanding of numbers, their relationships, and their magnitude.<br>
                        <br>
                        <span class="font-semibold">Place Value:</span> Understanding the value of digits based on their position in a number.<br>
                        <br>
                        <span class="font-semibold">Fractions and Decimals:</span> Introducing the concept of parts of a whole through fractions and decimals.<br>
                        <br>
                        <span class="font-semibold">Geometry:</span> Basic geometry concepts such as shapes, angles, and spatial relationships.<br>
                        <br>
                        <span class="font-semibold">Measurement:</span> Learning units of measurement for length, weight, volume, and time.<br>
                        <br>
                        <span class="font-semibold">Patterns and Sequences:</span> Recognizing and extending patterns and sequences of numbers or shapes.<br>
                        <br>
                        <span class="font-semibold">Basic Algebra:</span> Introduction to simple algebraic expressions and equations.<br>
                        <br>
                        <span class="font-semibold">Data and Statistics:</span> Understanding basic concepts like graphs, charts, and simple statistical measures.<br>
                        <br>
                        <span class="font-semibold">Problem Solving:</span> Developing problem-solving skills through various mathematical scenarios and word problems.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>