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
                        <span class="font-bold">Oceans:</span><br>
                        <span class="font-semibold">Physical Oceanography:</span> The physical properties and processes of the oceans, including currents, waves, tides, and the circulation of seawater. Physical oceanographers study the movement of water masses, the interaction between oceans and the atmosphere, and the impact of these processes on climate and weather patterns.<br>
                        <br>
                        <span class="font-semibold">Chemical Oceanography:</span> Chemical oceanographers investigate the composition of seawater, the distribution of chemical elements and compounds, nutrient cycles, acidity (pH), and the chemical reactions occurring in the ocean. They study how these factors influence marine life and global biogeochemical cycles.<br>
                        <br>
                        <span class="font-semibold">Biological Oceanography:</span> Explores the diverse life forms in the oceans, from microscopic plankton to large marine mammals. Biological oceanographers study marine ecosystems, food webs, biodiversity, behavior, reproduction, and the adaptations of organisms to various ocean conditions.<br>
                        <br>
                        <span class="font-semibold">Geological Oceanography:</span> Examine the ocean floor, including its topography, sediments, and geological formations. They study the processes of plate tectonics, underwater volcanoes, seafloor spreading, and the history of Earth's geology recorded in marine sediments and rocks.<br>
                        <br>
                        <span class="font-semibold">Marine Ecology:</span> The relationships between organisms and their environments in the ocean. They study how factors like temperature, salinity, nutrient availability, and human impacts affect marine ecosystems and biodiversity.<br>
                        <br>
                        <span class="font-semibold">Paleoceanography:</span> Involves studying the history of the oceans, including past climate changes, ocean circulation patterns, and ancient marine life, often using sediment cores and fossil records to understand long-term changes in the oceans.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>