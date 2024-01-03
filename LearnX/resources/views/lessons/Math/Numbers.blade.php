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
                        <span class="font-extrabold">Numbers:</span><br>
                        <span class="font-bold">Types of Numbers:</span><br>
                        
                        <span class="font-semibold">Natural Numbers (N):</span> These are the counting numbers (1, 2, 3, 4, ...).<br>
                        <span class="font-semibold">Whole Numbers (W):</span> Include zero along with natural numbers (0, 1, 2, 3, ...).<br>
                        <span class="font-semibold">Integers (Z):</span> Include positive, negative numbers, and zero (-3, -2, -1, 0, 1, 2, 3, ...).<br>
                        <span class="font-semibold">Rational Numbers (Q):</span> Numbers that can be expressed as a fraction of integers (such as 1/2, -3/4, 7, etc.).<br>
                        <span class="font-semibold">Irrational Numbers:</span> Numbers that cannot be expressed as a fraction and have non-repeating, non-terminating decimal representations (like π or √2).<br>
                        <span class="font-semibold">Real Numbers (R):</span> Include all rational and irrational numbers, filling the number line completely.<br>
                        <span class="font-semibold">Complex Numbers (C):</span> Numbers of the form a + bi, where 'a' and 'b' are real numbers and 'i' is the imaginary unit (√(-1)).<br>
                        <br>
                        <span class="font-bold">Number Operations:</span><br>
                        
                        <span class="font-semibold">Addition (+):</span> Combining numbers.<br>
                        <span class="font-semibold">Subtraction (-):</span> Taking away one number from another.<br>
                        <span class="font-semibold">Multiplication (x):</span> Repeated addition or grouping.<br>
                        <span class="font-semibold">Division (÷):</span> Sharing or splitting into equal parts.<br>
                        <span class="font-semibold">Exponents and Roots:</span> Representing repeated multiplication or inverse operations of raising to a power.<br>
                        <br>
                        <span class="font-bold">Number Properties:</span><br>
                        
                        <span class="font-semibold">Commutative Property:</span> Changing the order of numbers doesn't change the result in addition and multiplication (a + b = b + a, ab = ba).<br>
                        <span class="font-semibold">Associative Property:</span> Changing the grouping of numbers doesn't change the result in addition and multiplication ((a + b) + c = a + (b + c), (ab)c = a(bc)).<br>
                        <span class="font-semibold">Distributive Property:</span> Multiplication distributes over addition/subtraction (a * (b + c) = ab + ac).<br>
                        <span class="font-semibold">Identity Element:</span> Numbers that, when combined with another using a specific operation, don't change the value (0 is the additive identity, 1 is the multiplicative identity).<br>
                        <br>
                        <span class="font-bold">Number Systems:</span><br>
                        
                        <span class="font-semibold">Binary:</span> Base-2 numbering system using 0s and 1s.<br>
                        <span class="font-semibold">Octal:</span> Base-8 numbering system.<br>
                        <span class="font-semibold">Decimal:</span> Base-10 numbering system (our everyday system).<br>
                        <span class="font-semibold">Hexadecimal:</span> Base-16 numbering system using digits 0-9 and letters A-F.<br>
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>