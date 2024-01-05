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
                            <b>Pakistan</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans">
                                Independence Day(Youm-e-Azadi):<br>Celebrated on August 14, commemorating Pakistan's independence in 1947.<br>
                                <br>
                                Pakistan Day(Youm-e-Pakistan):<br>Observed on March 23, marking the Lahore Resolution and the adoption of the first constitution of Pakistan.<br>
                                <br>
                                Eid al-Fitr:<br>Celebrated at the end of Ramadan, it is a joyous occasion marked by prayers, feasting, and giving to charity.<br>
                                <br>
                                Eid al-Adha:<br>Also known as the Festival of Sacrifice, it honors the willingness of Ibrahim (Abraham) to sacrifice his son as an act of obedience to God.<br>
                                <br>
                                Labor Day(Youm-e-Mazdoor):<br>Celebrated on May 1, it acknowledges the contributions of workers and laborers.<br>
                                <br>
                            <div class="font-sans">
                                Defence Day(Youm-e-Difa):<br>Observed on September 6, it commemorates the defense of Pakistan against India in 1965.<br>
                                <br>
                                Kashmir Solidarity Day:<br>Observed on February 5, it expresses solidarity with the people of Kashmir in their struggle for self-determination.<br>
                                <br>
                                Iqbal Day:<br>Celebrated on November 9, it honors Allama Iqbal, the philosopher, poet, and politician who played a significant role in the creation of Pakistan.<br>
                                <br>
                                Mawlid al-Nabi(Eid Milad-un Nabi):<br>Celebrating the birth of Prophet Muhammad, it is marked with religious gatherings, prayers, and feasts.<br>
                                <br>
                                Quaid-e-Azam Day:<br>Commemorated on December 25, it honors Muhammad Ali Jinnah, the founder of Pakistan, on his birthday.<br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>