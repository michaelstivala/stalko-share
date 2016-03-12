<!DOCTYPE html>
<html lang="en">
    <!-- 
    -
    - Hey there {{ $share->name }}!
    -
    - If you're looking to download the song that you just heard, I'll save you the trouble.
    - It's here: {{ asset('/music/a-long-wave-goodbye.mp3') }}
    -
    - If you like the song and want to share it with a friend, consider sharing it
    - through the website itself - your pal might get a kick out of it, and heck,
    - we might get a ticket sale!
    -
    - If you're wondering how this website was developed,
    - I'll be blogging about it at http://michaelstivala.com
    -
    -->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=11">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>

        <link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/images/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/images/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/images/favicons/manifest.json">
        <link rel="shortcut icon" href="/images/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/images/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="/images/favicons/browserconfig.xml">
        <meta name="theme-color" content="#0f6c7c">
        
        <meta name="og:title" content="{{ $share->name !== "Friend" ? trans('stalko.og-title', ['name' => $share->name]) : 'Stalko - A Long Wave Goodbye' }}"/>
        <meta name="og:description" content="{{ trans('stalko.og-description') }}"/>
        <meta name="og:image" content=""/>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <title>Stalko - A Long Wave Goodbye</title>
    </head>
    <body id="app" class="bg">
    <script type="text/javascript">
    var locale = "{{ app()->getLocale() }}";
    </script>
        @yield('content')

        <script src="{{ asset('js/app.js') }}"></script>

        @if (App::environment('production'))
          <!-- Google Tag Manager -->
            <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M8JHR5"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-M8JHR5');</script>
            <!-- End Google Tag Manager -->
        @endif
    </body>
</html>