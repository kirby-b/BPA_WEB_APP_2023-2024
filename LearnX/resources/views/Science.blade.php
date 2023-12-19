<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6"><!--Makes it a flex so the page is responsive-->

                <!-- Activity Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <div class="font-Preahvihear text-3xl">
                        <div class="text-center bg-purple-400">Flashcards</div>
                        <div class="text-center bg-green-400">Learning Fun</div>
                        <div class="text-center bg-purple-400">Write it Out</div>
                    </div>
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear text-center text-4xl">
                            <b>SCIENCE</b>
                        </div>
                        <div class="flex flex-col"> 
                            <!--Route links for related pages-->
                            <div class="font-sans w-50/100 float-right">
                                <a href="{{ route('page.earth') }}" class="hover:text-purple-300">Earth</a><br>
                                <br>
                                <a href="{{ route('page.space') }}" class="hover:text-purple-300">Space</a><br>
                                <br>
                                <a href="{{ route('page.life') }}" class="hover:text-purple-300">Life</a><br>
                                <br>
                                <a href="{{ route('page.animals') }}" class="hover:text-purple-300">Animals</a><br>
                                <br>
                                <a href="{{ route('page.oceans') }}" class="hover:text-purple-300">Oceans</a><br>
                                <br>
                            </div> 
                            <div class="font-sans w-50/100 float-left">
                                <a href="{{ route('page.chemistry') }}" class="hover:text-purple-300">Chemistry</a><br>
                                <br>
                                <a href="{{ route('page.physics') }}" class="hover:text-purple-300">Physics</a><br>
                                <br>
                                <a href="{{ route('page.psycho') }}" class="hover:text-purple-300">Psycology</a><br>
                                <br>
                                <a href="{{ route('page.rocks') }}" class="hover:text-purple-300">Geology</a><br>
                                <br>
                                <a href="{{ route('page.genes') }}" class="hover:text-purple-300">Genetics</a><br>
                                <br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>