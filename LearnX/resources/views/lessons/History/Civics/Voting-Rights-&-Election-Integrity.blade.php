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
                        Voting Rights & Election Ingegrity:<br>
                        <br>
                        Universal Suffrage - All citizens are able to vote.<br>
                        <br>
                        Voter Registration - Procedures for how to vote.<br>
                        <br>
                        Voter Identification - Requirements for presenting identification when voting.<br>
                        <br>
                        Accessibility - Laws aimed at ensuring that the electoral process is accessible to all citizens, including those with disabilities.<br>
                        <br>
                        Early Voting and Absentee Voting - Laws governing early voting periods and procedures for voting by mail (absentee voting). These measures are designed to provide flexibility for individuals who may be unable to vote in person on Election Day.<br>
                        <br>
                        Voting Machines and Technology - Regulations on the use of voting machines and electronic voting systems, including security measures to protect the integrity of the voting process.<br>
                        <br>
                        Gerrymandering - The manipulation of district boundaries for political advantage, can impact the fairness of elections.<br>
                        <br>
                        Felony Disenfranchisement - Laws determining whether individuals with felony convictions lose their right to vote and under what conditions they may regain that right.<br>
                        <br>
                        Voter Suppression - Laws addressing tactics such as intimidation, misinformation, or restrictions that disproportionately affect certain groups.<br>
                        <br>
                        Campaign Finance Laws - Regulations on political campaign financing to ensure transparency and fairness in the electoral process.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>