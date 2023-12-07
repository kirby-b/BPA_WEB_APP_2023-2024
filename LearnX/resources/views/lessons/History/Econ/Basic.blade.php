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
                        <a href="{{ route('page.century21.america') }}" class="hover:text-purple-300">21st Century</a><br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        Economics<br>
                        Basic                        
                        <br>
                        <br>
                        Scarcity:<br>
                        Resources are finite, so individuals and societies must make choices about how to allocate them.<br>
                        <br>
                        Choice & Opprotunity Costs:<br>
                        Due to scarcity, individuals and societies are forced to make decisions about how to allocate their limited resources. When making choices, there is an opportunity cost associated with each decision, representing the value of the next best alternative that must be forgone.<br>
                        <br>
                        Supply & Demand:<br>
                        Fundamental forces in a market economy that determine the prices and quantities of goods and services. The interaction between the supply of a good or service and the demand for that good or service establishes an equilibrium price and quantity in the market. This equilibrium reflects the point where the quantity supplied equals the quantity demanded.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>