@section('head')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- FAVICON https://favicon.io/favicon-converter/ -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }} ">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">

        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('ogTitle')" />
        <meta property="og:description" content="@yield('ogDescription')" />
        <meta property="og:site_name" content="rotuloscolorit.es" />
        <!--  <meta property="og:image" content="{{ asset('img/avatar/3.jpg') }}"/> -->

        <style>
        </style>
        @vite(['resources/scss/style.scss'])

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10877226117">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-10877226117');
        </script>

        <!-- Event snippet for Перегляд сторінки conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
        <script>
            function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof(url) != 'undefined') {
                window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-10877226117/W-PvCP2Y7bIaEIWZ1cIo',
                'value': 1.0,
                'currency': 'EUR',
                'event_callback': callback
            });
            return false;
            }
        </script>

    </head>
