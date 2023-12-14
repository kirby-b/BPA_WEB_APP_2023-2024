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
                        Types Of Goverment<br>
                        <br>
                        <br>
                        Market:<br>
                        In a market economy, economic decisions are decentralized and driven by the interactions of individuals and businesses in the marketplace. Resources and means of production are predominantly owned by private individuals or entities. Competition among businesses is a key feature, influencing prices, quality, and innovation.<br>
                        Examples include the United States, most Western European countries, and many others have market-oriented economies.<br>
                        <br>
                        Command Economy:<br>
                        In a command economy, the central government or a central planning authority makes key economic decisions, including what goods and services to produce, how much to produce, and how resources are allocated. Individual consumers and businesses have limited freedom to make economic decisions, as most aspects of the economy are controlled centrally.<br>
                        Examples include the former Soviet Union and present-day North Korea.<br>
                        <br>
                        Mixed Economy:<br>
                        A mixed economy combines features of both command and market economies, blending government intervention with individual and business decision-making. The government may regulate certain industries, provide public goods and services, and implement social policies. There is a mix of private and public ownership of resources and businesses.<br>
                        Many modern economies, including the United States, Canada, and several European countries, have mixed economies.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>