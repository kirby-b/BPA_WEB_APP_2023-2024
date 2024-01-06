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
                        <span class="font-bold">Algebra:</span><br><br>
                        <span class="font-semibold">Linear Equations:</span> Solving equations of the form ax + b = c.<br>
                        <br>
                        <span class="font-semibold">Quadratic Equations:</span> Solving equations of the form ax^2 + bx + c = 0.<br>
                        <br>
                        <span class="font-semibold">Polynomials:</span> Expressions with one or more algebraic terms.<br>
                        <br>
                        <span class="font-semibold">Factoring:</span> Breaking down expressions into their factors.<br>
                        <br>
                        <span class="font-semibold">Systems of Equations:</span> Dealing with multiple equations simultaneously.<br>
                        <br>
                        <span class="font-semibold">Inequalities:</span> Understanding and solving expressions with <, >, ≤, or ≥.<br>
                        <br>
                        <span class="font-semibold">Functions:</span> Describing relationships between variables.<br>
                        <br>
                        <span class="font-semibold">Exponents:</span> Operations involving powers and roots.<br>
                        <br>
                        <span class="font-semibold">Rational Expressions:</span> Fractions where the numerator and/or denominator are polynomials.<br>
                        <br>
                        <span class="font-semibold">Word Problems:</span> Applying algebraic concepts to real-world situations.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>