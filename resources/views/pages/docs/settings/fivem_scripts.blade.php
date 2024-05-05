@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
        <div class="flex-auto max-w-8xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
            <article class="">
                <header class="">
                    <p class="text-base font-medium text-slate-300">
                        Settings & Integration
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        FiveM Scripts
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">

                </p>
                <div class="space-y-3" id="fivem_scripts">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Current Official FiveM Scripts
                    </h3>

                    <p class="">
                        We have a selection of scripts available and supported by the CommunityCAD Developement Team.
                    </p>

                    <ul class="list-disc list-inside">
                        <li>
                            <a class="text-link" href="https://github.com/CommunityCAD/cc-911" target="_blank">cc-911 - 911
                                script that creates a call in the CAD system.</a>
                        </li>
                        <li>
                            <a class="text-link" href="https://github.com/CommunityCAD/cc-panic" target="_blank">
                                cc-panic - Panic Button script that alerts users in the CAD system.
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="space-y-3" id="contribute">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Contribute
                    </h3>

                    <p class="">
                        Scripts are made by communities that share their scripts back with us. We add these to our repo for
                        everyone to use. Feel free to contact us on Discord if you have a script.
                    </p>
                </div>

                <div class="space-y-3" id="contribute">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Join the Official Development Team
                    </h3>

                    <p class="">
                        If you are interested in joining as an official developer with CommunityCAD please DM "Creator |
                        Gage"
                        in our server.
                    </p>
                </div>

                @include('inc.docs.support')

            </article>

            <dl class="flex
                        pt-6 mt-6 border-t border-slate-200">
                <div class="mr-auto text-left">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Previous
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs/settings/discord_bot">
                            Discord Bot
                        </a>
                    </dd>
                </div>

                {{-- <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs/discord_integration">
                            Discord Integration
                        </a>
                    </dd>
                </div> --}}
            </dl>
        </div>
    </main>
@endsection
