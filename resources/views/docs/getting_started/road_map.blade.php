@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">

        @include('inc.docs.sidebar')
        <div class="flex-auto max-w-3xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
            <article class="">
                <header class="">
                    <p class="text-base font-medium text-slate-300">
                        Getting started
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        Road Map
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    Road Map from Suggestions and what is in the works
                </p>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        In-progress
                    </h3>

                    <div class="bg-gray-600 p-4 rounded-lg">
                        <h3 class="text-2xl">API Endpoint Creation</h3>
                        <p>API is being actively worked on. New endpoints will be added periodicly based on demand. To
                            suggest and endpoint go to #api-endpoint-suggestion in Discord.</p>

                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 10%"></div>
                        </div>
                        <p class="text-gray-400 text-sm">Expected Launch: Continous</p>
                    </div>

                    <div class="bg-gray-600 p-4 rounded-lg">
                        <h3 class="text-2xl">Staff Logs</h3>
                        <p>Add Staff logs into the Admin menu and set up Discord Logging.
                        </p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 10%"></div>
                        </div>
                        <p class="text-gray-400 text-sm">Expected Launch: 4/16/2024</p>
                    </div>

                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Near Future
                    </h3>

                    <div class="bg-gray-600 p-4 rounded-lg">
                        <h3 class="text-2xl">BOLO Systems for MDT</h3>
                        <p>Add Bolos into the MDT.
                        </p>
                        <p class="text-gray-400 text-sm">Start Development: 4/12/24</p>
                    </div>

                    <div class="bg-gray-600 p-4 rounded-lg">
                        <h3 class="text-2xl">In CAD Message System</h3>
                        <p>Just like in the real CAD system (Ie: Spillman Flex, BeaconCAD etc) they allow in system
                            Messaging between units and Dispatchers to talk with each other outside of the Radio System.
                        </p>
                        <p class="text-gray-400 text-sm">Start Development:</p>
                    </div>

                    <div class="bg-gray-600 p-4 rounded-lg">
                        <h3 class="text-2xl">Language Support</h3>
                        <p>Add language support to the CAD System for other languages than english.
                        </p>
                        <p class="text-gray-400 text-sm">Start Development: 5/1/24</p>
                    </div>

                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Distant Future
                    </h3>

                    <div class="bg-gray-600 p-4 rounded-lg">
                        <h3 class="text-2xl">Discord Bot Integration</h3>
                        <p>Add additional features to the BOT like role sync.
                        </p>
                        <p class="text-gray-400 text-sm">Start Development: Need a BOT Developer</p>
                    </div>

                    <div class="bg-gray-600 p-4 rounded-lg">
                        <h3 class="text-2xl">Court System</h3>
                        <p>Flush out Court System and expand ticket and arrest reports. Will also include points on
                            Licenses.
                        </p>
                        <p class="text-gray-400 text-sm">Start Development: Will be moved up sooner if a community can help
                            with feature development.</p>
                    </div>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Will be a moment
                    </h3>

                    <p>No Tasks here yet.</p>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Completed
                    </h3>

                    <div class="bg-gray-600 p-4 rounded-lg">
                        <h3 class="text-2xl">Settings Page Rework</h3>
                        <p>Admin setting pages getting expanded and face lift to make it easier to find and change settings.
                        </p>

                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
                        </div>
                        <p class="text-gray-400 text-sm">Completed: 4/13/24; v1.2.2</p>
                    </div>

                </div>

                <div class="space-y-3" id="questions">

                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Still have questions?
                    </h3>

                    <p class="">
                        Still have questions? <a class="underline hover:no-underline" href="https://discord.gg/tmZWX7q2yZ"
                            target="_BLANK">Talk
                            to support</a>.
                    </p>
                </div>

            </article>

            {{-- <dl class="flex pt-6 mt-6 border-t border-slate-200">
                <!-- <div class="mr-auto text-left"> -->
                <!--   <dt class="text-sm font-normal tracking-tight text-slate-600"> -->
                <!--     Previous -->
                <!--   </dt> -->

                <!--   <dd class="mt-1"> -->
                <!--     <a class="text-base font-semibold text-slate-900 hover:underline" href="#"> -->
                <!--       Blah -->
                <!--     </a> -->
                <!--   </dd> -->
                <!-- </div> -->

                <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-600">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-900 hover:underline" href="#">
                            How does Spinal work?
                        </a>
                    </dd>
                </div>
            </dl> --}}
        </div>
    </main>
@endsection
