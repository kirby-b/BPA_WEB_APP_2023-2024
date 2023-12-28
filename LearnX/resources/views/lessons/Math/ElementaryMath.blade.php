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
                        <span class="font-bold">Elementary Math:</span><br>
                        <span class="font-semibold">Counting and Numbers:</span> Learning to count, understand number sequences, and recognize numbers. This includes learning about place value (ones, tens, hundreds), odd and even numbers, and comparing numbers.<br>
                        <br>
                        <span class="font-semibold">Basic Operations:</span> Addition, subtraction, multiplication, and division. Students learn the arithmetic operations, understanding their symbols and basic applications.<br>
                        <br>
                        <span class="font-semibold">Fractions and Decimals:</span> Introducing the concept of fractions as parts of a whole, and later, understanding decimals as a way to represent parts of a whole or a group.<br>
                        <br>
                        <span class="font-semibold">Measurement:</span> Learning about units of measurement for length, weight, volume, time, and money. This includes understanding different tools used for measurement.<br>
                        <br>
                        <span class="font-semibold">Geometry:</span> Introduction to shapes, their properties, and basic geometric concepts like lines, angles, polygons, symmetry, and basic area and perimeter calculations.<br>
                        <br>
                        <span class="font-semibold">Data and Graphs:</span> Understanding basic data collection, organization, and representation through graphs such as bar graphs, line graphs, and pictographs.<br>
                        <br>
                        <span class="font-semibold">Problem Solving:</span> Encouraging critical thinking and problem-solving skills by applying math concepts to real-life situations and word problems.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>