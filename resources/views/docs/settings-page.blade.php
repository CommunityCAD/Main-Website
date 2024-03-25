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
                        Settings Page
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    How to configure your CAD.
                </p>

                {{-- <div class="mt-4 rounded-lg ">
                    <img alt="Discord Integration" class="mx-auto"
                        src="{{ asset('images/docs/discord-integration-example.png') }}">
                </div> --}}

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Overview
                    </h3>

                    <p class="">
                        This is a current overview of the settings you can edit in your CommunityCAD System. Sorry they are
                        a little ugly looking but I plan on a settings upgrate soon!
                    </p>

                    <p class="">
                        Jump to a setting

                    <ul>
                        <li><a class="underline hover:no-underline" href="#community_logo">Community Logo</a></li>
                        <li><a class="underline hover:no-underline" href="#community_name">Community Name</a></li>
                        <li><a class="underline hover:no-underline" href="#minimum_age">Minimum Age</a></li>
                        <li><a class="underline hover:no-underline" href="#days_until_inactive">Days Until Inactive</a></li>
                        <li><a class="underline hover:no-underline" href="#days_until_reapply">Days Until Reapply</a></li>
                        <li><a class="underline hover:no-underline" href="#postal_map_link">Postal Map Link</a></li>
                        <li><a class="underline hover:no-underline" href="#force_discord_link">Force Discord Link</a></li>
                        <li><a class="underline hover:no-underline" href="#force_steam_link">Force Steam Link</a></li>
                        <li><a class="underline hover:no-underline" href="#application_terms">Application Terms</a></li>
                        <li><a class="underline hover:no-underline" href="#community_intro">Community Intro</a></li>
                        <li><a class="underline hover:no-underline" href="#members_must_apply">Members Must Apply</a></li>
                        <li><a class="underline hover:no-underline" href="#allow_same_name_civilians">Allow Same Name
                                Civilians</a></li>
                        <li><a class="underline hover:no-underline" href="#state_county_city">State</a></li>
                        <li><a class="underline hover:no-underline" href="#state_county_city">Country</a></li>
                        <li><a class="underline hover:no-underline" href="#state_county_city">City</a></li>
                        <li><a class="underline hover:no-underline" href="#officer_name_format">Officer Name Format</a></li>
                    </ul>
                    </p>
                </div>

                <div class="space-y-3" id="community_logo">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Community Logo
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">URL</span>
                    </h3>

                    <p class="">
                        Takes a link for your community Logo.
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
                                    <p>If you are using a link from Discord you may have to remove everything after the "?"
                                        in the URL for it to work.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3" id="community_name">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Community Name
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">String</span>
                    </h3>

                    <p class="">
                        This will be the name of your community. For example River City Roleplay.
                    </p>
                </div>

                <div class="space-y-3" id="minimum_age">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Minimum Age
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Number</span>
                    </h3>

                    <p class="">
                        If you have the "members must apply" setting to True then this setting will be applied. If an
                        applicant applies under this age then thier application will flag for an admin to review it.
                    </p>
                </div>

                <div class="space-y-3" id="days_until_inactive">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Days Until Inactive
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Number</span>
                    </h3>

                    <p class="">
                        Takes a number for how many days until a member is classified as inactive on the CAD.
                    </p>

                    <div class="rounded-md bg-blue-50 p-4 mt-3">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg aria-hidden="true" class="h-5 w-5 text-blue-400" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"
                                        fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-blue-700">
                                    <p>Right now this only effects the number on the dashboard. Soon it will have abilities
                                        like
                                        purge and auto kick after so many days. There is no ETA on this improvement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3" id="days_until_reapply">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Days Until Repapply
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Number</span>
                    </h3>

                    <p class="">
                        If you have the "members must apply" setting to True then this setting will be applied. It will
                        block users from reapplying if inside this date range. If you do not want a "cool down" you can set
                        to 0.
                    </p>
                </div>

                <div class="space-y-3" id="postal_map_link">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Postal Map Link
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">URL</span>
                    </h3>

                    <p class="">
                        If you have a postal map image you can put the link here. It is a link on multiple pages for members
                        to reference to get correct postals.
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
                                    <p>If you are using a link from Discord you may have to remove everything after the "?"
                                        in the URL for it to work.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3" id="force_discord_link">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Force Discord Link
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Boolean</span>
                    </h3>

                    <p class="text-red-500">
                        This is a legacy setting that no longer does anything. Will be removed soon.
                    </p>
                </div>

                <div class="space-y-3" id="force_steam_link">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Force Steam Link
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Boolean</span>
                    </h3>

                    <p class="">
                        Forces users to link thier Steam account while creating thier account the first time. This will be
                        used for in game integration at a later point. The information we collect from this is Steam ID,
                        Steam HEX and Steam Username.
                    </p>
                </div>

                <div class="space-y-3" id="application_terms">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Application Terms
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Markdown</span>
                    </h3>

                    <p class="">
                        If you have the "members must apply" setting to True then this setting will be applied. Terms text
                        on the bottom of the application before a user submits it.
                    </p>
                </div>

                <div class="space-y-3" id="community_intro">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Community Intro
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Markdown</span>
                    </h3>

                    <p class="">
                        Text shown on the home page of the CAD that unlogged in users or applicants will see. Basicly a
                        small about us section.
                    </p>
                </div>

                <div class="space-y-3" id="members_must_apply">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Members Must Apply
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Boolean</span>
                    </h3>

                    <p class="">
                        This setting activates the application side of the CAD for new members. It is useful for full
                        whitelist communities that do not allow any membership. If this setting is FALSE then members just
                        have to create an account and a staff/admin approve it.
                    </p>

                    <p>You can see more about the Application process on my Discord.</p>
                </div>

                <div class="space-y-3" id="allow_same_name_civilians">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Allow Same Name Civilians
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Boolean</span>
                    </h3>

                    <p class="">
                        This will restrict Civilian names to names that have not been taken. This is to prevent RP issues
                        that John Smith shot at the cops and they get mixed up with John Smith that is a preacher.
                    </p>
                </div>

                <div class="space-y-3" id="state_county_city">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        State, County, City
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">String</span>
                    </h3>

                    <p class="">
                        This is the default values for your RP area. State refers to the whole map. County refers to Lore
                        Blaine County. City refers to Lore Los Santos.
                    </p>
                </div>

                <div class="space-y-3" id="officer_name_format">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Officer Name Format
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">String</span>
                    </h3>

                    <p class="">
                        This forces a consistant format on officer names. The accepted values are:
                    <ul class="list-inside list-disc">
                        <li class="">F. Last</li>
                        <li>First Last</li>
                        <li>First L.</li>
                    </ul>
                    </p>

                    <p>If none of these values are entered the default of First Last will be used.</p>
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
