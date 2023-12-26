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
                        <span class="font-bold">Fractions, Decimals, & Percentages:</span><br>
                        Fractions:
                        Example: 3/4
                        The numerator, 3, represents the number of equal parts being considered.
                        The denominator, 4, represents the total number of equal parts that make up the whole.
                        Addition and Subtraction: To add or subtract fractions, the denominators need to be the same. If they aren't, you'll need to find a common denominator. Once the denominators are the same, you can add or subtract the numerators while keeping the denominator unchanged.
                        Multiplication: To multiply fractions, simply multiply the numerators together to get the new numerator and multiply the denominators together to get the new denominator.
                        Division: To divide one fraction by another, you can multiply the first fraction by the reciprocal (flipped version) of the second fraction.

                        Decimals:
                        Example: 2.55
                        The whole number part is 2.
                        The decimal part is .55.
                        Addition and Subtraction: Align the decimal points and perform addition or subtraction as you would with whole numbers.
                        Multiplication: Multiply the numbers as if they were whole numbers and then adjust the decimal point in the product. The total number of decimal places in the product is the sum of the decimal places in the factors.
                        Division: Perform division as if it were with whole numbers, and then adjust the decimal point in the quotient.

                        Percentages:                   
                        Percentages are a way of expressing a fraction or a ratio as a portion of 100. The term "percent" means "per hundred" or "out of 100." It's denoted by the symbol "%".
                        Example: 68% or 39%
                        Calculations: Percentages are used for calculations involving increases, decreases, discounts, taxes, tips, and interest rates
                        Comparisons: They're useful for comparing quantities relative to a whole. For instance, if there are 80 boys in a class of 200 students, the percentage of boys is 80/200 x 100% = 40%.
                        Conversions: Converting between percentages, fractions, and decimals is common. For example, 25% is equivalent to 25/100 as a fraction and 0.25 as a decimal.
                        Calculating Percentages: To find a percentage of a number, you multiply the number by the percentage written as a decimal. For example, 20% of 150 is 0.20 x 150 = 30.
                        Percentage Increase or Decrease: When a quantity increases or decreases by a certain percentage, you can calculate the new value by adding or subtracting the appropriate percentage. For instance, a 20% increase in 100 is 100 + (0.20 x 100) = 120
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>