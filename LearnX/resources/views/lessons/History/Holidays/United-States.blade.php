<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        History:<br>
                        Holidays Around The World:<br>
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
                            <b>United States</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans ">
                                Independence Day(July 4):<br>Celebrated with fireworks and patriotic events.<br>
                                <br>
                                Thanksgiving Day:<br>Celebrated on the fourth Thursday in November.<br>
                                <br>
                                Christmas:<br>Celebrated on December 25.<br>
                                <br>
                                Memorial Day:<br>Honors the military personnel who have died, observed on the last Monday of May.<br>
                                <br>
                                Labor Day:<br>Celebrated on the first Monday in September, honoring the contributions of American workers.<br>
                                <br>
                            <div class="font-sans">
                                Martin Luther King Jr. Day:<br>Commemorates the civil rights leader, observed on the third Monday in January.<br>
                                <br>
                                Easter:<br>Celebrated in April, commemorating the resurrection of Jesus Christ.<br>
                                <br>
                                Veterans Day:<br>Honors military veterans, observed on November 11.<br>
                                <br>
                                New Year's Day(January 1):<br>Celebrated at the beginning of the year.<br>
                                <br>
                                Columbus Day:<br>Celebrated on the second Monday in October.
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>