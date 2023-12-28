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
                        <span class="font-bold">Calculus:</span><br>
                        <span class="font-semibold">Differentiation:</span> This involves the study of rates at which quantities change. It's about finding derivatives, which represent the rate of change of one quantity with respect to another. Derivatives are fundamental in calculus and are used to analyze functions, describe motion, solve optimization problems, and understand the behavior of graphs. For instance, the derivative of a function f(x) gives us the slope of the tangent line to the graph of f(x) at any point.<br>
                        <br>
                        <span class="font-semibold">Integration:</span> Integration is the reverse process of differentiation. It involves finding antiderivatives and definite integrals. Integrals represent the accumulation of quantities and are used to compute areas under curves, calculate total quantities, solve problems related to motion, and much more. Definite integrals provide the exact accumulation of a quantity over a specific interval.<br>
                        <br>
                        <span class="underline">Calculus has several important concepts and tools:</span><br>
                        <br>
                        <span class="font-semibold">Limits:</span> The foundational concept of calculus. Limits describe the behavior of functions as inputs approach certain values, such as infinity or specific points. They're used in defining derivatives and integrals.<br>
                        <br>
                        <span class="font-semibold">Derivatives:</span> Calculating the rate of change of a function at a given point. The derivative of a function f(x) is denoted as f'(x) or dx/df.<br>
                        <br>
                        <span class="font-semibold">Integrals:</span> The accumulation of quantities or finding the area under a curve. The integral of a function f(x) is denoted as ∫f(x)dx.<br>
                        <br>
                        <span class="font-semibold">Applications:</span> Calculus has a wide range of applications in various fields, including physics, engineering, economics, biology, and more. It's used to model and solve problems related to motion, optimization, growth and decay, and many other real-world scenarios.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>