@extends('layouts.public')

@section('content')
    <div class="relative isolate overflow-hidden bg-gray-900">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
        </svg>
        <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
            aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-5 sm:pb-32 lg:flex lg:px-8 lg:py-40">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                <div class="mt-24 sm:mt-32 lg:mt-16">
                    {{-- <a href="#" class="inline-flex space-x-6">
                        <span
                            class="rounded-full bg-indigo-500/10 px-3 py-1 text-sm font-semibold leading-6 text-indigo-400 ring-1 ring-inset ring-indigo-500/20">What's
                            new</span>
                        <span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-300">
                            <span>Just shipped v1.0</span>
                            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a> --}}
                </div>
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Community CAD</h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">The all-in-one solution to running a roleplay community
                    while being a CAD/MDT</p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Discord</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Docs <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="https://media.discordapp.net/attachments/1107077720233480322/1108149085887799306/677f2a5883b9f3f5af9110f7fb451cbe.png?width=1440&height=674"
                        alt="App screenshot" width="2432" height="1442"
                        class="w-[76rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-900 py-12 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Proudly used by</h2>
                    <p class="mt-4 text-lg leading-8 text-gray-300">Join our discord to learn more.
                    </p>
                </div>
                <p class="mt-5 text-3xl font-semibold leading-6 text-gray-300 text-center">You can be the first!</p>
                {{-- <dl
                    class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col bg-white/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-300">Creators on the platform</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white">8,000+</dd>
                    </div>
                    <div class="flex flex-col bg-white/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-300">Flat platform fee</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white">3%</dd>
                    </div>
                    <div class="flex flex-col bg-white/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-300">Uptime guarantee</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white">99.9%</dd>
                    </div>
                    <div class="flex flex-col bg-white/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-300">Paid out to creators</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white">$70M</dd>
                    </div>
                </dl> --}}
            </div>
        </div>
    </div>

    <div class="bg-gray-900 py-12 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl text-center">Features</h2>

            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-base font-semibold leading-7 text-indigo-400">Everything you need</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl"></p>
                <p class="mt-6 text-lg leading-8 text-gray-300">Community CAD is an all-in-one solution for your community's
                    needs.</p>
            </div>
            <dl
                class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base leading-7 text-gray-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-16">
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-white">
                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                clip-rule="evenodd" />
                        </svg>
                        Application System.
                    </dt>
                    <dd class="inline">Allow users to easily apply for your community without using Google Forms.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-white">
                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                clip-rule="evenodd" />
                        </svg>
                        User Management System.
                    </dt>
                    <dd class="inline">Make managing members and users simple and easy with a one-stop-shop for everything
                        you need.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-white">
                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z"
                                clip-rule="evenodd" />
                        </svg>
                        CAD/MDT.
                    </dt>
                    <dd class="inline">We haven't forgotten the basics. This still has a feature rich CAD/MDT to drive
                        roleplay in your community.
                    </dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-white">
                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.84 1.804A1 1 0 018.82 1h2.36a1 1 0 01.98.804l.331 1.652a6.993 6.993 0 011.929 1.115l1.598-.54a1 1 0 011.186.447l1.18 2.044a1 1 0 01-.205 1.251l-1.267 1.113a7.047 7.047 0 010 2.228l1.267 1.113a1 1 0 01.206 1.25l-1.18 2.045a1 1 0 01-1.187.447l-1.598-.54a6.993 6.993 0 01-1.929 1.115l-.33 1.652a1 1 0 01-.98.804H8.82a1 1 0 01-.98-.804l-.331-1.652a6.993 6.993 0 01-1.929-1.115l-1.598.54a1 1 0 01-1.186-.447l-1.18-2.044a1 1 0 01.205-1.251l1.267-1.114a7.05 7.05 0 010-2.227L1.821 7.773a1 1 0 01-.206-1.25l1.18-2.045a1 1 0 011.187-.447l1.598.54A6.993 6.993 0 017.51 3.456l.33-1.652zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                        API Access.
                    </dt>
                    <dd class="inline">Still under development. Will have access to everything from API to allow for easy
                        in-game integration.</dd>
                </div>
            </dl>
        </div>
    </div>

    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-400">Pricing</h2>
                <p class="mt-2 text-4xl font-bold tracking-tight text-white sm:text-5xl">Pricing plans for communities
                    of&nbsp;all&nbsp;sizes</p>
            </div>
            <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-300">Choose an affordable plan that’s
                packed with the best features for engaging your community.</p>

            <div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div class="rounded-3xl p-8 xl:p-10 ring-1 ring-white/10">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3 id="tier-freelancer" class="text-lg font-semibold leading-8 text-white">Basic</h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-gray-300">The essentials to CAD/MDT.
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span class="text-4xl font-bold tracking-tight text-white">$10</span>
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span class="text-sm font-semibold leading-6 text-gray-300">/month</span>
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-300 xl:mt-10">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" class="text-green-600">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Basic Customization
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            No Reports
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            No Control of Features
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            48-hour support response time
                        </li>
                    </ul>
                </div>
                <div class="rounded-3xl p-8 xl:p-10 bg-white/5 ring-2 ring-indigo-500">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3 id="tier-startup" class="text-lg font-semibold leading-8 text-white">Advanced</h3>
                        <p class="rounded-full bg-indigo-500 px-2.5 py-1 text-xs font-semibold leading-5 text-white">Most
                            popular</p>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-gray-300">Full functional CAD/MDT system and application system.
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span class="text-4xl font-bold tracking-tight text-white">$20</span>
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span class="text-sm font-semibold leading-6 text-gray-300">/month</span>
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-300 xl:mt-10">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            More Customization
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Basic Report
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Monthly Updates
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            24-hour support response time
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Influence of new features
                        </li>
                    </ul>
                </div>
                <div class="rounded-3xl p-8 xl:p-10 ring-1 ring-white/10">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3 id="tier-enterprise" class="text-lg font-semibold leading-8 text-white">Pro</h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-gray-300">
                    </p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span class="text-4xl font-bold tracking-tight text-white">Contact Us</span>
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span class="text-sm font-semibold leading-6 text-gray-300"></span>
                    </p>

                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-300 xl:mt-10">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Full Customization
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Priority Updates
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Decide New Features
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            12-hour, dedicated support response time
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="relative isolate overflow-hidden bg-gray-900">
        <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Boost your Community.<br>Start
                    using our system today.</h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">Join our discord to order!</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Discord</a>
                </div>
            </div>
        </div>
        <svg viewBox="0 0 1024 1024"
            class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]"
            aria-hidden="true">
            <circle cx="512" cy="512" r="512" fill="url(#8d958450-c69f-4251-94bc-4e091a323369)"
                fill-opacity="0.7" />
            <defs>
                <radialGradient id="8d958450-c69f-4251-94bc-4e091a323369">
                    <stop stop-color="#7775D6" />
                    <stop offset="1" stop-color="#E935C1" />
                </radialGradient>
            </defs>
        </svg>
    </div>

    <div class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8">
            <h2 class="text-2xl font-bold leading-10 tracking-tight text-white">Frequently asked questions</h2>
            <p class="mt-6 max-w-2xl text-base leading-7 text-gray-300">Have a different question and can’t find the answer
                you’re looking for? Reach out to our support team by <a href="#"
                    class="font-semibold text-indigo-400 hover:text-indigo-300">joining Discord</a> and we’ll get back
                to you as soon as we can.</p>
            <div class="mt-20">
                <dl
                    class="space-y-16 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:grid-cols-3 lg:gap-x-10">
                    <div>
                        <dt class="text-base font-semibold leading-7 text-white"></dt>
                        <dd class="mt-2 text-base leading-7 text-gray-300"></dd>
                    </div>

                    <!-- More questions... -->
                </dl>
            </div>
        </div>
    </div>
@endsection
