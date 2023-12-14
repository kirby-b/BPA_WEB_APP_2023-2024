<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-black">History:</span><br>
                        <span class="font-bold">Economy:</span><br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.basic') }}" class="hover:text-purple-300">Basic</a><br>
                        <br>
                        <a href="{{ route('page.typesOfEcon') }}" class="hover:text-purple-300">Types of Economy</a><br>
                        <br>
                        <a href="{{ route('page.econIndicators') }}" class="hover:text-purple-300">Economy Indicators</a><br>
                        <br>
                        <a href="{{ route('page.laborMarket') }}" class="hover:text-purple-300">Labor Market</a><br>
                        <br>
                        <a href="{{ route('page.roleOfGov') }}" class="hover:text-purple-300">Role of the Government</a><br>
                        <br>
                        <a href="{{ route('page.internatTrade') }}" class="hover:text-purple-300">International Trade</a><br>
                        <br>
                        <a href="{{ route('page.personalFinance') }}" class="hover:text-purple-300">Personal Finace</a><br>
                        <br>
                        <a href="{{ route('page.marketStructures') }}" class="hover:text-purple-300">Market Structures</a><br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        Economics<br>
                        Labor Market<br>
                        <br>
                        <br>
                        Unemployment:<br>
                        Frictional Unemployment<br>
                        Structural Unemployment<br>
                        Cyclical Unemployment<br>
                        Full Employment<br>
                        In a healthy economy, some level of unemployment is considered natural and unavoidable. This level is referred to as the natural rate of unemployment. Full employment occurs when the economy is operating at the natural rate of unemployment, and all available resources, including labor, are being efficiently utilized.<br>
                        <br>
                        Wages:<br>
                        Hourly Wages<br>
                        Salary<br>
                        Piece-rate<br>
                        Minimum Wage<br>
                        Living Wage<br>
                        Wages play a crucial role in labor markets, economic inequality, and overall economic well-being.<br>
                        <br>
                        Productivity:<br>
                        Factors Influencing Productivity<br>
                        Labor Productivity<br>
                        Total Factor Productivity(TFP)<br>
                        Productivity and Wages<br>
                        Productivity growth is a key driver of overall economic growth. When productivity increases, more output can be produced with the same level of input, leading to increased economic output.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>