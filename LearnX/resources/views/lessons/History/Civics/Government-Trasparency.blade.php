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
                        Government Tranparency:<br>
                        <br>
                        Open Data Initiatives - Evaluating the implementation and impact of open data policies in making government information freely available to the public.<br>
                        <br>
                        Freedom of Information Acts (FOIA) - Analyzing the effectiveness and limitations of FOIA laws in granting individuals the right to access government records.<br>
                        <br>
                        Whistleblower Protection - Examining the importance of whistleblower protection laws in encouraging individuals to disclose information about government misconduct.<br>
                        <br>
                        Government Budget Transparency - Assessing the transparency of government budget processes, including the presentation of financial information to the public.<br>
                        <br>
                        Transparency in Public Procurement - Investigating the transparency of government procurement processes to prevent corruption and promote fair competition among suppliers.<br>
                        <br>
                        Disclosure of Political Contributions - Analyzing laws and mechanisms that require the disclosure of political campaign contributions and spending.<br>
                        <br>
                        Transparency in Legislative Processes - Evaluating the openness and accessibility of legislative proceedings, including debates, committee meetings, and decision-making processes.<br>
                        <br>
                        Government Performance Metrics - Exploring the use of performance metrics and indicators in assessing government programs, services, and overall efficiency.<br>
                        <br>
                        Public Access to Government Meetings - Assessing laws and practices that ensure public access to government meetings, fostering openness in decision-making processes.<br>
                        <br>
                        Citizen Engagement Platforms - Discussing the use of technology to create platforms for citizen engagement, such as online portals for feedback, consultations, and monitoring government actions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>