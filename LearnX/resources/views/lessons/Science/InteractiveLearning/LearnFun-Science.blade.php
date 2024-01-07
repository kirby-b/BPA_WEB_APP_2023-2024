<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">Science:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.writeout.science') }}" class="hover:text-purple-300">Write it Out</a><br>
                        <br>
                        <a href="{{ route('page.learnfun.science') }}" class="hover:text-purple-300">Learning Fun</a><br>
                        <br>
                        <a href="{{ route('page.flashcards.science') }}" class="hover:text-purple-300">Flashcards</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">Science:</span><br>
                            <span class="font-extrabold">Learning Fun:</span>
                        </div>
                        <form>
                            <span class="font-bold">Animal Science:</span>
                            <br>
                            <p>What is the primary function of the respiratory system in animals? </p>
                            <input type="radio" id="anresp1" name="question1" value="anresp1">
                            <label for="anresp1">A. Transportation of nutrients</label><br>
                            <input type="radio" id="anresp2" name="question1" value="anresp2">
                            <label for="anresp2">B. Regulation of body temperature</label><br>
                            <input type="radio" id="anresp3" name="question1" value="anresp3">
                            <label for="anresp3">C. Exchange of gases</label><!--Correct-->
                            <input type="radio" id="anresp4" name="question1" value="anresp4">
                            <label for="anresp4">D. Maintenance of water balance</label>
                            <br>
                            <p>In animal breeding, which term describes the process of mating individuals that possess different but complementary genetic traits to produce offspring with the best qualities of both parents?</p>
                            <input type="radio" id="breed1" name="question2" value="breed1">
                            <label for="breed1">A. Inbreeding</label><br>
                            <input type="radio" id="breed2" name="question2" value="breed2">
                            <label for="breed2">B. Outbreeding</label><br>
                            <input type="radio" id="breed3" name="question2" value="breed3">
                            <label for="breed3">C. Hybridization</label><!--Correct-->
                            <input type="radio" id="breed4" name="question2" value="breed4">
                            <label for="breed4">D. Selective breeding</label>
                            <br>
                            <p>What term describes the behavior exhibited by animals that involves establishing and defending a territory, often for mating, feeding, or rearing offspring?</p>
                            <input type="radio" id="behave1" name="question3" value="behave1">
                            <label for="behave1">A. Hibernation</label><br>
                            <input type="radio" id="behave2" name="question3" value="behave2">
                            <label for="behave2">B. Migration</label><br>
                            <input type="radio" id="behave3" name="question3" value="behave3">
                            <label for="behave3">C. Agonistic behavior</label>
                            <input type="radio" id="behave4" name="question3" value="behave4">
                            <label for="behave4">D. Territoriality</label><!--Correct-->
                            <br>
                            <p>Which nutrient is primarily responsible for providing a readily available source of energy for animals?</p>
                            <input type="radio" id="feed1" name="question4" value="feed1">
                            <label for="feed1">A. Protein</label><br>
                            <input type="radio" id="feed2" name="question4" value="feed2">
                            <label for="feed2">B. Carbohydrates</label><br><!--Correct-->
                            <input type="radio" id="feed3" name="question4" value="feed3">
                            <label for="feed3">C. Vitamins</label>
                            <input type="radio" id="feed4" name="question4" value="feed4">
                            <label for="feed4">D. Minerals</label>
                            <br>
                            <p>Which of the following is a common parasite that causes itching and irritation in animals, often resulting in skin inflammation and hair loss?</p>
                            <input type="radio" id="vet1" name="question5" value="vet1">
                            <label for="vet1">A. Roundworm</label><br>
                            <input type="radio" id="vet2" name="question5" value="vet2">
                            <label for="vet2">B. Flea</label><br><!--Correct-->
                            <input type="radio" id="vet3" name="question5" value="vet3">
                            <label for="vet3">C. Tapeworm</label>
                            <input type="radio" id="vet4" name="question5" value="vet4">
                            <label for="vet4">D. Tick</label>
                            <br>
                            <p>Which branch of zoology focuses on the study of insects?</p>
                            <input type="radio" id="zoo1" name="question6" value="zoo1">
                            <label for="zoo1">A. Herpetology</label><br>
                            <input type="radio" id="zoo2" name="question6" value="zoo2">
                            <label for="zoo2">B. Entomology</label><br><!--Correct-->
                            <input type="radio" id="zoo3" name="question6" value="zoo3">
                            <label for="zoo3">C. Ornithology</label>
                            <input type="radio" id="zoo4" name="question6" value="zoo4">
                            <label for="zoo4">D. Ichthyology</label>
                            <br>
                            <p>Which principle advocates for providing animals with environments that allow them to express their natural behaviors, promoting their mental and physical well-being?</p>
                            <input type="radio" id="ethic1" name="question7" value="ethic1">
                            <label for="ethic1">A. Utilitarianism</label><br>
                            <input type="radio" id="ethic2" name="question7" value="ethic2">
                            <label for="ethic2">B. Anthropocentrism</label><br>
                            <input type="radio" id="ethic3" name="question7" value="ethic3">
                            <label for="ethic3">C. Speciesism</label>
                            <input type="radio" id="ethic4" name="question7" value="ethic4">
                            <label for="ethic4">D. Five Freedoms</label><!--Correct-->
                            <p>Which hormone is primarily responsible for triggering ovulation in female mammals?</p>
                            <input type="radio" id="reproduct1" name="question8" value="reproduct1">
                            <label for="reproduct1">A. Estrogen</label><br>
                            <input type="radio" id="reproduct2" name="question8" value="reproduct2">
                            <label for="reproduct2">B. Progesterone</label><br>
                            <input type="radio" id="reproduct3" name="question8" value="reproduct3">
                            <label for="reproduct3">C. Follicle-stimulating hormone (FSH)</label>
                            <input type="radio" id="reproduct4" name="question8" value="reproduct4">
                            <label for="reproduct4">D. Luteinizing hormone (LH)</label><!--Correct-->
                            <br>
                            <p>Which conservation approach involves restoring or creating habitats to support endangered species outside their natural range?</p>
                            <input type="radio" id="conserve1" name="question9" value="conserve1">
                            <label for="conserve1">A. In-situ conservation</label><br>
                            <input type="radio" id="conserve2" name="question9" value="conserve2">
                            <label for="conserve2">B. Ex-situ conservation</label><br>
                            <input type="radio" id="conserve3" name="question9" value="conserve3">
                            <label for="conserve3">C. Rewilding</label><!--Correct-->
                            <input type="radio" id="conserve4" name="question9" value="conserve4">
                            <label for="conserve4">D. Habitat fragmentation</label>
                            <br>
                            <p>Which factor plays a crucial role in determining the carrying capacity of grazing land for livestock?</p>
                            <input type="radio" id="livestock1" name="question10" value="livestock1">
                            <label for="livestock1">A. Average annual rainfall</label><br><!--Correct-->
                            <input type="radio" id="livestock2" name="question10" value="livestock2">
                            <label for="livestock2">B. Soil pH levels</label><br>
                            <input type="radio" id="livestock3" name="question10" value="livestock3">
                            <label for="livestock3">C. Altitude of the grazing land</label>
                            <input type="radio" id="livestock4" name="question10" value="livestock4">
                            <label for="livestock4">D. Types of grass species</label>
                            <br>
                            <span class="font-bold">Biology:</span>
                            <br>
                            <p>Which organelle is responsible for the production of ATP (adenosine triphosphate) in eukaryotic cells?</p>
                            <input type="radio" id="cellbio1" name="question11" value="cellbio1">
                            <label for="cellbio1">A. Golgi apparatus</label><br>
                            <input type="radio" id="cellbio2" name="question11" value="cellbio2">
                            <label for="cellbio2">B. Endoplasmic reticulum</label><br>
                            <input type="radio" id="cellbio3" name="question11" value="cellbio3">
                            <label for="cellbio3">C. Mitochondria</label><!--Correct-->
                            <input type="radio" id="cellbio4" name="question11" value="cellbio4">
                            <label for="cellbio4">D. Lysosomes</label>
                            <br>
                            <p>What genetic disorder is caused by the presence of an extra chromosome 21, leading to characteristic physical features and intellectual disabilities?</p>
                            <input type="radio" id="genes1" name="question12" value="genes1">
                            <label for="genes1">A. Turner syndrome</label><br>
                            <input type="radio" id="genes2" name="question12" value="genes2">
                            <label for="genes2">B. Klinefelter syndrome</label><br>
                            <input type="radio" id="genes3" name="question12" value="genes3">
                            <label for="genes3">C. Down syndrome</label><!--Correct-->
                            <input type="radio" id="genes4" name="question12" value="genes4">
                            <label for="genes4">D. Edwards syndrome</label>
                            <br>
                            <p>Evolutionary Biology</p>
                            <input type="radio" id="evolution1" name="question13" value="evolution1">
                            <label for="evolution1">A. ans1</label><br>
                            <input type="radio" id="evolution2" name="question13" value="evolution2">
                            <label for="evolution2">B. ans2</label><br>
                            <input type="radio" id="evolution3" name="question13" value="evolution3">
                            <label for="evolution3">C. ans3</label>
                            <input type="radio" id="evolution4" name="question13" value="evolution4">
                            <label for="evolution4">D. ans4</label>
                            <br>
                            <p>Ecology</p>
                            <input type="radio" id="ecology1" name="question14" value="ecology1">
                            <label for="ecology1">A. ans1</label><br>
                            <input type="radio" id="ecology2" name="question14" value="ecology2">
                            <label for="ecology2">B. ans2</label><br>
                            <input type="radio" id="ecology3" name="question14" value="ecology3">
                            <label for="ecology3">C. ans3</label>
                            <input type="radio" id="ecology4" name="question14" value="ecology4">
                            <label for="ecology4">D. ans4</label>
                            <br>
                            <p>Physiology</p>
                            <input type="radio" id="physio1" name="question15" value="physio1">
                            <label for="physio1">A. ans1</label><br>
                            <input type="radio" id="physio2" name="question15" value="physio2">
                            <label for="physio2">B. ans2</label><br>
                            <input type="radio" id="physio3" name="question15" value="physio3">
                            <label for="physio3">C. ans3</label>
                            <input type="radio" id="physio4" name="question15" value="physio4">
                            <label for="physio4">D. ans4</label>
                            <br>
                            <p>Botany</p>
                            <input type="radio" id="botany1" name="question16" value="botany1">
                            <label for="botany1">A. ans1</label><br>
                            <input type="radio" id="botany2" name="question16" value="botany2">
                            <label for="botany2">B. ans2</label><br>
                            <input type="radio" id="botany3" name="question16" value="botany3">
                            <label for="botany3">C. ans3</label>
                            <input type="radio" id="botany4" name="question16" value="botany4">
                            <label for="botany4">D. ans4</label>
                            <br>
                            <p>Biotechnology</p>
                            <input type="radio" id="biotech1" name="question17" value="biotech1">
                            <label for="biotech1">A. ans1</label><br>
                            <input type="radio" id="biotech2" name="question17" value="biotech2">
                            <label for="biotech2">B. ans2</label><br>
                            <input type="radio" id="biotech3" name="question17" value="biotech3">
                            <label for="biotech3">C. ans3</label>
                            <input type="radio" id="biotech4" name="question17" value="biotech4">
                            <label for="biotech4">D. ans4</label>
                            <br>
                            <p>Microbiology</p>
                            <input type="radio" id="microbio1" name="question18" value="microbio1">
                            <label for="microbio1">A. ans1</label><br>
                            <input type="radio" id="microbio2" name="question18" value="microbio2">
                            <label for="microbio2">B. ans2</label><br>
                            <input type="radio" id="microbio3" name="question18" value="microbio3">
                            <label for="microbio3">C. ans3</label>
                            <input type="radio" id="microbio4" name="question18" value="microbio4">
                            <label for="microbio4">D. ans4</label>
                            <br>
                            <p>Molecular Biology</p>
                            <input type="radio" id="moleculebio1" name="question19" value="moleculebio1">
                            <label for="moleculebio1">A. ans1</label><br>
                            <input type="radio" id="moleculebio2" name="question19" value="moleculebio2">
                            <label for="moleculebio2">B. ans2</label><br>
                            <input type="radio" id="moleculebio3" name="question19" value="moleculebio3">
                            <label for="moleculebio3">C. ans3</label>
                            <input type="radio" id="moleculebio4" name="question19" value="moleculebio4">
                            <label for="moleculebio4">D. ans4</label>
                            <br>
                            <p>Neurobiology</p>
                            <input type="radio" id="neurobio1" name="question20" value="neurobio1">
                            <label for="neurobio1">A. ans1</label><br>
                            <input type="radio" id="neurobio2" name="question20" value="neurobio2">
                            <label for="neurobio2">B. ans2</label><br>
                            <input type="radio" id="neurobio3" name="question20" value="neurobio3">
                            <label for="neurobio3">C. ans3</label>
                            <input type="radio" id="neurobio4" name="question20" value="neurobio4">
                            <label for="neurobio4">D. ans4</label>
                            <br>
                            <span class="font-bold">Chemistry:</span>
                            <br>
                            <p>Matter</p>
                            <input type="radio" id="matter1" name="question21" value="matter1">
                            <label for="matter1">A. ans1</label><br>
                            <input type="radio" id="matter2" name="question21" value="matter2">
                            <label for="matter2">B. ans2</label><br>
                            <input type="radio" id="matter3" name="question21" value="matter3">
                            <label for="matter3">C. ans3</label>
                            <input type="radio" id="matter4" name="question21" value="matter4">
                            <label for="matter4">D. ans4</label>
                            <br>
                            <p>Elements and Compounds</p>
                            <input type="radio" id="elements1" name="question22" value="elements1">
                            <label for="elements1">A. ans1</label><br>
                            <input type="radio" id="elements2" name="question22" value="elements2">
                            <label for="elements2">B. ans2</label><br>
                            <input type="radio" id="elements3" name="question22" value="elements3">
                            <label for="elements3">C. ans3</label>
                            <input type="radio" id="elements4" name="question22" value="elements4">
                            <label for="elements4">D. ans4</label>
                            <br>
                            <p>Atoms and Molecules</p>
                            <input type="radio" id="atoms1" name="question23" value="atoms1">
                            <label for="atoms1">A. ans1</label><br>
                            <input type="radio" id="atoms2" name="question23" value="atoms2">
                            <label for="atoms2">B. ans2</label><br>
                            <input type="radio" id="atoms3" name="question23" value="atoms3">
                            <label for="atoms3">C. ans3</label>
                            <input type="radio" id="atoms4" name="question23" value="atoms4">
                            <label for="atoms4">D. ans4</label>
                            <br>
                            <p>Chemical Reactions</p>
                            <input type="radio" id="chemreact1" name="question24" value="chemreact1">
                            <label for="chemreact1">A. ans1</label><br>
                            <input type="radio" id="chemreact2" name="question24" value="chemreact2">
                            <label for="chemreact2">B. ans2</label><br>
                            <input type="radio" id="chemreact3" name="question24" value="chemreact3">
                            <label for="chemreact3">C. ans3</label>
                            <input type="radio" id="chemreact4" name="question24" value="chemreact4">
                            <label for="chemreact4">D. ans4</label>
                            <br>
                            <p>States Of Matter</p>
                            <input type="radio" id="matterstate1" name="question25" value="matterstate1">
                            <label for="matterstate1">A. ans1</label><br>
                            <input type="radio" id="matterstate2" name="question25" value="matterstate2">
                            <label for="matterstate2">B. ans2</label><br>
                            <input type="radio" id="matterstate3" name="question25" value="matterstate3">
                            <label for="matterstate3">C. ans3</label>
                            <input type="radio" id="matterstate4" name="question25" value="matterstate4">
                            <label for="matterstate4">D. ans4</label>
                            <br>
                            <p>Acids and Bases</p>
                            <input type="radio" id="acids1" name="question26" value="acids1">
                            <label for="acids1">A. ans1</label><br>
                            <input type="radio" id="acids2" name="question26" value="acids2">
                            <label for="acids2">B. ans2</label><br>
                            <input type="radio" id="acids3" name="question26" value="acids3">
                            <label for="acids3">C. ans3</label>
                            <input type="radio" id="acids4" name="question26" value="acids4">
                            <label for="acids4">D. ans4</label>
                            <br>
                            <p>Thermodynamics</p>
                            <input type="radio" id="themodynam1" name="question27" value="themodynam1">
                            <label for="themodynam1">A. ans1</label><br>
                            <input type="radio" id="themodynam2" name="question27" value="themodynam2">
                            <label for="themodynam2">B. ans2</label><br>
                            <input type="radio" id="themodynam3" name="question27" value="themodynam3">
                            <label for="themodynam3">C. ans3</label>
                            <input type="radio" id="themodynam4" name="question27" value="themodynam4">
                            <label for="themodynam4">D. ans4</label>
                            <br>
                            <p>Analytical Chemistry</p>
                            <input type="radio" id="chemanalyt1" name="question28" value="chemanalyt1">
                            <label for="chemanalyt1">A. ans1</label><br>
                            <input type="radio" id="chemanalyt2" name="question28" value="chemanalyt2">
                            <label for="chemanalyt2">B. ans2</label><br>
                            <input type="radio" id="chemanalyt3" name="question28" value="chemanalyt3">
                            <label for="chemanalyt3">C. ans3</label>
                            <input type="radio" id="chemanalyt4" name="question28" value="chemanalyt4">
                            <label for="chemanalyt4">D. ans4</label>
                            <br>
                            <p>Organic Chemistry</p>
                            <input type="radio" id="organic1" name="question29" value="organic1">
                            <label for="organic1">A. ans1</label><br>
                            <input type="radio" id="organic2" name="question29" value="organic2">
                            <label for="organic2">B. ans2</label><br>
                            <input type="radio" id="organic3" name="question29" value="organic3">
                            <label for="organic3">C. ans3</label>
                            <input type="radio" id="organic4" name="question29" value="organic4">
                            <label for="organic4">D. ans4</label>
                            <br>
                            <p>Inorganic Chemistry</p>
                            <input type="radio" id="inorganic1" name="question30" value="inorganic1">
                            <label for="inorganic1">A. ans1</label><br>
                            <input type="radio" id="inorganic2" name="question30" value="inorganic2">
                            <label for="inorganic2">B. ans2</label><br>
                            <input type="radio" id="inorganic3" name="question30" value="inorganic3">
                            <label for="inorganic3">C. ans3</label>
                            <input type="radio" id="inorganic4" name="question30" value="inorganic4">
                            <label for="inorganic4">D. ans4</label>
                        </form>
                        {{-- Put questions here in mutiple choice format --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>