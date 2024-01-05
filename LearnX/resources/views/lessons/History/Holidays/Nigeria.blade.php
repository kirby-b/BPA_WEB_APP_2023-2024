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
                            <b>Nigeria</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans">
                                Independence Day:<br>Celebrated on October 1, it marks Nigeria's independence from British colonial rule in 1960.<br>
                                <br>
                                New Year's Day:<br>January 1 is a public holiday celebrated with various festivities and events.<br>
                                <br>
                                Eid al-Fitr:<br>Celebrated at the end of Ramadan, it's a joyous occasion marked by prayers, feasting, and charitable activities.<br>
                                <br>
                                Eid al-Adha:<br>The Festival of Sacrifice, commemorating the willingness of Ibrahim (Abraham) to sacrifice his son as an act of obedience to God.<br>
                                <br>
                                Good Friday and Easter Monday:<br>Christian holidays marking the crucifixion and resurrection of Jesus Christ.<br>
                                <br>
                            <div class="font-sans">
                                Democracy Day:<br>Originally celebrated on May 29, it was moved to June 12 to commemorate the annulled presidential election of June 12, 1993, and to honor the late MKO Abiola.<br>
                                <br>
                                Id-el-Kabir:<br>Another name for Eid al-Adha, it is celebrated with prayers, feasting, and the sacrifice of animals.<br>
                                <br>
                                Children's Day:<br>Celebrated on May 27, it focuses on the rights and well-being of children with various activities and events.<br>
                                <br>
                                Workers' Day(Labour Day):<br>Celebrated on May 1, it honors the contributions of workers and laborers.<br>
                                <br>
                                Armed Forces Remembrance Day:<br>Observed on January 15, it honors the members of the Nigerian Armed Forces who lost their lives in the line of duty.<br>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>