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
                        Civic Infrastructure & Urban Planning:<br>
                        <br>
                        Smart Cities and Technology Integration - Exploring the integration of technology to enhance urban efficiency, sustainability, and the quality of life for residents.<br>
                        <br>
                        Transit-Oriented Development - Focusing on urban planning strategies that prioritize the development of public transportation systems and create walkable, mixed-use communities around transit hubs.<br>
                        <br>
                        Sustainable Urban Design - Examining strategies for designing and constructing environmentally friendly and resource-efficient urban spaces.<br>
                        <br>
                        Inclusive and Equitable Planning - Addressing issues related to social equity in urban planning.<br>
                        <br>
                        Resilient Cities - Developing strategies to enhance urban resilience, considering the impact of climate change, natural disasters, and other shocks and stresses on city infrastructure.<br>
                        <br>
                        Mixed-Use Development - Exploring the benefits and challenges of mixed-use developments that combine residential, commercial, and recreational spaces to create vibrant and inclusive urban environments.<br>
                        <br>
                        Public Space Design - Analyzing the design and management of public spaces, including parks, plazas, and waterfronts, to enhance community well-being and social interaction.<br>
                        <br>
                        Transportation Planning and Mobility - Addressing challenges related to traffic congestion, sustainable transportation options, and the integration of new mobility solutions, such as bike-sharing and electric scooters.<br>
                        <br>
                        Urban Regeneration and Revitalization - Examining strategies for revitalizing and regenerating urban areas, including brownfield redevelopment, adaptive reuse, and efforts to preserve cultural heritage.<br>
                        <br>
                        Community-Driven Planning - Focusing on community engagement and participatory planning processes that involve residents in decision-making, ensuring that urban developments meet the needs and aspirations of the local population.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>