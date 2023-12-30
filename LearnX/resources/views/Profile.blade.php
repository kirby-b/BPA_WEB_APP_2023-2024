<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        Permissions: {{auth()->user()->permissions}}<br>
                        Email: {{auth()->user()->email}}<br>
                        Name: {{auth()->user()->name}}<br>
                        Joined: {{auth()->user()->created_at}}<br>
                        {{-- Database query values for the specific user --}}
                    </p>
                    <a class="no-underline text-black" type="button" value ="Yes" class href={{ route("page.accountTermination") }}>Delete Account</a> <br>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>