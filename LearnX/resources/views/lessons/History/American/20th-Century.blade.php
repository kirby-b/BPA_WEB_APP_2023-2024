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
                        20th Century:<br>
                        <br>
                        1913: The 17th Amendment is ratified, allowing for the direct election of senators.<br>
                        1917-1918: The United States enters World War I.<br>
                        1920: The 19th Amendment grants women the right to vote.<br>
                        1929: The Great Depression begins.<br>
                        1941: The attack on Pearl Harbor leads the U.S. to enter World War II.<br>
                        1954: Brown v. Board of Education desegregates public schools.<br>
                        1963: Martin Luther King Jr.'s "I Have a Dream" speech during the March on Washington.<br>
                        1969: Apollo 11 lands the first humans on the moon.<br>
                        1974: Richard Nixon resigns in the wake of the Watergate scandal.<br>
                        1989: The fall of the Berlin Wall marks the end of the Cold War.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>