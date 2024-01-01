<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6"><!--Makes it a flex so the page is responsive-->
                <!-- Activity Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <div class="font-Preahvihear text-3xl">
                        <div class="text-center bg-purple-400"><a href="{{ route('page.flashcards.math') }}" class="hover:text-purple-300">Flashcards</a></div>
                        <div class="text-center bg-green-400"><a href="{{ route('page.learnfun.math') }}" class="hover:text-purple-300">Learning Fun</a></div>
                        <div class="text-center bg-purple-400"><a href="{{ route('page.solveit.math') }}" class="hover:text-purple-300">Solve It</a></div>
                    </div>
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear text-center text-4xl">
                            <b>MATH</b>
                        </div>
                        <div class="flex flex-col"> 
                            <!--Route links for related pages-->
                            <div class="font-sans w-50/100 float-right">
                                <br>
                                <a href="{{ route('page.number') }}" class="hover:text-purple-300">Numbers</a><br>
                                <br>
                                {{-- <a href="{{ route('page.shapesncolors') }}" class="hover:text-purple-300">Shapes & Colors</a><br>
                                <br> --}}
                                <a href="{{ route('page.probNstats') }}" class="hover:text-purple-300">Probability & Statistics</a><br>
                                <br>
                                <a href="{{ route('page.elementary') }}" class="hover:text-purple-300">Elementary Math</a><br>
                                <br>
                                <a href="{{ route('page.graphing') }}" class="hover:text-purple-300">Graphing</a><br>
                            </div> 
                            <div class="font-sans w-50/100 float-left">
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
                                <br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
