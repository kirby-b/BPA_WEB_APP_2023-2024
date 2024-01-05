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
                        Education Reform:<br>
                        <br>
                        Digital Learning and Technology Integration - Exploring the integration of technology in education and the impact of technology on teaching methods.<br>
                        <br>
                        Equitable Access to Education - Addressing disparities in educational access, resources, and opportunities, and advocating for policies that promote equity in education.<br>
                        <br>
                        Curriculum Development and Modernization - Evaluating and updating curricula to reflect contemporary knowledge, skills, and global perspectives.<br>
                        <br>
                        Teacher Training and Professional Development - Enhancing teacher training programs, providing ongoing professional development, and supporting teachers in adapting to new educational approaches.<br>
                        <br>
                        Standardized Testing and Assessment - Examining the role of standardized testing in education, its impact on students and teachers, and exploring alternative methods of assessment.<br>
                        <br>
                        Inclusive Education - Promoting inclusive practices that cater to diverse learning needs, including those of students with disabilities, and fostering a supportive learning environment for all.<br>
                        <br>
                        Early Childhood Education - Emphasizing the importance of early childhood education, exploring effective preschool programs, and considering the impact of early learning experiences on later academic success.<br>
                        <br>
                        Education Funding and Resource Allocation - Analyzing funding models for education, addressing disparities in resource allocation, and advocating for sufficient and equitable funding for schools.<br>
                        <br>
                        School Safety and Mental Health Support - Addressing issues related to school safety, including bullying and violence, and providing mental health resources and support for students.<br>
                        <br>
                        Parental and Community Involvement - Promoting collaboration between schools, parents, and communities to create a supportive educational ecosystem and enhance student success.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>