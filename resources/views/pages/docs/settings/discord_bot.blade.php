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
                        Set Up A Discord Bot
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">

                </p>
                <x-red-alert>This is only needed on the self hosted options. If you are a Hosted Plan member this is done
                    for you and you can skip this page.</x-red-alert>
                <div class="space-y-3" id="discord_oauth_url">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Discord Oauth URL
                    </h3>

                    <p class="">
                        Discord OAuth2 is requred to use the Discord Login.
                    </p>

                    <p>1. Go to <a class="text-link" href="https://discord.com/developers/applications"
                            target="_blank">https://discord.com/developers/applications</a>
                        and log in with your Discord account.</p>
                    <p>2. Select your application. If you haven't created an application yet, click on "New Application" and
                        follow the prompts to create one. Otherwise, click on your existing application from the list.</p>
                    <p>3. Navigate to OAuth2 Section and configure URL. Once inside your application dashboard, find and
                        click on the "OAuth2" tab from the left sidebar menu. Under the "Redirects" section, locate the
                        "Redirects" input field. Enter the redirect URL with your with /login/discord/handle at the end.
                        Example: https://communitycad.app/login/discord/handle.</p>
                    <p>4. Save Changes</p>
                    <p>5. Keep the "DISCORD_CLIENT_ID" and "DISCORD_CLIENT_SECRET" at the top of the OAuth2 page handy.</p>
                    <x-blue-alert>If you are using the Docker install you do not need to edit the env. You will be prompted
                        to do that during the set up process. You can stop here.</x-blue-alert>
                    <p>6. Edit .env file and edit the "DISCORD_CLIENT_ID" and "DISCORD_CLIENT_SECRET". You can find both of
                        these values at the top of the OAuth2 page. Leave the "DISCORD_REDIRECT_URI" line alone. You do not
                        need to edit this.</p>
                    <p>7. Save .env and you are good to go.</p>

                </div>

                <div class="space-y-3" id="set_up_bot_for_logging_and_discord_roles_feature">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Set up BOT for Logging and Discord Roles Feature
                    </h3>

                    <p class="">
                        This is an optional feature for your server. You must complete this if you wish to use the Discord
                        logging or Discord Roles features in the CAD system.
                    </p>

                    <p>1. Go to <a
                            href="https://discord.com/developers/applications">https://discord.com/developers/applications</a>
                        and log in with your Discord account.</p>
                    <p>2. Select your application. If you haven't created an application yet, click on "New Application" and
                        follow the prompts to create one. Otherwise, click on your existing application from the list. This
                        can be the same application that you made above.</p>
                    <p>3. Navigate to Installation. Copy the screen just like the picture below.</p>
                    <img alt="" src="{{ asset('images/docs/discord-bot-settings.png') }}">
                    <p>4. Copy the install Link after all settings have been saved. Paste it into your web browser and
                        invite the bot to your server.</p>
                    <p>5. Get your bot token. You can find your bot token under 'Bot' then 'Token'.</p>
                    <img alt="" src="{{ asset('images/docs/discord-bot-token.png') }}">
                    <p>6. Edit the .env file
                        "DISCORD_BOT_TOKEN=" and paste that value there. Make sure it starts with "Bot
                        jlkasdjlokfjoiu9032849jhok..."</p>
                    <p>7. Save .env and you are good to go.</p>
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
                        <a class="text-base font-semibold text-slate-200 hover:underline"
                            href="/docs/settings/settings_page">
                            Setting Pages
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
