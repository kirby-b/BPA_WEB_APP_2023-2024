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
                        <a href="{{ route('page.century21.america') }}" class="hover:text-purple-300">21st Century</a><br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                    21st Century:<br>
                    <br>
                    2001: The 9/11 terrorist attacks.<br>
                    2008: The global financial crisis.<br>
                    2010: The Affordable Care Act (Obamacare) is signed into law.<br>
                    2015: The Supreme Court legalizes same-sex marriage nationwide.<br>
                    2020: The COVID-19 pandemic significantly impacts the U.S. and the world.<br>
                    2020: Black Lives Matter protests gain momentum following the death of George Floyd.<br>
                    2020: Presidential election with Joe Biden elected as the 46th President.<br>
                    2021: Inauguration of Joe Biden and Kamala Harris.<br>
                    2021: Capitol riot on January 6th.<br>
                    2021: COVID-19 vaccine distribution begins.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>