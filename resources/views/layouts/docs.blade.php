<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>Community CAD - Docs</title>

    <meta
        content="CommunityCAD is a new all-in-one solution to running your community. Provides a seamless user experience from the time they apply through their RP experience!"
        name="description">

    <link href="/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="/site.webmanifest" rel="manifest">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

</head>

<body class="bg-gray-900" id="top">

    {{-- <nav class="bg-gray-800 shadow shadow-gray-700 w-100 px-8 md:px-auto">
        <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
            <!-- Logo -->
            <div class="text-indigo-500 md:order-1 flex items-center">
                <!-- Heroicon - Chip Outline -->
                <img alt="CommunityCAD Logo" class="w-12"
                    src="https://cdn.discordapp.com/attachments/632810626363686922/1132129051411230811/communitycad.png">
                <a class="ml-4 text-lg" href="{{ route('home') }}">CommunityCAD</a>
            </div>
            <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
                <ul class="flex font-semibold justify-between">
                    <!-- Active Link = text-indigo-500
                Inactive Link = hover:text-indigo-500 -->
                    <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#features">Features</a></li>
                    <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#gallery">Gallery</a></li>
                    <li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#reviews">Reviews</a></li>
                </ul>
            </div>
            <div class="order-2 md:order-3">
                <a class="px-4 py-2 hover:bg-indigo-600 text-gray-800 rounded-xl flex items-center gap-2 bg-[#7289da]"
                    href="https://discord.gg/963YswhnVa">
                    <svg class="w-4 h-4 mr-2" viewBox="0 0 127.14 96.36" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: rgb(31 41 55);
                                }
                            </style>
                        </defs>
                        <g data-name="图层 2" id="图层_2">
                            <g data-name="Discord Logos" id="Discord_Logos">
                                <g data-name="Discord Logo - Large - White" id="Discord_Logo_-_Large_-_White">
                                    <path class="cls-1"
                                        d="M107.7,8.07A105.15,105.15,0,0,0,81.47,0a72.06,72.06,0,0,0-3.36,6.83A97.68,97.68,0,0,0,49,6.83,72.37,72.37,0,0,0,45.64,0,105.89,105.89,0,0,0,19.39,8.09C2.79,32.65-1.71,56.6.54,80.21h0A105.73,105.73,0,0,0,32.71,96.36,77.7,77.7,0,0,0,39.6,85.25a68.42,68.42,0,0,1-10.85-5.18c.91-.66,1.8-1.34,2.66-2a75.57,75.57,0,0,0,64.32,0c.87.71,1.76,1.39,2.66,2a68.68,68.68,0,0,1-10.87,5.19,77,77,0,0,0,6.89,11.1A105.25,105.25,0,0,0,126.6,80.22h0C129.24,52.84,122.09,29.11,107.7,8.07ZM42.45,65.69C36.18,65.69,31,60,31,53s5-12.74,11.43-12.74S54,46,53.89,53,48.84,65.69,42.45,65.69Zm42.24,0C78.41,65.69,73.25,60,73.25,53s5-12.74,11.44-12.74S96.23,46,96.12,53,91.08,65.69,84.69,65.69Z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span>Discord</span>
                </a>
            </div>
        </div>
    </nav> --}}

    <header
        class="sticky top-0 z-50 flex items-center justify-between px-3 py-2 border-b shadow-lg bg-white/90 backdrop-blur-sm border-slate-400/40">
        <div class="flex items-center flex-grow basis-0">
            <a class="text-lg font-semibold tracking-tight text-slate-900" href="/docs/getting_started/home">
                Community CAD Docs
            </a>
        </div>

        <div class="items-center justify-end flex-grow hidden basis-0 md:flex">
            <a class="px-4 py-2 text-sm font-semibold rounded bg-slate-900 text-slate-50 transition ease-in-out delay-75 hover:scale-105 duration-200"
                href="{{ route('home') }}">
                Go to homepage
            </a>
        </div>
    </header>

    @yield('content')

</body>

</html>
