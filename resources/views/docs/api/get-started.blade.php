{{-- @extends('layouts.docs')

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
                        Get Started
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    Get started with our API
                </p>

                <div class="mt-4 rounded-lg ">
                    <img alt="Discord Integration" class="mx-auto"
                        src="{{ asset('images/docs/get-started-portal-screen.png') }}">
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Overview
                    </h3>

                    <p class="">
                        Here is all the information you need to get your CAD up and running. We will cover how to create an
                        account and how to customize the CAD for your community.
                    </p>
                </div>

                <div class="space-y-3" id="step1">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Create An Account
                    </h3>

                    <p class="">
                        First click the “Login/Apply with Discord” button. Next click “Link Steam Account” and enter your
                        username and password. Now click next and enter the name you want to be called in game. Then click
                        next. You will now be asked to enter your real name, email, and Date Of Birth. Then click done. If
                        you are the owner it will pull up the CAD. If you are a member you will need to wait for an owner or
                        staff member to approve you.
                    </p>

                    <div class="rounded-md bg-yellow-50 p-4 mt-3">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"
                                        fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-yellow-700">
                                    <p>If you do not want to force the Steam Link contact Support in your channel and we can
                                        shut it off for you. This is just for the first login. After that you can control it
                                        as you please.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3" id="step2">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Portal Page
                    </h3>

                    <div class="">
                        <p>When you first login to the CAD the sidebar will have preset departments and logos.
                            All of these departments and logos can be customized in the Admin menu. At the bottom is where
                            you
                            can manage members and settings. In the center is the dashboard where you have announcements and
                            stats. These stats update live and let you know your play time, total members and online
                            members.
                        </p>

                        <p>The CAD is set up in three main groups:</p>
                        <ul class="list-inside list-disc mt-3">
                            <li><span class="font-bold">Supervisor:</span> This houses all "in-game" actions like reports.
                            </li>
                            <li><span class="font-bold">Staff:</span> This is where all the day to day operations of the CAD
                                lives. Includes User Departments, Applications, etc.</li>
                            <li><span class="font-bold">Admin:</span> This houses all settings and values for the CAD.
                                Includes Roles, Setting Super Users, etc.</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-3" id="step3">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Customizing Your CAD
                    </h3>

                    <div class="rounded-md bg-blue-50 p-4 mt-3">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                        fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-blue-700">
                                    <p>It is recommended that you set up your CAD in the <span
                                            class="font-bold text-red-500">Admin</span> menus before adding members.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="">Manage Roles: Create Roles for members to have access to different parts of the CAD.
                    </p>
                    <p class="">Manage Departments: Create Departments for applicants to apply for and members to be
                        added to.</p>
                    <p class="">Manage 10 Codes: Customize 10 codes for your community.</p>
                    <p class="">Manage Civilian Levels: Customize Civilian Levels to allow different levels of RP for
                        different Civs.</p>
                    <div class="rounded-md bg-blue-50 p-4 mt-3">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                        fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-blue-700">
                                    <p>There will be more about Civilian Levels coming soon!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="">Manage DAs: Customize DA levels used by your community.</p>
                    <p class="">Manage License Types: Customize the different licenses Civilians can have.</p>
                    <p class="">Manage Report Types: Customize different reports LEO/Fire/EMS can fill out in the CAD
                        System.</p>
                    <p class="">Manage Penal Code: Customize Penal Code. A default one has been loaded. The reader
                        friendly version can be found <a
                            href="https://docs.google.com/document/d/1N8FJdiSdPQhnx32Czsl6EBS9HsYjpibQpPKjjebRLYk/edit">here</a>
                    </p>
                    <p class="">You will learn more about CAD Settings and Discord Channels in the next two pages.</p>
                </div>

                <div class="space-y-3" id="step3">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Gaining Access to the CAD System
                    </h3>

                    <div class="rounded-md bg-blue-50 p-4 mt-3">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                        fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-blue-700">
                                    <p>It is recommended that you set up your departments in <span
                                            class="font-bold text-red-500">Admin > Departments</span> before adding any
                                        users to
                                        departments including yourself.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="">
                        To access the CAD System you need an owner, admin, or supervisor to add you to a department. To add
                        a user to a department go to <span class="font-bold text-yellow-500">Staff > User
                            Departments</span>.
                        Search for the
                        user and click view. Next click the green plus. Choose the users department, callsign, and rank.
                        Then click create.</p>

                    <p>Next the user will need to create an officer. You can find the officer under <span
                            class="font-bold">Member Portal > Civilian Portal > Officers</span>. If the user has more
                        departments that do not have an officer there will be a green plus. Fill out all the info you wish
                        to have and click create.
                    </p>

                    <div class="mt-4 rounded-lg ">
                        <img alt="Discord Integration" class="mx-auto"
                            src="{{ asset('images/docs/get-started-officer-create-screen.png') }}">
                    </div>

                    <p>You may now navigate back to the CAD System and you will have access to the system.</p>

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

            <dl class="flex pt-6 mt-6 border-t border-slate-200">
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
                    <dt class="text-sm font-normal tracking-tight">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold hover:underline" href="{{ route('docs.settings-page') }}">
                            Settings Page
                        </a>
                    </dd>
                </div>
            </dl>
        </div>
    </main>
@endsection --}}
