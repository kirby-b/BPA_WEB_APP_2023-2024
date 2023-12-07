<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <div class="font-Preahvihear text-center items-center text-2xl">
                        <b>Economy:</b>
                    </div>
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
                        <!--Link all-->
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>