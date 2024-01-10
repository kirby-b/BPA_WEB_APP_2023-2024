<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.history') }}" class="hover:text-purple-300">History:</a><br>
                        <a href="{{ route('page.holidays') }}" class="hover:text-purple-300">Holidays Around The World:</a><br>
                    </p>
                    <p class="text-2xl font-sans m-4">
                        <br>
                        <a href="{{ route('page.china') }}" class="hover:text-purple-300">China</a><br>
                        <br>
                        <a href="{{ route('page.india') }}" class="hover:text-purple-300">India</a><br>
                        <br>
                        <a href="{{ route('page.usa') }}" class="hover:text-purple-300">United States</a><br>
                        <br>
                        <a href="{{ route('page.brazil') }}" class="hover:text-purple-300">Brazil</a><br>
                        <br>
                        <a href="{{ route('page.russia') }}" class="hover:text-purple-300">Russia</a><br>
                        <br>
                        <a href="{{ route('page.indonesia') }}" class="hover:text-purple-300">Indonesia</a><br>
                        <br>
                        <a href="{{ route('page.pakistan') }}" class="hover:text-purple-300">Pakistan</a><br>
                        <br>
                        <a href="{{ route('page.nigeria') }}" class="hover:text-purple-300">Nigeria</a><br>
                        <br>
                        <a href="{{ route('page.japan') }}" class="hover:text-purple-300">Japan</a><br>
                        <br>
                        <a href="{{ route('page.mexico') }}" class="hover:text-purple-300">Mexico</a><br>
                    </p>
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <b>HOLIDAYS</b>
                        </div>
                        <div class="font-Preahvihear items-center text-xl">
                            <b>Russia</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans">
                                <span class="font-semibold">New Year's Day(January 1):</span><br>Celebrated with festive events and Ded Moroz.<br>
                                <br>
                                <span class="font-semibold">Victory Day(May 9):</span><br>Commemorates the victory over Nazi Germany.<br>
                                <br>
                                <span class="font-semibold">Russian Orthodox Christmas:</span><br>Celebrated on January 7.<br>
                                <br>
                                <span class="font-semibold">Defender of the Fatherland Day:</span><br>Celebrated on February 23, honoring the Russian Armed Forces.<br>
                                <br>
                                <span class="font-semibold">International Women's Day:</span><br>Celebrated on March 8, honoring women's contributions.<br>
                                <br>
                            <div class="font-sans">
                                <span class="font-semibold">Unity Day:</span><br>Celebrated on November 4, commemorating the Russian unity against foreign invaders.<br>
                                <br>
                                <span class="font-semibold">Cosmonautics Day:</span><br>Celebrated on April 12, honoring space exploration.<br>
                                <br>
                                <span class="font-semibold">May Day(Spring and Labor Day):</span><br>Celebrated on May 1.<br>
                                <br>
                                <span class="font-semibold">Constitution Day:</span><br>Celebrated on December 12.<br>
                                <br>
                                <span class="font-semibold">Day of National Unity:</span><br>Celebrated on November 4.<br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>