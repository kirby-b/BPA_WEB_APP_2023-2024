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
                        Social Justice and Equality:<br>
                        <br>
                        Racial Justice - Examining systemic racism, racial disparities, and initiatives aimed at achieving racial equality in areas such as education, employment, and criminal justice.<br>
                        <br>
                        Gender Equality - Addressing gender-based discrimination, advocating for equal opportunities for all genders, and promoting gender inclusivity in various spheres of life.<br>
                        <br>
                        LGBTQ+ Rights - Advocating for the rights and well-being of the lesbian, gay, bisexual, transgender, and queer (LGBTQ+) community, including issues such as anti-discrimination laws and marriage equality.<br>
                        <br>
                        Economic Inequality - Analyzing the causes and consequences of economic disparities, exploring policies to reduce income inequality, and promoting economic justice.<br>
                        <br>
                        Access to Education - Ensuring equal access to quality education for all, addressing disparities in educational outcomes, and promoting inclusive educational environments.<br>
                        <br>
                        Criminal Justice Reform - Examining issues related to mass incarceration, police brutality, and advocating for reforms to create a fair and equitable criminal justice system.<br>
                        <br>
                        Healthcare Equity - Addressing disparities in healthcare access, outcomes, and quality, and advocating for policies that promote health equity.<br>
                        <br>
                        Environmental Justice - Investigating how marginalized communities are disproportionately affected by environmental issues and advocating for fair and sustainable environmental policies.<br>
                        <br>
                        Immigrant and Refugee Rights - Advocating for the rights of immigrants and refugees, addressing issues such as fair immigration policies, asylum, and protection from discrimination.<br>
                        <br>
                        Disability Rights - Promoting equal opportunities and accessibility for individuals with disabilities, addressing discrimination, and advocating for inclusive policies.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>