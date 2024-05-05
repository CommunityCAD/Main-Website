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
                        Road Map
                    </h1>
                </header>

                <div class="space-y-3" id="in-progress">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        In-progress
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">API Endpoint Creation</h3>
                            <p>API is being actively worked on. New endpoints will be added periodicly based on demand. To
                                suggest and endpoint go to #api-endpoint-suggestion in Discord.</p>
                            <p>5/5/24 Update: Emergency Endpoints are complete. Moving on to Civilian Endpoints.</p>

                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 50%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Expected Launch: Continous</p>
                        </div>

                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">DMV and ATF System</h3>
                            <p>Optional systems that make licenses and firearms approval based and not automatic.</p>

                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 5%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Expected Launch: Soon</p>
                        </div>

                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">Character Manager</h3>
                            <p>Admin System for Civilian Management. Allows to edit/delete civilians.</p>

                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 5%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Expected Launch: Soon</p>
                        </div>

                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">Active Dispatcher Endpoint</h3>
                            <p>Add endpoint that returns if there is an active dispatcher.</p>

                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 5%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Expected Launch: Soon</p>
                        </div>

                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">Weapon Serial # Search</h3>
                            <p>Additional Lookup in the MDT that allows officers to look up serial #s on firearms</p>

                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 5%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Expected Launch: Soon</p>
                        </div>

                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">Penal Code Sorter</h3>
                            <p>Better sorting options and look of the penal code screens everywhere.</p>

                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 5%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Expected Launch: Soon</p>
                        </div>

                    </div>
                </div>

                <div class="space-y-3" id="near_future">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Near Future
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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

                </div>

                <div class="space-y-3" id="distant_future">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Distant Future
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">Court System</h3>
                            <p>Flush out Court System and expand ticket and arrest reports. Will also include points on
                                Licenses.
                            </p>
                            <p class="text-gray-400 text-sm">Start Development: Will be moved up sooner if a community can
                                help
                                with feature development.</p>
                        </div>
                    </div>

                </div>

                <div class="space-y-3" id="completed">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Completed
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">Discord Bot Integration</h3>
                            <p>Add additional features to the BOT like role sync.
                            </p>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Completed: 5/4/24; v1.4.0</p>
                        </div>
                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">Staff Logs</h3>
                            <p>Add Staff logs into the Admin menu and set up Discord Logging.
                            </p>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Completed: 5/4/24; v1.4.0</p>
                        </div>

                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">Settings Page Rework</h3>
                            <p>Admin setting pages getting expanded and face lift to make it easier to find and change
                                settings.
                            </p>

                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Completed: 4/13/24; v1.2.2</p>
                        </div>

                        <div class="bg-gray-600 p-4 rounded-lg">
                            <h3 class="text-2xl">BOLO Systems for MDT</h3>
                            <p>Add Bolos into the MDT.
                            </p>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
                            </div>
                            <p class="text-gray-400 text-sm">Completed: 4/19/24; v1.3.2</p>
                        </div>
                    </div>
                </div>

                @include('inc.docs.support')

            </article>

            <dl class="flex pt-6 mt-6 border-t border-slate-200">
                <div class="mr-auto text-left">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Previous
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs/hosted_plan">
                            Hosted Plan
                        </a>
                    </dd>
                </div>

                {{-- <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs/installation">
                            Installation
                        </a>
                    </dd>
                </div> --}}
            </dl>
        </div>
    </main>
@endsection
