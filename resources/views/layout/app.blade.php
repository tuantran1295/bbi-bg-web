<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Chào mừng đến với BBI Bắc Giang')</title>
        @yield('header')
    </head>
    <body class="scroll endpage">

        @include('layout.nav')
        <div class="container">
            @yield('content')
        </div>

        @include('layout.footer')
        <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    </body>
</html>
