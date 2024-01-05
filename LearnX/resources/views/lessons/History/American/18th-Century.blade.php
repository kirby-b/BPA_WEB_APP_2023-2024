<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.history') }}" class="hover:text-purple-300">History:</a><br>
                        <a href="{{ route('page.american.history') }}" class="hover:text-purple-300">American History:</a><br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <br>
                        <a href="{{ route('page.century15.america') }}" class="hover:text-purple-300">15th Century</a><br>
                        <br>
                        <a href="{{ route('page.century16.america') }}" class="hover:text-purple-300">16th Century</a><br>
                        <br>
                        <a href="{{ route('page.century17.america') }}" class="hover:text-purple-300">17th Century</a><br>
                        <br>
                        <a href="{{ route('page.century18.america') }}" class="hover:text-purple-300">18th Century</a><br>
                        <br>
                        <a href="{{ route('page.century19.america') }}" class="hover:text-purple-300">19th Century</a><br>
                        <br>
                        <a href="{{ route('page.century20.america') }}" class="hover:text-purple-300">20th Century</a><br>
                        <br>
                        <a href="{{ route('page.century21.america') }}" class="hover:text-purple-300">21st Century</a><br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                    18th Century:<br>
                    <br>
                    1733: Founding of Savannah, Georgia, the last of the original 13 colonies.<br>
                    1754-1763: The French and Indian War.<br>
                    1770: The Boston Massacre.<br>
                    1773: The Boston Tea Party.<br>
                    1775-1783: The American Revolutionary War.<br>
                    1787: Signing of the U.S. Constitution.<br>
                    1789: George Washington becomes the first President of the United States.<br>
                    1793: Invention of the cotton gin by Eli Whitney.<br>
                    1796: Tennessee becomes the 16th state to join the Union.<br>
                    1799: George Washington's death.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>