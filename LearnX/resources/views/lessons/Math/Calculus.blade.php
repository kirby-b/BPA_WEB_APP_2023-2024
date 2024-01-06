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
                        <span class="font-bold">Calculus:</span><br><br>
                        <span class="font-semibold">Differentiation:</span> Calculus involves the concept of differentiation, which is the process of finding the rate at which a quantity changes.<br>
                        <br>
                        <span class="font-semibold">Integration:</span> Integration is the reverse process of differentiation and involves finding the accumulated quantity, often interpreted as the area under a curve.<br>
                        <br>
                        <span class="font-semibold">Limits:</span> Calculus deals with limits, describing the behavior of functions as the input approaches a certain value.<br>
                        <br>
                        <span class="font-semibold">Derivatives:</span> The derivative of a function represents its rate of change and is a fundamental concept in calculus.<br>
                        <br>
                        <span class="font-semibold">Integrals:</span> Integrals are used to calculate the total accumulated change over an interval and find the area under curves.<br>
                        <br>
                        <span class="font-semibold">Limits and Continuity:</span> Understanding how functions behave as they approach specific values is crucial in calculus.<br>
                        <br>
                        <span class="font-semibold">Differential Equations:</span> Calculus is used to solve differential equations, which describe how a quantity changes with respect to another variable.<br>
                        <br>
                        <span class="font-semibold">Applications in Physics:</span> Calculus plays a significant role in physics, describing motion, forces, and other physical phenomena.<br>
                        <br>
                        <span class="font-semibold">Applications in Economics:</span> Calculus is used in economics to model and analyze various economic phenomena such as supply and demand.<br>
                        <br>
                        <span class="font-semibold">Multivariable Calculus:</span> Extending calculus to functions of multiple variables, which is important in fields like computer science, engineering, and physics.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>