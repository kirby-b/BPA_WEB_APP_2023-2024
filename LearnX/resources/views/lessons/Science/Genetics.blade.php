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
                        <span class="font-semibold">Genomics:</span> The study of entire genomes, including the mapping, sequencing, and analysis of DNA to understand the structure and function of genes.<br>
                        <br>
                        <span class="font-semibold">Molecular Genetics:</span> Investigates the molecular structure and function of genes, focusing on the mechanisms of DNA replication, transcription, and translation.<br>
                        <br>
                        <span class="font-semibold">Population Genetics:</span> Examines the distribution and changes in genetic variation within and between populations, exploring factors like migration, natural selection, and genetic drift.<br>
                        <br>
                        <span class="font-semibold">Epigenetics:</span> Studies heritable changes in gene function that do not involve alterations to the underlying DNA sequence, exploring how environmental factors can influence gene expression.<br>
                        <br>
                        <span class="font-semibold">Human Genetics:</span> Focuses on the study of inherited traits and diseases in humans, including genetic disorders, gene therapy, and the identification of disease-associated genes.<br>
                        <br>
                        <span class="font-semibold">Genetic Engineering:</span> Involves the manipulation of genes to modify organisms for practical purposes, such as the development of genetically modified organisms (GMOs) and gene therapy.<br>
                        <br>
                        <span class="font-semibold">Comparative Genomics:</span> Compares the genomes of different species to identify similarities and differences, providing insights into evolutionary relationships and functional genomics.<br>
                        <br>
                        <span class="font-semibold">Cytogenetics:</span> Examines the structure and function of chromosomes, including the study of chromosomal abnormalities and their association with genetic disorders.<br>
                        <br>
                        <span class="font-semibold">Functional Genomics:</span> Explores the function of genes and their products on a large scale, integrating various omics technologies to understand gene regulation and interactions.<br>
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>