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
                        <span class="font-extrabold">Patterns:</span><br>
                        <span class="font-bold">Types of Patterns:</span><br>
                        <span class="font-semibold">Numeric Patterns:</span> These involve sequences of numbers that follow a specific rule. For instance:<br>

                        <span class="font-semibold">Arithmetic Sequence:</span> A sequence where the difference between consecutive terms is constant (e.g., 2, 4, 6, 8...).<br>
                        <span class="font-semibold">Geometric Sequence:</span> A sequence where each term is obtained by multiplying the previous term by a fixed number (e.g., 2, 6, 18, 54...).<br>
                        <span class="font-semibold">Fibonacci Sequence:</span> A sequence where each term is the sum of the two preceding ones (e.g., 1, 1, 2, 3, 5, 8...).<br>
                        <br>
                        <span class="font-semibold">Visual Patterns:</span> These involve shapes, designs, or arrangements that follow a specific visual rule or repetition. For example:<br>

                        <span class="font-semibold">Symmetry:</span> Reflective symmetry, rotational symmetry, or patterns that repeat in specific ways.<br>
                        <span class="font-semibold">Tesselations:</span> Repetitive patterns formed by fitting together shapes without any gaps or overlaps.<br>
                        <span class="font-semibold">Algebraic Patterns:</span> Patterns that involve algebraic expressions or equations, often represented by formulas or rules. For instance:<br>
                        <span class="font-semibold">Quadratic Patterns:</span> Patterns that follow a quadratic equation (e.g., y = x^2).<br>
                        <span class="font-semibold">Linear Patterns:</span> Patterns that follow a linear equation (e.g., y = mx + b).<br>
                        <br>
                        <span class="font-semibold">Importance of Patterns in Math:</span><br>
                        <span class="font-semibold">Problem Solving:</span> Recognizing patterns helps in solving problems by identifying regularities and predicting subsequent elements in a sequence or structure.<br>
                        <span class="font-semibold">Generalization:</span> Understanding patterns allows mathematicians to make generalizations about rules or properties that apply to various situations.<br>
                        <span class="font-semibold">Mathematical Thinking:</span> Analyzing patterns fosters critical thinking and logical reasoning skills.<br>
                        <span class="font-semibold">Real-World Applications:</span> Patterns in math are found in nature, art, architecture, and many other fields. Understanding them helps in understanding and describing natural phenomena or designing structures.<br>
                        <br>
                        <span class="font-semibold">How Patterns Are Explored:</span><br>
                        <span class="font-semibold">Observation:</span> Recognizing patterns often starts with observing sequences, shapes, or data.<br>
                        <span class="font-semibold">Rule Identification:</span> Once a pattern is observed, the goal is to identify the underlying rule or relationship that governs the sequence.<br>
                        <span class="font-semibold">Generalization:</span> Based on identified rules, mathematicians generalize to predict future terms or describe the pattern's behavior.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>