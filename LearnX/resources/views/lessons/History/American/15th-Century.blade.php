<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        History:<br>
                        American History:<br>
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
                        15th Century:<br><!--bold-->
                        <br>
                        1492: Christopher Columbus makes his first voyage to the Americas.<br>
                        1492: Columbus reaches the islands of the Bahamas.<br>
                        1492: The Columbian Exchange begins.<br>
                        1493: Columbus's second voyage to the Americas.<br>
                        1498: Columbus explores the coast of South America during his third voyage.<br>
                        1498: Vasco da Gama reaches India, establishing a sea route from Europe.<br>
                        1499-1502: Amerigo Vespucci explores the coast of South America.<br>
                        1500: Pedro Álvares Cabral claims Brazil for Portugal.<br>
                        1502: Columbus makes his fourth and final voyage to the Americas.<br>
                        1507: Martin Waldseemüller names the New World "America."<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>