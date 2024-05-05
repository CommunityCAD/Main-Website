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
                        Welcome to the CommunityCAD Docs
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">

                </p>

                <div class="space-y-3" id="about">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        About CommunityCAD
                    </h3>

                    <p class="">
                        Hello All! I am proud to announce that Community CAD has now entered beta and is ready for
                        communities to use. Community CAD is an all-in-one solution that handles everything you need to run
                        your community:
                    </p>

                    <ul>
                        <li>Applications? ✅</li>
                        <li>Member rosters and activity tracking? ✅</li>
                        <li>CAD/MDT Functionality? ✅</li>
                    </ul>
                </div>

                <div class="space-y-3" id="hosting_option_1">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Hosting Option 1 - Self-Hosting
                    </h3>
                    <x-blue-alert><span class="font-bold">Notice:</span> No Hosting Support will be provided for Self-Hosted
                        Versions.</x-blue-alert>

                    <p class="">
                        Community CAD is now opened sourced! You are more than welcome to host your own copy of Community
                        CAD. Community CAD is written in PHP so you can install it with PHP or a all-in-one Docker
                        Container.
                        Each Repo will have install guides!</p>

                    <ul>
                        <li>PHP - Github -
                            <a class="text-link"
                                href="https://github.com/communitycad/communitycad">CommunityCAD/CommunityCAD</a>
                        </li>
                        <li>PHP - Github -
                            <a class="text-link"
                                href="https://github.com/communitycad/docker-community-cad">CommunityCAD/docker-community-cad</a>
                        </li>
                    </ul>
                </div>

                <div class="space-y-3" id="hosting_option_2">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Hosting Option 2 - Hosted Subscription
                    </h3>

                    <p class="">
                        We have a Hosting Solution available for $10/month. With that, you get:</p>
                    <ul class="list-disc list-inside">
                        <li>Managed Hosting: We take care of everything for you!</li>
                        <li>Ability to connect your own domain: Either have your own xxxx.communitycad.app domain or bring
                            your own domain</li>
                        <li>Automatic Updates: Get updates as soon as they are live with no work required on your part</li>
                        <li>Priority Support: Get access to the Priority Support channels to get help quick</li>
                        <li>Priority Suggestions: Get your suggestions pushed to the front of the line</li>
                    </ul>

                    <p>If you are interesed in this plan open a ticket in our Discord server.</p>
                </div>

                @include('inc.docs.support')

            </article>

            <dl class="flex pt-6 mt-6 border-t border-slate-200">
                {{-- <div class="mr-auto text-left">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Previous
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="#">
                            Blah
                        </a>
                    </dd>
                </div> --}}

                <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs/installation">
                            Installation
                        </a>
                    </dd>
                </div>
            </dl>
        </div>
    </main>
@endsection
