<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Chào mừng đến với BBI Bắc Giang')</title>
        @yield('header')
    </head>
    <body>

        @include('layout.nav')
        <div class="container">
            @yield('content')
        </div>

        @include('layout.footer')
    </body>
</html>
