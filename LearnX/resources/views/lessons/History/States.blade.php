<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        History:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.holidays') }}" class="hover:text-purple-300">Holidays Around the World</a><br>
                        <br>
                        <a href="{{ route('page.contenents.oceans') }}" class="hover:text-purple-300">Contenents/Oceans</a><br>
                        <br>
                        <a href="{{ route('page.states') }}" class="hover:text-purple-300">States in the U.S.</a><br>
                        <br>
                        <a href="{{ route('page.branches.of.gov') }}" class="hover:text-purple-300">Branches of the U.S. Government</a><br>
                        <br>
                        <a href="{{ route('page.ancient.history') }}" class="hover:text-purple-300">Ancient History</a><br>
                        <br>
                        <a href="{{ route('page.american.history') }}" class="hover:text-purple-300">American History</a><br>
                        <br>
                        <a href="{{ route('page.world.history') }}" class="hover:text-purple-300">World History</a><br>
                        <br>
                        <a href="{{ route('page.economy') }}" class="hover:text-purple-300">Economics</a><br>
                        <br>
                        <a href="{{ route('page.civics') }}" class="hover:text-purple-300">Civics</a><br>
                        <br>
                        <a href="{{ route('page.politics') }}" class="hover:text-purple-300">Politics</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <div class="font-Preahvihear text-center items-center text-2xl">
                        <b>The 50 US States</b>
                    </div>
                    <div class="flex flex-col md:flex-row"> 
                        <div class="md:w-1/2 text-xl font-sans m-4">
                            Alabama<br>
                            Alaska<br>
                            Arizona<br>
                            Arkansas<br>
                            California<br>
                            Colorado<br>
                            Connecticut<br>
                            Delaware<br>
                            Florida<br>
                            Georgia<br>
                            Hawaii<br>
                            Idaho<br>
                            Illinois<br>
                            Indiana<br>
                            Iowa<br>
                            Kansas<br>
                            Kentucky<br>
                            Louisiana<br>
                            Maine<br>
                            Maryland<br>
                            Massachusetts<br>
                            Michigan<br>
                            Minnesota<br>
                            Mississippi<br>
                            Missouri<br>
                        </div>
                        <div class="md:w-1/2 text-xl font-sans m-4">
                            Montana<br>
                            Nebraska<br>
                            Nevada<br>
                            New Hampshire<br>
                            New Jersey<br>
                            New Mexico<br>
                            New York<br>
                            North Carolina<br>
                            North Dakota<br>
                            Ohio<br>
                            Oklahoma<br>
                            Oregon<br>
                            Pennsylvania<br>
                            Rhode Island<br>
                            South Carolina<br>
                            South Dakota<br>
                            Tennessee<br>
                            Texas<br>
                            Utah<br>
                            Vermont<br>
                            Virginia<br>
                            Washington<br>
                            West Virginia<br>
                            Wisconsin<br>
                            Wyoming<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>