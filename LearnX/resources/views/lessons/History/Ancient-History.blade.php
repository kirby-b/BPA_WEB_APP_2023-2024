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
                        <a href="{{ route('page.holidays') }}" class="hover:text-purple-300">Holidays Around the World</a>
                        <br>
                        <a href="{{ route('page.contenents.oceans') }}" class="hover:text-purple-300">Contenents/Oceans</a>
                        <br>
                        <a href="{{ route('page.states') }}" class="hover:text-purple-300">States in the U.S.</a>
                        <br>
                        <a href="{{ route('page.branches.of.gov') }}" class="hover:text-purple-300">Branches of the U.S. Government</a>
                        <br>
                        <a href="{{ route('page.ancient.history') }}" class="hover:text-purple-300">Ancient History</a>
                        <br>
                        <a href="{{ route('page.american.history') }}" class="hover:text-purple-300">American History</a>
                        <br>
                        <a href="{{ route('page.world.history') }}" class="hover:text-purple-300">World History</a>
                        <br>
                        <a href="{{ route('page.economy') }}" class="hover:text-purple-300">Economics</a>
                        <br>
                        <a href="{{ route('page.civics') }}" class="hover:text-purple-300">Civics</a>
                        <br>
                        <a href="{{ route('page.politics') }}" class="hover:text-purple-300">Politics</a>
                        <br>
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