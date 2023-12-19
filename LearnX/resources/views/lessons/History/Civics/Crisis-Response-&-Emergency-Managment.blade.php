<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        History:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.holidays') }}" class="hover:text-purple-300">Holidays Around the World</a><br>
                        <br>
                        <a href="{{ route('page.contenents.oceans') }}" class="hover:text-purple-300">Contenents/Oceans</a><br>
                        <br>
                        <a href="{{ route('page.states') }}" class="hover:text-purple-300">States in the U.S.</a><br>
                        <br>
                        <a href="{{ route('page.branches.of.gov') }}" class="hover:text-purple-300">Branches of the U.S. Government</a><br>
                        <br>
                        <a href="{{ route('page.ancient.history') }}" class="hover:text-purple-300">Ancient History</a><br>
                        <br>
                        <a href="{{ route('page.american.history') }}" class="hover:text-purple-300">American History</a><br>
                        <br>
                        <a href="{{ route('page.world.history') }}" class="hover:text-purple-300">World History</a><br>
                        <br>
                        <a href="{{ route('page.economy') }}" class="hover:text-purple-300">Economics</a><br>
                        <br>
                        <a href="{{ route('page.civics') }}" class="hover:text-purple-300">Civics</a><br>
                        <br>
                        <a href="{{ route('page.politics') }}" class="hover:text-purple-300">Politics</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        History:<br>
                        Civics:<br>
                        Crisis Response & Emergency Management:<br>
                        <br>
                        Pandemic Preparedness and Response - Examining strategies and plans to address public health emergencies.<br>
                        <br>
                        Natural Disaster Response and Recovery - Analyzing approaches to responding to and recovering from natural disasters.<br>
                        <br>
                        Terrorism Preparedness - Addressing strategies for preventing, responding to, and recovering from terrorist attacks.<br>
                        <br>
                        Critical Infrastructure Protection - Evaluating measures to protect and ensure the resilience of critical infrastructure.<br>
                        <br>
                        Crisis Leadership and Decision-Making - Examining the role of leadership in crisis situations.<br>
                        <br>
                        Community Resilience - Focusing on building community resilience to withstand and recover from various crises.<br>
                        <br>
                        Cybersecurity Incident Response - Addressing strategies for responding to and recovering from cybersecurity incidents.<br>
                        <br>
                        Humanitarian Crisis Management - Exploring approaches to managing humanitarian crises.<br>
                        <br>
                        Climate Change Adaptation and Resilience - Assessing strategies for adapting to and building resilience against the impacts of climate change.<br>
                        <br>
                        Public-Private Partnerships in Crisis Management - Analyzing the role of collaborations between government agencies, private sectors, and non-governmental organizations in crisis response and recovery efforts.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>