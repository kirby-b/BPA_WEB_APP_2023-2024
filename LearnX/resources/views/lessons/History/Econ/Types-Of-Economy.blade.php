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