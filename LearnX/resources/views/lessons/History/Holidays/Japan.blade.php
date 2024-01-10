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
                            <b>Japan</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans">
                                <span class="font-semibold">New Year's Day(Shogatsu):</span><br>Celebrated on January 1, it's a time for family gatherings, visits to shrines and temples, and traditional New Year's meals.<br>
                                <br>
                                <span class="font-semibold">Coming of Age Day(Seijin no Hi):</span><br>Celebrated on the second Monday of January, it honors individuals who have reached the age of 20, marking the age of adulthood.<br>
                                <br>
                                <span class="font-semibold">National Foundation Day(Kenkoku Kinen no Hi):</span><br>Observed on February 11, it commemorates the founding of Japan and the accession of its first emperor.<br>
                                <br>
                                <span class="font-semibold">Hinamatsuri(Doll's Day or Girls' Day):</span><br>Celebrated on March 3, it's a day to pray for the health and happiness of girls, often marked by the display of ornamental dolls.<br>
                                <br>
                                <span class="font-semibold">Hanami(Cherry Blossom Viewing):</span><br>While not an official holiday, the blooming of cherry blossoms in spring(usually March to May) is a significant cultural event, with people enjoying picnics and festivities under the blossoming trees.<br>
                                <br>
                            <div class="font-sans">
                                <span class="font-semibold">Golden Week:</span><br>A series of consecutive holidays from late April to early May, including Showa Day(April 29), Constitution Memorial Day(May 3), Greenery Day(May 4), and Children's Day(May 5).<br>
                                <br>
                                <span class="font-semibold">Obon:</span><br>A Buddhist festival in mid-August, it honors deceased ancestors. Families often return to their hometowns, and there are traditional dances(Bon Odori).<br>
                                <br>
                                <span class="font-semibold">Respect for the Aged Day(Keiro no Hi):</span><br>Celebrated on the third Monday of September, it honors the elderly and promotes the importance of respecting and caring for the elderly.<br>
                                <br>
                                <span class="font-semibold">Sports Day(Taiiku no Hi):</span><br>Celebrated on the second Monday of October, it promotes sports and a healthy, active lifestyle.<br>
                                <br>
                                <span class="font-semibold">Emperor's Birthday(Tenno no Tanjobi):</span><br>Celebrated on December 23, it honors the birthday of the reigning emperor. It's a national holiday during the era of Emperor Hirohito(Showa) and Emperor Akihito(Heisei).<br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>
        