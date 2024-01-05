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
                        Civic Engagment & Participation:<br>
                        <br>
                        Active Involvement - Civic engagement entails the active participation of individuals in their communities and society at large.<br>
                        <br>
                        Voting - Voting is a fundamental form of civic participation. It allows individuals to have a direct say in the selection of leaders and the decision-making processes of their communities.<br>
                        <br>
                        Community Involvement - Civic engagement extends beyond voting to include participation in local community activities, events, and organizations.<br>
                        <br>
                        Advocacy and Activism - Engaging in advocacy and activism involves speaking out on issues of importance, raising awareness, and working towards social or political change.<br>
                        <br>
                        Civil Discourse - Civic engagement emphasizes the importance of civil discourse—respectful and constructive conversation about societal issues.<br>
                        <br>
                        Civic Education - Understanding the functioning of government, political processes, and social structures is crucial for effective civic engagement.<br>
                        <br>
                        Media Literacy - Being able to critically evaluate information from various sources is essential.<br>
                        <br>
                        Youth Engagement - Encouraging young people to participate in civic activities is vital for the future of democratic societies.<br>
                        <br>
                        Inclusivity - Civic engagement should be inclusive, ensuring that all individuals, regardless of background or identity, have equal opportunities to participate in civic activities.<br>
                        <br>
                        Global Citizenship - Recognizing the interconnectedness of the world, global citizenship involves engaging in issues beyond one's immediate community or nation.





                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>