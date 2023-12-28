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
                        <span class="font-bold">Physics:</span><br>
                        <span class="underline">Classical Mechanics:</span> Classical mechanics, formulated by Isaac Newton, describes the motion of objects and the forces acting upon them. It includes concepts such as Newton's laws of motion, gravity, and the study of motion in various contexts.<br>
                        <br>
                        <span class="underline">Thermodynamics:</span> Thermodynamics explores the relationship between heat, energy, and work. It includes the laws of thermodynamics, the behavior of gases, phase transitions, and the principles governing heat engines and refrigeration.<br>
                        <br>
                        <span class="underline">Electromagnetism:</span> Electromagnetism studies the interaction between electrically charged particles and magnetic fields. It encompasses Maxwell's equations, which describe how electric and magnetic fields are generated and how they propagate.<br>
                        <br>
                        <span class="underline">Optics:</span> Optics focuses on the behavior of light and its interaction with matter. It covers topics such as reflection, refraction, diffraction, and the behavior of lenses and mirrors.<br>
                        <br>
                        <span class="underline">Quantum Mechanics:</span> Quantum mechanics deals with the behavior of matter and energy on atomic and subatomic scales. It introduces concepts like wave-particle duality, uncertainty principle, and quantum states, revolutionizing our understanding of fundamental particles and their interactions.<br>
                        <br>
                        <span class="underline">Nuclear Physics:</span> Nuclear physics explores the properties and interactions of atomic nuclei, including nuclear reactions, radioactive decay, and the structure of atomic nuclei.<br>
                        <br>
                        <span class="underline">Particle Physics:</span> Particle physics studies the fundamental particles and forces that make up the universe. It investigates particles such as quarks, leptons, bosons, and the interactions governed by fundamental forces like gravity, electromagnetism, weak, and strong nuclear forces.<br>
                        <br>
                        <span class="underline">Astrophysics and Cosmology:</span> Astrophysics examines the properties and phenomena of celestial objects, galaxies, stars, and the universe as a whole. Cosmology focuses on the origin, evolution, and structure of the universe itself.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>