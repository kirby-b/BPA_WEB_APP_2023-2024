<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        History:<br>
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
                        <b>Inca Civilization:</b><br>
                        <span class="font-semibold">Location:</span> Andean region of South America, including present-day Peru, Ecuador, Bolivia, and parts of Chile and Colombia.<br>
                        Notable Achievements: Advanced engineering (Machu Picchu), well-organized governance, agriculture, and extensive road networks.<br>
                        <br>
                        <b>Maya Civilization:</b><br>
                        <span class="font-semibold">Location</span>: Mesoamerica, including parts of present-day Mexico, Guatemala, Belize, Honduras, and El Salvador.<br>
                        Notable Achievements: Excellence in astronomy, mathematics, and hieroglyphic writing. Impressive pyramids, complex social and religious structure.<br>
                        <br>
                        <b>Aztec Civilization:</b><br>
                        <span class="font-semibold">Location:</span> Centered in the Valley of Mexico, with the capital city, Tenochtitlan, located on an island in Lake Texcoco(present-day Mexico City)<br>
                        Notable Achievements: Advanced agricultural practices (chinampas), complex social hierarchy, and a powerful military.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>