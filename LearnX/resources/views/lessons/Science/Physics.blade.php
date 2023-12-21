<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        Science:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
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
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <span class="font-black">Science:</span><br>
                        <span class="font-bold">Physics:</span><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>