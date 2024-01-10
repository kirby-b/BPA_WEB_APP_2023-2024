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
                            <b>Indonsia</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans">
                                <span class="font-semibold">Independence Day(Hari Kemerdekaan):</span><br>Celebrated on August 17, marking Indonesia's declaration of independence in 1945.<br>
                                <br>
                                <span class="font-semibold">Idul Fitri(or Eid al-Fitr):</span><br>The end of Ramadan, a month of fasting for Muslims. It's a significant religious holiday celebrated with prayers, feasts, and social gatherings.<br>
                                <br>
                                <span class="font-semibold">Nyepi:</span><br>The Balinese New Year, a day of silence, meditation, and self-reflection. It usually falls in March or April.<br>
                                <br>
                                <span class="font-semibold">Galungan and Kuningan:</span><br>A Hindu Balinese festival celebrating the victory of dharma over adharma. Galungan is the main celebration, and Kuningan marks the end of the series.<br>
                                <br>
                                <span class="font-semibold">Chinese New Year:</span><br>Celebrated by the Chinese-Indonesian community, it involves various festivities, parades, and traditional performances.<br>
                                <br>
                            <div class="font-sans">
                                <span class="font-semibold">Waisak(Vesak):</span><br>Celebrating the birth, enlightenment, and death of Siddhartha Gautama, the founder of Buddhism. Celebrations take place at Borobudur Temple.<br>
                                <br>
                                <span class="font-semibold">Ascension of the Prophet Muhammad(Isra Mi'raj):</span><br>Commemorating the night journey and ascension of the Prophet Muhammad.<br>
                                <br>
                                <span class="font-semibold">National Leave Day(Hari Cuti Bersama):</span><br>Additional holidays declared by the government, often to create long weekends.<br>
                                <br>
                                <span class="font-semibold">Christmas:</span><br>Celebrated by the Christian community with religious services and festive gatherings.<br>
                                <br>
                                <span class="font-semibold">Kartini Day:</span><br>Celebrated on April 21, honoring Raden Ajeng Kartini, a prominent figure in the Indonesian women's emancipation movement.<br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>