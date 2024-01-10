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
                        <span class="font-extrabold">Probability and Statistics:</span><br>
                        <span class="font-bold">Probability:</span><br>
                        <br>
                        <span class="font-semibold">Definition:</span> Probability measures the likelihood of an event occurring and is expressed as a number between 0 and 1, where 0 represents impossibility, and 1 represents certainty.<br>
                        <br>
                        <span class="font-bold">Statistics:</span><br>
                        <br>
                        <span class="font-semibold">Definition:</span> Statistics involves the collection, analysis, interpretation, presentation, and organization of data. It provides methods for drawing conclusions from data.<br>
                        <br>
                        <span class="font-bold">Descriptive Statistics:</span><br>
                        <br>
                        <span class="font-semibold">Purpose:</span> Summarize and describe main features of a dataset.<br>
                        <span class="font-semibold">Examples:</span> Mean, median, mode, range, and standard deviation.<br>
                        <br>
                        <span class="font-bold">Inferential Statistics:</span><br>
                        <br>
                        <span class="font-semibold">Purpose:</span> Make predictions or inferences about a population based on a sample.<br>
                        <span class="font-semibold">Examples:</span> Confidence intervals, hypothesis testing.<br>
                        <br>
                        <span class="font-bold">Probability Distributions:</span><br>
                        <br>
                        <span class="font-semibold">Definition:</span> A function that describes the likelihood of obtaining possible values in a statistical experiment.<br>
                        <br>
                        <span class="font-bold">Normal Distribution:</span><br>
                        <br>
                        <span class="font-semibold">Definition:</span> A symmetric bell-shaped curve that describes the distribution of many naturally occurring phenomena.<br>
                        <br>
                        <span class="font-bold">Central Limit Theorem:</span><br>
                        <br>
                        <span class="font-semibold">Concept:</span> States that, under certain conditions, the distribution of the sum (or average) of a large number of independent, identically distributed random variables approaches a normal distribution.<br>
                        <br>
                        <span class="font-bold">Regression Analysis:</span><br>
                        <br>
                        <span class="font-semibold">Purpose:</span> Examines the relationship between one dependent variable and one or more independent variables.<br>
                        <br>
                        <span class="font-bold">Confidence Intervals:</span><br>
                        <br>
                        <span class="font-semibold">Purpose:</span> Estimate the range in which a population parameter is likely to lie.<br>
                        <br>
                        <span class="font-bold">Hypothesis Testing:</span><br>
                        <br>
                        <span class="font-semibold">Purpose:</span> Evaluate a claim about a population parameter based on sample data.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>