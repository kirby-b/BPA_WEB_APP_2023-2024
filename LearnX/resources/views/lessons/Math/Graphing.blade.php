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
                        <span class="font-black">Math:</span><br><br>
                        <span class="font-bold">Graphing:</span><br>
                        Graphing in math involves representing mathematical relationships visually using graphs. Graphs are visual representations of data or mathematical functions that help to understand, analyze, and interpret information more intuitively. They consist of points, lines, curves, and other geometric shapes that depict relationships between different variables.<br> 
                        <br>
                        <b>The most common graphs include:</b><br> 
                        <br>
                        <span class="font-semibold">Cartesian Coordinate System:</span> This is the foundation for most types of graphs. It consists of an x-axis and a y-axis that intersect at a point called the origin. Points on the plane are represented by ordered pairs (x, y), where x is the value along the horizontal x-axis and y is the value along the vertical y-axis.<br> 
                        <br>
                        <span class="font-semibold">Linear Graphs:</span> These graphs show linear relationships between two variables. The equation of a line in the form y = mx + b represents a linear function, where m is the slope of the line and b is the y-intercept.<br> 
                        <br>
                        <span class="font-semibold">Quadratic Graphs:</span> Quadratic equations produce parabolic graphs. The standard form of a quadratic equation is y = ax^2 + bx + c, where 'a' determines the direction and width of the parabola.<br> 
                        <br>
                        <span class="font-semibold">Exponential and Logarithmic Graphs:</span> Exponential functions (y = a * b^x) and logarithmic functions (y = log_b(x)) create distinct curves on graphs. Exponential functions often exhibit rapid growth or decay, while logarithmic functions display a characteristic curve that increases slowly after an initial rapid increase.<br> 
                        <br>
                        <span class="font-semibold">Trigonometric Graphs:</span> Functions like sine, cosine, and tangent generate periodic graphs due to their cyclic nature. These functions oscillate between certain values as the input (angle) changes.<br> 
                        <br>
                        <b>Graphs are beneficial for several reasons:</b><br> 
                        <br>
                        <span class="font-semibold">Visual Representation:</span> They provide a clear visual representation of data or mathematical relationships.<br>
                        <br> 
                        <span class="font-semibold">Analysis and Interpretation:</span> Graphs help in analyzing trends, identifying patterns, and making predictions based on the data.<br> 
                        <br>
                        <span class="font-semibold">Problem-solving:</span> They assist in solving equations, finding intersections, determining maximum or minimum points, and more.<br> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>