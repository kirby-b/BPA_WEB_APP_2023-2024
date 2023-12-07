<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        History:<br>
                        Economy:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <br>
                        <a href="{{ route('page.century15.america') }}" class="hover:text-purple-300">15th Century</a><br>
                        <br>
                        <a href="{{ route('page.century16.america') }}" class="hover:text-purple-300">16th Century</a><br>
                        <br>
                        <a href="{{ route('page.century17.america') }}" class="hover:text-purple-300">17th Century</a><br>
                        <br>
                        <a href="{{ route('page.century18.america') }}" class="hover:text-purple-300">18th Century</a><br>
                        <br>
                        <a href="{{ route('page.century19.america') }}" class="hover:text-purple-300">19th Century</a><br>
                        <br>
                        <a href="{{ route('page.century20.america') }}" class="hover:text-purple-300">20th Century</a><br>
                        <br>
                        <a href="{{ route('page.century21.america') }}" class="hover:text-purple-300">21th Century</a><br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        Economics<br>
                        Economy Indicators<br>
                        <br>
                        <br>
                        Gross Domestic Product(GDP):<br>
                        A crucial measure that goes beyond a simple economic tally, serving as a comprehensive gauge of a country's well-being. Its components, including consumption, investment, government spending, and net exports, provide insight into the economic activities driving growth. As an economic performance indicator, GDP not only reflects the overall health of an economy but also serves as a tool for policymakers to craft effective strategies. The metric's role extends to assessing standards of living through GDP per capita, facilitating cross-country comparisons, and signaling shifts in the business cycle.<br>
                        <br>
                        Inflation & Deflation:<br>
                        Inflation can be caused by factors such as increased demand, cost-push pressures, or monetary factors.<br>
                        Deflation may result from reduced consumer demand, technological advancements leading to lower production costs, or a decrease in the money supply.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>