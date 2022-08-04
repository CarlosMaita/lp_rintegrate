<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rintegrate Landing - @yield('title')</title>
    @vite('resources/css/app.css')
    @yield('metas')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <!-- footer -->
    @yield('footer')
</body>
</html>
