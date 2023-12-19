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
                        History:<br>
                        Civics:<br>
                        Climate Change & Environmental Sustainability:<br>
                        <br>
                        Renewable Energy Transition - Exploring the transition from fossil fuels to renewable energy sources such as solar, wind, and hydropower to reduce greenhouse gas emissions and combat climate change.<br>
                        <br>
                        Climate Policy and Agreements - Analyzing international and national policies, agreements, and frameworks aimed at addressing climate change, such as the Paris Agreement.<br>
                        <br>
                        Biodiversity Conservation - Addressing the loss of biodiversity, habitat destruction, and the importance of conservation efforts to maintain ecosystems and species diversity.<br>
                        <br>
                        Sustainable Agriculture - Promoting sustainable farming practices, reducing environmental impacts, and addressing issues such as deforestation and soil degradation.<br>
                        <br>
                        Ocean Conservation - Examining challenges faced by oceans, including overfishing, plastic pollution, and coral reef degradation, and advocating for marine conservation efforts.<br>
                        <br>
                        Climate Adaptation Strategies - Exploring strategies and policies to adapt to the impacts of climate change, including rising sea levels, extreme weather events, and shifts in ecosystems.<br>
                        <br>
                        Circular Economy - Promoting a circular economy that minimizes waste and maximizes the reuse, recycling, and sustainability of resources.<br>
                        <br>
                        Carbon Footprint Reduction - Discussing individual and corporate efforts to reduce carbon footprints, including energy efficiency, sustainable transportation, and lifestyle changes.<br>
                        <br>
                        Green Technologies - Exploring innovations and advancements in green technologies, such as clean energy technologies, sustainable materials, and eco-friendly manufacturing processes.<br>
                        <br>
                        Environmental Justice and Climate Equity - Addressing the disproportionate impacts of climate change on vulnerable communities and advocating for policies that ensure climate justice and equity.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>