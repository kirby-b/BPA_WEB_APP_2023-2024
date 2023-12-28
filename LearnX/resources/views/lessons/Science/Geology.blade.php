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
                        <span class="underline">Physical Geology:</span> This branch examines the Earth's materials, including minerals and rocks, and studies the processes that form and modify the Earth's surface, such as plate tectonics, erosion, and deposition.<br>

                        <span class="underline">Mineralogy:</span> Mineralogy focuses on the study of minerals—their properties, compositions, structures, and occurrences in nature. Minerals are the building blocks of rocks and play a crucial role in understanding Earth's processes.<br>

                        <span class="underline">Petrology:</span> Petrology studies the origin, composition, and classification of rocks. It delves into how rocks form, the conditions under which they are created, and the processes that transform them over time.<br>

                        <span class="underline">Structural Geology:</span> This field examines the deformation of rocks and the forces that cause them. It involves studying folds, faults, and other structural features to understand the Earth's crustal movements.<br>

                        <span class="underline">Geomorphology:</span> Geomorphologists study the landforms and the processes that shape the Earth's surface, including erosion, weathering, rivers, glaciers, and tectonic activity.<br>

                        <span class="underline">Paleontology:</span> Paleontology is the study of ancient life forms through fossils. It helps in understanding the history of life on Earth and how life has evolved over millions of years.<br>

                        <span class="underline">Sedimentology and Stratigraphy:</span> These disciplines deal with the study of sedimentary rocks, their formation, the processes involved in their deposition, and the interpretation of rock layers (strata) to understand Earth's history.<br>

                        <span class="underline">Geological Time Scale:</span> Geologists use various dating techniques to establish the geological time scale, which helps in understanding the sequence of events and the relative ages of rocks and geological formations.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>