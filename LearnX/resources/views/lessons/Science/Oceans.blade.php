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
                        <span class="font-semibold">Physical Oceanography:</span> Examines the physical properties of seawater, including temperature, salinity, currents, and the interaction between the ocean and the atmosphere.<br>
                        <br>
                        <span class="font-semibold">Chemical Oceanography:</span> Investigates the chemical composition of seawater, studying the distribution of elements and compounds and their role in oceanic processes.<br>
                        <br>
                        <span class="font-semibold">Biological Oceanography (Marine Biology):</span> Focuses on the study of marine life, including the diversity, distribution, and behavior of organisms in the ocean ecosystem.<br>
                        <br>
                        <span class="font-semibold">Marine Geology:</span> Explores the geological features of the ocean floor, including the study of underwater topography, seafloor sediments, and the processes shaping the ocean basins.<br>
                        <br>
                        <span class="font-semibold">Ocean Acoustics:</span> Examines the behavior of sound in the ocean, including its propagation, reflection, and refraction. This field is crucial for studying marine life, mapping the seafloor, and communication.<br>
                        <br>
                        <span class="font-semibold">Oceanography Remote Sensing:</span> Uses satellite and remote sensing technologies to collect data about the ocean's surface, including sea surface temperature, ocean color, and sea level.<br>
                        <br>
                        <span class="font-semibold">Paleoceanography:</span> Investigates the history of the oceans by studying sediment cores and other geological records to understand past climate variations and environmental changes.<br>
                        <br>
                        <span class="font-semibold">Marine Ecology:</span> Explores the interactions between organisms and their environment in marine ecosystems, including food webs, biodiversity, and the impact of human activities.<br>
                        <br>
                        <span class="font-semibold">Oceanography and Climate Change:</span> Examines the role of the oceans in climate regulation, the impact of climate change on ocean systems, and the feedback loops between the atmosphere and the ocean.<br>
                        <br>
                        <span class="font-semibold">Marine Biogeochemistry:</span> Studies the cycling of chemical elements and compounds in the ocean, including the processes that influence nutrient availability, carbon cycling, and ecosystem dynamics.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>