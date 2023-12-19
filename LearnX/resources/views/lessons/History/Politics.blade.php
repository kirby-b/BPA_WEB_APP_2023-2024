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
                        <span class="font-black">History:</span><br>
                        <span class="font-bold">Politics:</span><br>
                        <br>
                        <span class="font-semibold">Global Governance and International Relations</span> - Examining the relationships between countries, international organizations, and the role of diplomacy in addressing global challenges.<br>
                        <br>
                        <span class="font-semibold">Political Ideologies</span> - Analyzing various political ideologies, such as liberalism, conservatism, socialism, and nationalism, and their impact on political thought and policy.<br>
                        <br>
                        <span class="font-semibold">Elections and Electoral Systems</span> - Studying the electoral processes, including voting systems, campaign strategies, and the impact of elections on political landscapes.<br>
                        <br>
                        <span class="font-semibold">Political Economy</span> - Exploring the intersection of politics and economics, including policies related to taxation, trade, and economic development.<br>
                        <br>
                        <span class="font-semibold">Policy Analysis and Public Administration</span> - Investigating the development, implementation, and evaluation of public policies and the role of public administration in governance.<br>
                        <br>
                        <span class="font-semibold">Human Rights and Social Justice</span> - Addressing issues related to human rights, social justice, and equality, and exploring policies aimed at promoting inclusivity and addressing discrimination.<br>
                        <br>
                        <span class="font-semibold">Political Communication</span> - Examining the role of media, propaganda, and political communication strategies in shaping public opinion and influencing political outcomes.<br>
                        <br>
                        <span class="font-semibold">Political Parties and Party Systems</span> - Analyzing the structure and dynamics of political parties, coalition building, and the role of political parties in representative democracies.<br>
                        <br>
                        <span class="font-semibold">Political Institutions</span> - Studying the structures and functions of political institutions, including legislatures, executives, and judiciaries, and their role in governance.<br>
                        <br>
                        <span class="font-semibold">Political Philosophy and Political Theory</span> - Exploring foundational ideas and theories in political philosophy, including works by political thinkers such as Plato, Aristotle, John Locke, and others.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>