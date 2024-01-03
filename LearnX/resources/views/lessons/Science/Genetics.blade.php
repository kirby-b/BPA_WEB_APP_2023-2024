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
                        <span class="font-bold">Genetics:</span><br>
                        <span class="font-semibold">Genes and DNA:</span> Genes are segments of DNA that contain instructions for building proteins, which are essential for the structure and function of cells. DNA, or deoxyribonucleic acid, is the molecule that carries genetic information in all living organisms.<br>
                        <br>
                        <span class="font-semibold">Inheritance:</span> Genetics investigates how traits are inherited from parents to offspring. Traits can be influenced by a single gene (simple traits) or multiple genes and environmental factors (complex traits).<br>
                        <br>
                        <span class="font-semibold">Genetic Variation:</span> Genetic variation refers to the differences in genes among individuals of the same species. This variation is responsible for the diversity observed in populations and contributes to differences in traits.<br>
                        <br>
                        <span class="font-semibold">Mendelian Genetics:</span> Gregor Mendel, often considered the father of genetics, discovered the basic principles of inheritance through his work with pea plants. His laws, such as the law of segregation and the law of independent assortment, laid the foundation for understanding how traits are passed down through generations.<br>
                        <br>
                        <span class="font-semibold">Genetic Disorders:</span> Genetics also examines inherited disorders caused by mutations or alterations in genes. These disorders can be inherited in different ways, such as autosomal dominant, autosomal recessive, or sex-linked inheritance.<br>
                        <br>
                        <span class="font-semibold">Genetic Engineering and Biotechnology:</span> Genetic technologies allow scientists to manipulate and modify genes for various purposes, including creating genetically modified organisms (GMOs), gene therapy for treating genetic diseases, and producing pharmaceuticals.<br>
                        <br>
                        <span class="font-semibold">Population Genetics:</span> This field studies the distribution of genetic variation within populations and how factors like natural selection, genetic drift, migration, and mutation shape the genetic makeup of populations over time.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>