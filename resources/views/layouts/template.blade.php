<html lang="es">

<head prefix="og: http://ogp.me/ns#
        fb: http://ogp.me/ns/fb#
        product: http://ogp.me/ns/product#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://rintegrate.com/assets/img/favicon.png" />

    <link rel="canonical" href="{{ url()->current() }}">
    <title>Rintegrate - @yield('title')</title>
    @vite('resources/css/app.css')
    @yield('metas')

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NZRC899');
    </script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript">
        function callbackThen(response) {
            // read HTTP status
            console.log(response.status);
            // read Promise object
            response.json().then(function(data) {
                console.log(data);
            });
        }
        function callbackCatch(error) {
            console.error('Error:', error)
        }
    </script>
    {!! htmlScriptTagJsApi([
        'callback_then' => 'callbackThen',
    
        'callback_catch' => 'callbackCatch',
    ]) !!}
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZRC899" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="container-f">
        @yield('content')
    </div>

    <!-- footer -->
    @yield('footer')




</body>

</html>
