<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>Community CAD - FiveM CAD/MDT/CMS System</title>

    <meta
        content="CommunityCAD is a new all-in-one solution to running your community. Provides a seamless user experience from the time they apply through their RP experience!"
        name="description">

    <link href="/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="/site.webmanifest" rel="manifest">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&display=swap" rel="stylesheet">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

</head>

<body class="bg-[#01161e]">

    @include('inc.public.navbar')

    @yield('content')

</body>

</html>
