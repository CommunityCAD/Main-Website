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
                        Getting Started with our Hosted Plan
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">

                </p>

                <div class="space-y-3" id="thank_you">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Thank you!!
                    </h3>

                    <p class="">
                        First thank you for supporting our project! This all started as a dream a long time ago and now to
                        have it become a reality is amazing. Thank you!
                    </p>
                </div>

                <div class="space-y-3" id="configure_your_system">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Configure your system
                    </h3>
                    <x-blue-alert><span class="font-bold">Notice:</span> It is a good idea to complete all set up steps
                        before inviting your server to join.</x-blue-alert>

                    <p class="">
                        Once you get the @everyone ping in your deticated support channel your system is up and ready to go.
                        First thing to do is log in to the system. Anyone that you requested to be an owner will have
                        immediate access.</p>

                    <p class="">
                        First thing is to set up the settings. You can find them under <span class="text-red-600">Admin >
                            CAD Settings</span>. Each setting has help text with it to let you know what it does. If you
                        have any questions you can read more <a class="text-link"
                            href="/docs/settings/settings_pages">here</a>.
                    </p>

                    <p class="">
                        Next I would go set up your departments from <span class="text-red-600">Admin > Manage
                            Departments</span>. Some defaults have been preloaded but you are welcome to delete/edit
                        anything
                        you want here. Once you make a department it is best to leave it alone outside of updating logos.
                        Changes here can cause issues within the CAD after it has been running for a while.
                    </p>

                    <p class="">
                        From there you can go to <span class="text-red-600">Admin > Manage
                            Roles</span>. This will allow you to set roles up for the CAD that you can use to give
                        staff/admins access to what they need. More detailed documentation will be created at a later time.
                        If you have any questions reach out in your deticated support channel.
                    </p>

                    <p class="">
                        From there you can go to <span class="text-red-600">Admin > Manage
                            Penal Code</span>. This has been preloaded based on <a class="text-link"
                            href="https://docs.google.com/document/d/1N8FJdiSdPQhnx32Czsl6EBS9HsYjpibQpPKjjebRLYk/edit"
                            target="_blank">this
                            penal code for San Andreas</a>. You are welcome to change what ever you wish. If you
                        want to have everything deleted you can contact support and we can delete everything for you. The
                        penal code is best to be set up once and not edited or deleted after the inital set up. You can add
                        or change wording but not the compelete code.
                    </p>

                    <p>Last go through and set up what ever you options are for Civilian Levels, Disinplary Actions, License
                        Types and Report Types. Some default values have been preloaded but you can edit everything to your
                        liking. Civilian levels will have its own documentation at a later date.</p>
                </div>

                <div class="space-y-3" id="overview">

                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Set up our Discord Bot
                    </h3>
                    <x-yellow-alert>This bot is only for our hosted plan. If you are self hosting you have to set up your
                        own bot.</x-yellow-alert>
                    <p class="">
                        Community CAD is proud to announce that we have started integrating Discord into the CAD system!
                        Right now we have the following options to be logged:
                    </p>

                    <ul class="list-disc list-inside p-4">
                        <li>CAD On/Off Duty Alert</li>
                        <li>Civilian 911 Call Creation</li>
                        <li>Some Admin Actions logging</li>
                    </ul>

                    <p>I have the planned alerts/logging actions:</p>
                    <ul class="list-disc list-inside p-4">
                        <li>New Applications for Staff to review</li>
                        <li>Application actions alerts so the public knows the status of their application at any given
                            point.</li>
                        <li>New Pending Accounts if not using the application system</li>
                    </ul>

                    <p>Some of these are already in the system to be configured. They WILL NOT work. Check our Discord for
                        updates on the status of these alerts.</p>
                </div>

                <div class="space-y-3" id="step1">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Step 1: Invite the Discord Bot to your server
                    </h3>

                    <p class="">
                        Invite the bot to your server with the link below. Once done return to this page.
                        <a class="my-3" href="https://discord.com/oauth2/authorize?client_id=942992379902828564"
                            target="_BLANK">
                            <button
                                class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                                type="button">Invite BOT</button>
                        </a>
                    </p>
                    <x-yellow-alert>Do not change any of the permissions of the bot. It DOES NOT have
                        Administrator perms. Only to send and manage messages. Changing these will make the
                        bot
                        not work.</x-yellow-alert>

                    <x-blue-alert>The bot will show as "Offline" however it is always online and working. This is an
                        known issue and will be fixed at a later time.</x-blue-alert>
                </div>

                <div class="space-y-3" id="step2">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Step 2: Create Channels for the BOT to send messages in
                    </h3>

                    <div class="">
                        <p>Create channels that you wish to have for logging.</p>
                        <p class="">Alerts can go to the same channel. However the same alert can't be sent to two
                            different channels.</p>
                        <p class="">The bot must be able to view and send messages in these channels.</p>
                    </div>

                    <x-blue-alert>I would suggest using a catagory so that the bot has permissions to view and send
                        messages
                        to the channels.</x-blue-alert>
                </div>

                <div class="space-y-3" id="step3">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Step 3: Configure CAD Settings
                    </h3>

                    <p class="">
                        Under <span class="text-bold text-red-500">Admin > CAD Settings > Discord Logging</span> you will
                        be able to add
                        channels that you wish to send the alerts to.
                    </p>

                    <p class="">Make sure you have developer mode enabled on Discord then right click on the channel
                        name in Discord
                        and choose "Copy Channel ID". Paste the Channel ID into the alert you wish to be posted in that
                        channel.</p>
                    <p class="">
                        Click save and you are good to go!
                    </p>

                </div>

                @include('inc.docs.support')

            </article>

            <dl class="flex pt-6 mt-6 border-t border-slate-200">
                <div class="mr-auto text-left">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Previous
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs/installation">
                            Installation
                        </a>
                    </dd>
                </div>

                <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline"
                            href="/docs/settings/settings_page">
                            Settings Page
                        </a>
                    </dd>
                </div>
            </dl>
        </div>
    </main>
@endsection
