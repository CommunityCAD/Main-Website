<label
    class="fixed bottom-0 left-0 z-50 flex items-center justify-center w-12 h-12 mb-4 ml-4 bg-white border rounded-full shadow-lg cursor-pointer text-slate-600 border-slate-300 lg:hidden transition duration-200 ease-in-out active:scale-95"
    for="navigation">
    <svg class="w-6 h-6" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M4 8h16M4 16h16" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</label>

<input class="hidden peer" id="navigation" name="navigation" type="checkbox" />

<div
    class="fixed top-[3.5rem] h-screen shadow-xl px-4 left-0 hidden peer-checked:block lg:relative lg:top-0 lg:h-auto lg:px-0 lg:block lg:flex-none lg:shadow-none">
    <div class="absolute inset-y-0 right-0 w-full lg:w-[50vw] bg-white lg:bg-slate-50"></div>

    <nav class="sticky top-[4.5rem] w-64 pr-8 text-base lg:text-sm xl:w-72 xl:pr-16">
        <ul class="-ml-0.5 h-[calc(100vh-4.5rem)] overflow-y-auto py-7 pl-0.5 space-y-8" role="list">
            <li>
                <h3 class="font-semibold tracking-tight text-slate-900">
                    Getting started
                </h3>

                <ul class="pl-3 mt-3 space-y-2" role="list">
                    <li>
                        <a class="hover:text-black @if (request()->is('docs/get-started')) !text-black underline @endif"
                            href="{{ route('docs.get-started') }}">
                            Get Started
                        </a>
                    </li>

                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/settings-page')) !text-black underline @endif"
                            href="{{ route('docs.settings-page') }}">
                            Settings Page
                        </a>
                    </li>

                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/discord-bot-integration')) !text-black underline @endif"
                            href="{{ route('docs.discord-bot-integration') }}">
                            Discord Logging Integration
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <h3 class="font-semibold tracking-tight text-slate-900">
                    Settings Resources - Coming Soon!
                </h3>

                <ul class="pl-3 mt-3 space-y-2" role="list">
                    <li>
                        <a class="text-slate-600 hover:text-slate-800" href="#">

                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <h3 class="font-semibold tracking-tight text-slate-900">
                    API Resources
                </h3>

                <ul class="pl-3 mt-3 space-y-2" role="list">
                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/api/get-started')) !text-black underline @endif"
                            href="{{ route('docs.api.get-started') }}">
                            Get Started
                        </a>
                    </li>
                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/api/911-call')) !text-black underline @endif"
                            href="{{ route('docs.api.911-call') }}">
                            911 Call
                        </a>
                    </li>
                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/api/panic-button')) !text-black underline @endif"
                            href="{{ route('docs.api.panic-button') }}">
                            Panic Button
                        </a>
                    </li>

                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/api/civilian')) !text-black underline @endif"
                            href="{{ route('docs.api.civilian') }}">
                            Civilian Endpoints
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
</div>
