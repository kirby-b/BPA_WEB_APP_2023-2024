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
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>