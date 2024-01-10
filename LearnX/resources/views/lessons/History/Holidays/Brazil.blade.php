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
                            <b>Brazil</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans">
                                <span class="font-semibold">Carnival</span>(varies, usually February):<br>One of the world's largest and most famous festivals.<br>
                                <br>
                                <span class="font-semibold">Independence Day:</span><br>Celebrated on September 7.<br>
                                <br>
                                <span class="font-semibold">Tiradentes Day:</span><br>Commemorates a national hero, celebrated on April 21.<br>
                                <br>
                                <span class="font-semibold">Festa Junina:</span><br>Celebrated in June with traditional Brazilian folk festivals.<br>
                                <br>
                                <span class="font-semibold">Independence of Bahia:</span><br>Celebrated on July 2, commemorating the independence of the state of Bahia.<br>
                                <br>
                            <div class="font-sans">
                                <span class="font-semibold">Corpus Christi:</span><br>A Christian holiday celebrated in June.<br>
                                <br>
                                <span class="font-semibold">Brazilian Valentine's Day(Dia dos Namorados):</span><br>Celebrated on June 12.<br>
                                <br>
                                <span class="font-semibold">Proclamation of the Republic:</span><br>Celebrated on November 15.<br>
                                <br>
                                <span class="font-semibold">Immaculate Conception Day:</span><br>Celebrated on December 8.<br>
                                <br>
                                <span class="font-semibold">Labour Day(Dia do Trabalhador):</span><br>Celebrated on May 1.<br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>