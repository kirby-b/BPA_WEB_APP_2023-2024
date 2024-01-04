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
                        <span class="font-bold">Probability and Statistics:</span><br>
                        Probability and statistics are two branches of mathematics that deal with uncertainty, randomness, and data analysis.<br>
                        <br>
                        <span class="font-semibold">Probability:</span> Involves studying the likelihood of events occurring in various situations. It provides a framework to quantify uncertainty. The basic idea is to assign a numerical value between 0 and 1 to the likelihood of an event happening, where 0 indicates impossibility, 1 indicates certainty, and values in between represent degrees of likelihood. For example, the probability of getting heads when flipping a fair coin is 0.5 (or 50%).<br>
                        <br>
                        <span class="font-semibold">Statistics:</span> Involves collecting, analyzing, interpreting, and presenting data. It helps in making inferences or conclusions about a larger population based on a sample of data. Statistics includes various methods for summarizing data (descriptive statistics) and making predictions or drawing conclusions from data (inferential statistics).<br>
                        Descriptive statistics involve measures like mean, median, mode, variance, and standard deviation, which help in summarizing and describing the main features of a dataset.<br>
                        Inferential statistics uses probability theory to make predictions or draw conclusions about a population based on a sample. This includes techniques like hypothesis testing, regression analysis, confidence intervals, and more.<br>
                        Probability and statistics are used extensively in various fields such as science, economics, social sciences, engineering, and more, to model uncertainty, make predictions, and draw meaningful insights from data.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>