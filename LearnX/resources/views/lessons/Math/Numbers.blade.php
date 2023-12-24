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
                        <span class="font-bold">Numbers:</span><br>
                        <h2 class="font-semibold">Types of Numbers:</h2>
                        <ul>
                            <li><span class="underline">Natural Numbers (N):</span> These are the counting numbers (1, 2, 3, 4, ...).</li>
                            <li><span class="underline">Whole Numbers (W):</span> Include zero along with natural numbers (0, 1, 2, 3, ...).</li>
                            <li><span class="underline">Integers (Z):</span> Include positive, negative numbers, and zero (-3, -2, -1, 0, 1, 2, 3, ...).</li>
                            <li><span class="underline">Rational Numbers (Q):</span> Numbers that can be expressed as a fraction of integers (such as 1/2, -3/4, 7, etc.).</li>
                            <li><span class="underline">Irrational Numbers:</span> Numbers that cannot be expressed as a fraction and have non-repeating, non-terminating decimal representations (like π or √2).</li>
                            <li><span class="underline">Real Numbers (R):</span> Include all rational and irrational numbers, filling the number line completely.</li>
                            <li><span class="underline">Complex Numbers (C):</span> Numbers of the form a + bi, where 'a' and 'b' are real numbers and 'i' is the imaginary unit (√(-1)).</li>
                        </ul>

                        <h2 class="font-semibold">Number Operations:</h2>
                        <ul>
                            <li><span class="underline">Addition (+):</span> Combining numbers.</li>
                            <li><span class="underline">Subtraction (-):</span> Taking away one number from another.</li>
                            <li><span class="underline">Multiplication (x):</span> Repeated addition or grouping.</li>
                            <li><span class="underline">Division (÷):</span> Sharing or splitting into equal parts.</li>
                            <li><span class="underline">Exponents and Roots:</span> Representing repeated multiplication or inverse operations of raising to a power.</li>
                        </ul>
                        <h2 class="font-semibold">Number Properties:</h2>
                        <ul>
                            <li><span class="underline">Commutative Property:</span> Changing the order of numbers doesn't change the result in addition and multiplication (a + b = b + a, ab = ba).</li>
                            <li><span class="underline">Associative Property:</span> Changing the grouping of numbers doesn't change the result in addition and multiplication ((a + b) + c = a + (b + c), (ab)c = a(bc)).</li>
                            <li><span class="underline">Distributive Property:</span> Multiplication distributes over addition/subtraction (a * (b + c) = ab + ac).</li>
                            <li><span class="underline">Identity Element:</span> Numbers that, when combined with another using a specific operation, don't change the value (0 is the additive identity, 1 is the multiplicative identity).</li>
                        </ul>
                        <h2 class="font-semibold">Number Systems:</h2>
                        <ul>
                            <li><span class="underline">Binary:</span> Base-2 numbering system using 0s and 1s.</li>
                            <li><span class="underline">Octal:</span> Base-8 numbering system.</li>
                            <li><span class="underline">Decimal:</span> Base-10 numbering system (our everyday system).</li>
                            <li><span class="underline">Hexadecimal:</span> Base-16 numbering system using digits 0-9 and letters A-F.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>