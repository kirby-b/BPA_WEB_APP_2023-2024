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
                        <span class="font-bold">Geology:</span><br>
                        <span class="font-semibold">Petrology:</span> Focuses on the study of rocks, including their classification, origin, and composition. Petrologists examine the processes that lead to the formation of different rock types.<br>
                        <br>
                        <span class="font-semibold">Mineralogy:</span> Examines minerals, their properties, and their distribution on Earth. Mineralogists study the composition, structure, and physical characteristics of minerals.<br>
                        <br>
                        <span class="font-semibold">Stratigraphy:</span> Investigates the layering of rocks and the arrangement of rock units in time. Stratigraphers use principles of relative dating to understand the Earth's history.<br>
                        <br>
                        <span class="font-semibold">Structural Geology:</span> Studies the deformation of rocks and the processes that lead to the formation of geological structures such as folds, faults, and joints.<br>
                        <br>
                        <span class="font-semibold">Sedimentology:</span> Focuses on the study of sediments and sedimentary rocks, including their formation, transport, and deposition. Sedimentologists reconstruct past environments based on sedimentary evidence.<br>
                        <br>
                        <span class="font-semibold">Volcanology:</span> Examines volcanic activity, including the study of volcanoes, lava flows, and volcanic eruptions. Volcanologists analyze the geological processes associated with volcanic events.<br>
                        <br>
                        <span class="font-semibold">Geomorphology:</span> Studies the Earth's landforms and the processes that shape the surface, such as erosion, weathering, and deposition. Geomorphologists investigate the evolution of landscapes.<br>
                        <br>
                        <span class="font-semibold">Hydrogeology:</span> Investigates the distribution and movement of groundwater, as well as the geological processes that influence the availability and quality of water resources.<br>
                        <br>
                        <span class="font-semibold">Geochronology:</span> Involves dating rocks and geological events to establish the timing of Earth's history. Geochronologists use methods like radiometric dating to determine ages.<br>
                        <br>
                        <span class="font-semibold">Tectonics:</span> Explores the movement and interactions of Earth's lithospheric plates. Tectonics includes the study of plate boundaries, earthquakes, and the formation of mountain ranges.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>