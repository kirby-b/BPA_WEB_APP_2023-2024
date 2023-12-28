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
                        <span class="font-bold">Chemistry:</span><br>
                        <span class="underline">Matter:</span> Everything around us is made up of matter, which comprises atoms and molecules. Chemistry explores the properties of matter and how different substances interact.<br>
                        <br>
                        <span class="underline">Elements and Compounds:</span> Elements are the simplest forms of matter, consisting of one type of atom. They combine to form compounds, which are substances made of two or more elements in fixed proportions.<br>
                        <br>
                        <span class="underline">Atoms and Molecules:</span> Atoms are the basic units of matter. Chemistry studies their structure, behavior, and how they bond together to form molecules. Understanding atomic and molecular interactions helps explain various chemical phenomena.<br>
                        <br>
                        <span class="underline">Chemical Reactions:</span> Chemical reactions involve the transformation of substances into different ones by breaking and forming chemical bonds. Chemistry explains the mechanisms, rates, and energy changes associated with these reactions.<br>
                        <br>
                        <span class="underline">States of Matter:</span> Chemistry explores the different states of matter—solid, liquid, gas, and plasma—and the transitions between them. It studies their properties and how they behave under various conditions.<br>
                        <br>
                        <span class="underline">Acids and Bases:</span> Acids and bases are important chemical substances with distinct properties. Understanding their behavior helps explain phenomena like pH, corrosion, and reactions in living organisms.<br>
                        <br>
                        <span class="underline">Thermodynamics:</span> Focuses on the relationship between heat, energy, and work in chemical reactions and physical processes. It explains the principles governing energy transfer and transformation.<br>
                        <br>
                        <span class="underline">Analytical Chemistry:</span> Involves techniques and methods to analyze and identify the composition of substances, determining their quantities and properties.<br>
                        <br>
                        <span class="underline">Organic and Inorganic Chemistry:</span> Organic chemistry studies carbon-containing compounds, including those found in living organisms, while inorganic chemistry focuses on non-carbon compounds.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>