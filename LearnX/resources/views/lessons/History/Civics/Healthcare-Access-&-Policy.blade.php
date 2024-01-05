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
                        Healthcare Access and Policy:<br>
                        <br>
                        Universal Healthcare - Examining models and approaches to achieve universal healthcare coverage, ensuring that all individuals have access to essential healthcare services.<br>
                        <br>
                        Healthcare Disparities - Addressing disparities in healthcare access and outcomes based on factors such as race, ethnicity, socioeconomic status, and geographic location.<br>
                        <br>
                        Health Insurance Reform - Analyzing and proposing reforms to health insurance systems to enhance coverage, affordability, and the overall efficiency of healthcare delivery.<br>
                        <br>
                        Mental Health Parity - Advocating for policies that ensure mental health services receive equal consideration in terms of coverage, accessibility, and reimbursement compared to physical health services.<br>
                        <br>
                        Telemedicine and Digital Health - Exploring the role of telemedicine and digital health technologies in expanding healthcare access, especially in remote or underserved areas.<br>
                        <br>
                        Primary Care and Preventive Services - Focusing on the importance of primary care, preventive services, and community health initiatives to reduce the burden of preventable diseases.<br>
                        <br>
                        Healthcare Workforce Planning - Addressing challenges related to the recruitment, training, and distribution of healthcare professionals to meet the evolving needs of communities.<br>
                        <br>
                        Pharmaceutical Pricing and Access - Examining the pricing and accessibility of pharmaceuticals, exploring policies to control drug costs and ensure affordable access to essential medications.<br>
                        <br>
                        Public Health Emergency Preparedness - Developing and evaluating policies to enhance healthcare system readiness and responsiveness to public health emergencies, such as pandemics or natural disasters.<br>
                        <br>
                        Elderly and Long-Term Care - Addressing the healthcare needs of the elderly population, including policies related to long-term care, caregiving, and support services for aging individuals.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>