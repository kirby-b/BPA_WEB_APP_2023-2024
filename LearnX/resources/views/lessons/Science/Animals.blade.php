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
                        <span class="font-bold">Animals:</span><br>
                        <span class="font-semibold">Animal Physiology:</span> Understanding the functions and processes within the bodies of animals, including topics like digestion, circulation, and reproduction.<br>
                        <br>
                        <span class="font-semibold">Genetics in Animal Breeding:</span> Applying principles of genetics to selectively breed animals for desired traits such as increased productivity, disease resistance, or specific characteristics.<br>
                        <br>
                        <span class="font-semibold">Animal Behavior:</span> Investigating how animals behave in different environments and social structures, considering factors like communication, mating rituals, and migration patterns.<br>
                        <br>
                        <span class="font-semibold">Nutrition and Feed Science:</span> Studying the nutritional requirements of animals and developing appropriate feed formulations for optimal health and productivity.<br>
                        <br>
                        <span class="font-semibold">Veterinary Medicine:</span> Diagnosing, treating, and preventing diseases in animals, including both domesticated and wild species.<br>
                        <br>
                        <span class="font-semibold">Zoology:</span> Examining the classification, evolution, and characteristics of animals, encompassing a wide range of species and their interactions with ecosystems.<br>
                        <br>
                        <span class="font-semibold">Animal Welfare and Ethics:</span> Addressing ethical considerations related to the treatment and use of animals, ensuring their well-being in various settings.<br>
                        <br>
                        <span class="font-semibold">Reproductive Physiology:</span> Investigating the reproductive processes of animals, including hormonal regulation, mating behavior, and assisted reproductive technologies.<br>
                        <br>
                        <span class="font-semibold">Wildlife Conservation:</span> Protecting and preserving wild animal species and their habitats to maintain biodiversity and ecological balance.<br>
                        <br>
                        <span class="font-semibold">Livestock Management:</span> Managing the care, breeding, and production of domesticated animals for agriculture, including cattle, poultry, swine, and sheep.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>