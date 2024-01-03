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
                        <a href="{{ route('page.biology') }}" class="hover:text-purple-300">Biology</a><br>
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
                        <span class="font-bold">Earth:</span><br>
                        <span class="font-semibold">Geology:</span> The study of the Earth's solid materials, structure, composition, and the processes that shapes it. This field examines rocks, minerals, fossils, and the forces, such as plate tectonics, that shape the Earth's surface.<br>
                        <br>
                        <span class="font-semibold">Meteorology:</span> The study of the Earth's atmosphere, weather patterns, and atmospheric phenomena. Meteorologists analyze weather processes, climate patterns, atmospheric circulation, and the factors influencing weather changes.<br>
                        <br>
                        <span class="font-semibold">Oceanography:</span> The study of the Earth's oceans and seas, including their physical and biological properties, movements, currents, marine life, and the interactions between oceans and the atmosphere, land, and life.<br>
                        <br>
                        <span class="font-semibold">Environmental Science:</span> This field examines the interactions between the Earth's various systems and the impact of human activities on the environment. It includes the study of pollution, conservation, ecosystems, and sustainability.<br>
                        <br>
                        <span class="font-semibold">Geophysics:</span> Appling the principles of physics to study the Earth's physical properties, such as its magnetic and gravitational fields, seismic activities, and the internal structure of the planet.<br>
                        <br>
                        <span class="font-semibold">Hydrology:</span> The study of water distribution, movement, and properties on Earth. It involves analyzing the water cycle, groundwater, surface water, and the influence of water on landscapes and ecosystems.<br>
                        <br>
                        <span class="font-semibold">Geomorphology:</span> This field studies the formation and evolution of landforms, such as mountains, valleys, rivers, and glaciers, and the processes that shape the Earth's surface over time.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>