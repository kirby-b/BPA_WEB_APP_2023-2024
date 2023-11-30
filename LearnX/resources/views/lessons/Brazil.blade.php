<x-partials.UserLayout>
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
                            <b>Brazil</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans">
                                Carnival(varies, usually February):<br>One of the world's largest and most famous festivals.<br>
                                <br>
                                Independence Day:<br>Celebrated on September 7.<br>
                                <br>
                                Tiradentes Day:<br>Commemorates a national hero, celebrated on April 21.<br>
                                <br>
                                Festa Junina:<br>Celebrated in June with traditional Brazilian folk festivals.<br>
                                <br>
                                Independence of Bahia:<br>Celebrated on July 2, commemorating the independence of the state of Bahia.<br>
                                <br>
                            <div class="font-sans">
                                Corpus Christi:<br>A Christian holiday celebrated in June.<br>
                                <br>
                                Brazilian Valentine's Day(Dia dos Namorados):<br>Celebrated on June 12.<br>
                                <br>
                                Proclamation of the Republic:<br>Celebrated on November 15.<br>
                                <br>
                                Immaculate Conception Day:<br>Celebrated on December 8.<br>
                                <br>
                                Labour Day(Dia do Trabalhador):<br>Celebrated on May 1.<br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>