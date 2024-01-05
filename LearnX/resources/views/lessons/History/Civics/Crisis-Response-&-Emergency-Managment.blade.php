<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.history') }}" class="hover:text-purple-300">History:</a><br>
                        <a href="{{ route('page.civics') }}" class="hover:text-purple-300">Civics:</a><br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.voting.rights') }}" class="hover:text-purple-300">Voting Rights and Election Integrity</a><br>
                        <br>
                        <a href="{{ route('page.civics.engagement') }}" class="hover:text-purple-300">Civic Engagement and Participation</a><br>
                        <br>
                        <a href="{{ route('page.governmentTrans') }}" class="hover:text-purple-300">Government Transparency</a><br>
                        <br>
                        <a href="{{ route('page.social.justice') }}" class="hover:text-purple-300">Social Justice and Equity</a><br>
                        <br>
                        <a href="{{ route('page.climate') }}" class="hover:text-purple-300">Climate Change and Environmental Sustainability</a><br>
                        <br>
                        <a href="{{ route('page.education.reform') }}" class="hover:text-purple-300">Education Reform</a><br>
                        <br>
                        <a href="{{ route('page.health.access') }}" class="hover:text-purple-300">Healthcare Access and Policy</a><br>
                        <br>
                        <a href="{{ route('page.tech.privacy') }}" class="hover:text-purple-300">Technology and Privacy</a><br>
                        <br>
                        <a href="{{ route('page.emergency.management') }}" class="hover:text-purple-300">Crisis Response and Emergency Management</a><br>
                        <br>
                        <a href="{{ route('page.civic.urban') }}" class="hover:text-purple-300">Civic Infrastructure and Urban Planning</a>
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