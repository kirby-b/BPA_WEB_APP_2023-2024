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
                            <b>Learning Fun:</b>
                        </div>
                        <form>
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
                            <input type="radio" id="livestock1" name="question1" value="livestock1">
                            <label for="livestock1">A. Average annual rainfall</label><br><!--Correct-->
                            <input type="radio" id="livestock2" name="question1" value="livestock2">
                            <label for="livestock2">B. Soil pH levels</label><br>
                            <input type="radio" id="livestock3" name="question1" value="livestock3">
                            <label for="livestock3">C. Altitude of the grazing land</label>
                            <input type="radio" id="livestock4" name="question1" value="livestock4">
                            <label for="livestock4">D. Types of grass species</label>
                        </form>
                        {{-- Put questions here in mutiple choice format --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>