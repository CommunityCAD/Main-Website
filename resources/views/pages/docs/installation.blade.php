@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
        <div class="flex-auto max-w-8xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
            <article class="">
                <header class="">
                    <p class="text-base font-medium text-slate-300">
                        Getting started
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        Installation
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    This guide will walk you through how to set up your CommunityCAD. I have made the CAD to be hosted
                    easily and seemlessly for a varity of technical knowladge. There are a few ways to get your CAD up and
                    running.
                </p>

                <div class="space-y-3" id="installation">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Installation
                    </h3>

                    <p class="">
                        You can find the installation instructions on Github. Choose the repository for your install method.
                    </p>
                    <ul>
                        <li>PHP - Github -
                            <a class="text-link"
                                href="https://github.com/communitycad/communitycad">CommunityCAD/CommunityCAD</a>
                        </li>
                        <li>Docker - Github -
                            <a class="text-link"
                                href="https://github.com/communitycad/docker-community-cad">CommunityCAD/docker-community-cad</a>
                        </li>
                    </ul>
                </div>

                <div class="space-y-3" id="discord_set_up">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Discord Set Up
                    </h3>

                    <p class="">
                        You will need to follow the directions <a class="text-link" href="/docs/settings/discord_bot"
                            target="_blank">here</a> to set up your Discord Application/Bot to integrate
                        with CommunityCAD.
                    </p>
                </div>

                <div class="space-y-3" id="steam_set_up">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Steam Set up
                    </h3>

                    <p class="">
                        You will have to get a Steam API key regardless if you want to use the Steam Account Link feature.
                        You can get a key at <a class="text-link" href="https://steamcommunity.com/dev/registerkey"
                            target="_blank">https://steamcommunity.com/dev/registerkey</a>
                    </p>
                    <p>You will need to provide this key when setting up with Docker or by editing the .env file and putting
                        it "STEAM_CLIENT_SECRET"</p>
                    <p>You will have to edit the "STEAM_ALLOWED_HOSTS" to be your domain name without https or a trailing /.
                        Examples: "communitycad.app"; "cad.example.com";</p>
                </div>

                @include('inc.docs.support')

            </article>

            <dl class="flex pt-6 mt-6 border-t border-slate-200">
                <div class="mr-auto text-left">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Previous
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs">
                            Home
                        </a>
                    </dd>
                </div>

                <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs/hosted_plan">
                            Hosted Plan
                        </a>
                    </dd>
                </div>
            </dl>
        </div>
    </main>
@endsection
