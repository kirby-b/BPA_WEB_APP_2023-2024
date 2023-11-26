<x-partials.UserLayout>
        <h1>This is temporarily how all views will be accessed. In time a way to render based on permissions will be used.</h1>
        <form method="POST" action="/logout">
            @csrf
            <input class="text-black border-none no-underline cursor-pointer" type="submit" id="submit" name="submit" value="Logout">
        </form>
    </head>
    <a class="no-underline text-black" type="button" value ="Yes" class href={{ route("page.student") }}>Student View</a> 
</x-partials.UserLayout>