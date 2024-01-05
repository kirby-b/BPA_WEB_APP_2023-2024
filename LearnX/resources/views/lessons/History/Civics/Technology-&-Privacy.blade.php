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
                        Technology & Privacy:<br>
                        <br>
                        Data Protection Laws - Analyzing and discussing the impact and effectiveness of data protection laws, such as the General Data Protection Regulation (GDPR) and the California Consumer Privacy Act (CCPA).<br>
                        <br>
                        Surveillance Technologies - Examining the implications of surveillance technologies, including government surveillance, facial recognition, and the use of surveillance cameras in public spaces.<br>
                        <br>
                        Internet Privacy - Exploring issues related to internet privacy, including online tracking, data collection by tech companies, and privacy concerns associated with social media platforms.<br>
                        <br>
                        Biometric Data and Privacy - Assessing the collection and use of biometric data, such as fingerprints and facial recognition, and the privacy implications of biometric technology.<br>
                        <br>
                        Smart Devices and IoT Privacy - Investigating the privacy challenges associated with smart devices and the Internet of Things (IoT), including connected home devices, wearables, and smart city infrastructure.<br>
                        <br>
                        Cybersecurity and Personal Information - Addressing cybersecurity issues and the protection of personal information from data breaches, hacks, and cyber threats.<br>
                        <br>
                        Ethical Use of AI - Discussing ethical considerations in the development and deployment of artificial intelligence (AI) technologies, including concerns related to bias, transparency, and accountability.<br>
                        <br>
                        Government Access to Personal Data - Analyzing the balance between national security interests and individual privacy rights, especially in the context of government access to personal data for law enforcement purposes.<br>
                        <br>
                        Employee Privacy in the Workplace - Examining the privacy rights of employees in the workplace, particularly with the increasing use of monitoring technologies by employers.<br>
                        <br>
                        Privacy in Health Tech - Discussing privacy concerns related to health technologies, electronic health records, and the sharing of sensitive health information.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>