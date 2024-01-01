<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6"><!--Makes it a flex so the page is responsive-->

                <!-- Activity Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <div class="font-Preahvihear text-3xl">
                        <div class="text-center bg-purple-400"><a href="{{ route('page.writeout.hist') }}" class="hover:text-purple-300">Write It Out</a></div>
                        <div class="text-center bg-green-400"><a href="{{ route('page.learnfun.hist') }}" class="hover:text-purple-300">Learning Fun</a></div>
                        <div class="text-center bg-purple-400"><a href="{{ route('page.timeline.hist') }}" class="hover:text-purple-300">Timeline</a></div>
                    </div>
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear text-center text-4xl">
                            <b>History</b>
                        </div>
                        <div class="flex flex-col"> 
                            <!--Route links for related pages-->
                            <div class="font-sans w-50/100 float-right text-xl">
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
                            </div> 
                            <div class="font-sans w-50/100 float-left text-xl">
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
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
