<html lang="es">

<head prefix="og: http://ogp.me/ns#
        fb: http://ogp.me/ns/fb#
        product: http://ogp.me/ns/product#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='Veneuela' name='geo.placename'/>
    <meta content='6.42375;66.58973' name='geo.position'/>
    <meta content='6.42375, 66.58973' name='ICBM'/> 
    <meta content='Rintegrate' name='Author'/>
    <meta content='general' name='rating'/>
    <meta content='VE' name='geo.country'/>
    <link rel="icon" type="image/png" href="https://rintegrate.com/assets/img/favicon.png" />
    <link rel = "alternate" href = "{{ url()->current() }}" hreflang = "es-VE" />

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


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6322c2df37898912e96941e8/1gcvsie80';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>
