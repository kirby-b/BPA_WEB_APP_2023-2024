<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        History:<br>
                        American History:<br>
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
                        <a href="{{ route('page.century21.america') }}" class="hover:text-purple-300">21th Century</a><br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                    17th Century:<br>
                    <br>
                    1607: Establishment of Jamestown, the first permanent English settlement.<br>
                    1620: Signing of the Mayflower Compact by Pilgrims.<br>
                    1630: The Puritans establish the Massachusetts Bay Colony.<br>
                    1634: Founding of the Maryland colony by Lord Baltimore.<br>
                    1675-1676: King Philip's War between Native Americans and New England colonists.<br>
                    1681: William Penn receives the charter for Pennsylvania.<br>
                    1692: Salem witch trials in Massachusetts.<br>
                    1699: Founding of Williamsburg, Virginia's colonial capital.<br>
                    1699: Establishment of the College of William & Mary.<br>
                    1699: French settlers establish Mobile, the first capital of French Louisiana.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>