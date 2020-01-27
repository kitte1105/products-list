<!DOCTYPE html>
<html>
    <head>
        <title>Products list - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
