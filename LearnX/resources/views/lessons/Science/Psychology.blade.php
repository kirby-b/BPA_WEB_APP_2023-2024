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
                        <span class="font-bold">Psychology:</span><br>
                        <span class="font-semibold">Clinical Psychology:</span> Focuses on understanding, diagnosing, and treating mental health disorders. Clinical psychologists work with individuals to address issues such as depression, anxiety, schizophrenia, and other psychological conditions.<br>
                        <br>
                        <span class="font-semibold">Cognitive Psychology:</span> Explores mental processes such as perception, memory, thinking, problem-solving, language, and decision-making. It investigates how humans acquire, process, store, and use information.<br>
                        <br>
                        <span class="font-semibold">Developmental Psychology:</span> Studies human development across the lifespan, examining physical, cognitive, social, and emotional changes from infancy to old age. It explores how individuals grow, learn, and adapt over time.<br>
                        <br>
                        <span class="font-semibold">Social Psychology:</span> Investigates how individuals' thoughts, feelings, and behaviors are influenced by social interactions, group dynamics, attitudes, conformity, persuasion, and prejudice.<br>
                        <br>
                        <span class="font-semibold">Biological Psychology:</span> Also known as biopsychology or neuroscience, This field explores the biological basis of behavior, studying how the brain, nervous system, hormones, and genetics influence thoughts, emotions, and actions.<br>
                        <br>
                        <span class="font-semibold">Industrial-Organizational Psychology:</span> Applies psychological principles to workplace settings, focusing on topics like employee motivation, leadership, team dynamics, organizational behavior, and human resource management.<br>
                        <br>
                        <span class="font-semibold">Educational Psychology:</span> Studies learning processes, teaching methods, educational interventions, and the psychological factors that influence learning and academic performance.<br>
                        <br>
                        <span class="font-semibold">Forensic Psychology:</span> Applies psychological principles within the legal and criminal justice systems, assessing mental health, evaluating witnesses, profiling criminals, and offering expertise in legal cases.<br>
                        <br>
                        <span class="font-semibold">Behavioral Psychology:</span> Focuses on observable behaviors and the principles of learning, including classical and operant conditioning, reinforcement, and behavior modification.<br>
                        <br>
                        <span class="font-semibold">Health Psychology:</span> Investigates the psychological factors influencing health and illness, including the impact of stress, lifestyle choices, and coping mechanisms on overall well-being.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>