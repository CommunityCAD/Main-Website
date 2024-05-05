<label
    class="fixed bottom-0 left-0 z-50 flex items-center justify-center w-12 h-12 mb-4 ml-4 bg-white border rounded-full shadow-lg cursor-pointer text-slate-600 border-slate-300 lg:hidden transition duration-200 ease-in-out active:scale-95"
    for="navigation">
    <svg class="w-6 h-6" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M4 8h16M4 16h16" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</label>

<input class="hidden peer" id="navigation" name="navigation" type="checkbox" />

<div class="fixed top-[3.5rem] h-screen shadow-xl px-4 left-0 hidden peer-checked:block lg:relative lg:top-0 lg:h-auto lg:px-0 lg:block lg:flex-none lg:shadow-none"
    id="">
    <div class="absolute inset-y-0 right-0 w-full lg:w-[50vw] bg-white lg:bg-slate-50"></div>

    <nav class="sticky top-[4.5rem] w-64 pr-4 text-base lg:text-sm xl:w-72 xl:pr-16 mb-4 overflow-y-auto ">
        <ul class="-ml-0.5 h-[calc(100vh-4.5rem)] py-7 pl-0.5 space-y-8" role="list">
            <li>
                <h3 class="font-semibold tracking-tight text-slate-900">
                    Getting started
                </h3>
                <ul class="pl-3 mt-3 space-y-2" role="list">
                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/getting_started/installation')) !text-black underline @endif"
                            href="/docs/getting_started/installation">
                            Installation
                        </a>
                    </li>
                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/getting_started/settings-page')) !text-black underline @endif"
                            href="/docs/getting_started/settings-page">
                            Settings Page
                        </a>
                    </li>

                    {{-- <li>
                        <a class=" hover:text-black @if (request()->is('docs/getting_started/discord-bot-integration')) !text-black underline @endif"
                            href="/docs/getting_started/discord-bot-integration">
                            Discord Logging Integration
                        </a>
                    </li> --}}

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
            </li>
            <li>
                <ul class="pl-3 space-y-2" role="list">
                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/api/get-started')) !text-black underline @endif"
                            href="/docs/api/get-started">
                            Get Started
                        </a>
                    </li>

                    <li x-data="{ isOpen: @if (request()->is('docs/api/emergency/*')) true @else false @endif }">
                        <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                            class="hover:text-black flex items-center">
                            Emergency
                            <svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="heroicon-ui"
                                    d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z">
                                </path>
                            </svg>
                        </button>

                        <ul class="mt-2 py-1 space-y-2 z-20 border-l-2 border-black" x-show="isOpen">
                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/panic')) !text-black underline @endif"
                                    href="/docs/api/emergency/panic">
                                    Panic
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/unit_status')) !text-black underline @endif"
                                    href="/docs/api/emergency/unit_status">
                                    Unit Status
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/unit_location')) !text-black underline @endif"
                                    href="/docs/api/emergency/unit_location">
                                    Unit Location
                                </a>
                            </li>
                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/get_active_unit')) !text-black underline @endif"
                                    href="/docs/api/emergency/get_active_unit">
                                    Get Active Unit
                                </a>
                            </li>
                            <li>
                                <hr>
                            </li>
                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/get_calls')) !text-black underline @endif"
                                    href="/docs/api/emergency/get_calls">
                                    Get Calls
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/get_call')) !text-black underline @endif"
                                    href="/docs/api/emergency/get_call">
                                    Get Call
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/create_call')) !text-black underline @endif"
                                    href="/docs/api/emergency/create_call">
                                    Create Call
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/add_call_note')) !text-black underline @endif"
                                    href="/docs/api/emergency/add_call_note">
                                    Add Call Note
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/edit_call')) !text-black underline @endif"
                                    href="/docs/api/emergency/edit_call">
                                    Edit Call
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/attach_unit')) !text-black underline @endif"
                                    href="/docs/api/emergency/attach_unit">
                                    Attach Unit
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/detach_unit')) !text-black underline @endif"
                                    href="/docs/api/emergency/detach_unit">
                                    Detach Unit
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/close_call')) !text-black underline @endif"
                                    href="/docs/api/emergency/close_call">
                                    Close Call
                                </a>
                            </li>

                            <li>
                                <hr>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/vehicle_lookup')) !text-black underline @endif"
                                    href="/docs/api/emergency/vehicle_lookup">
                                    Vehicle Lookup
                                </a>
                            </li>
                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/civilian_lookup')) !text-black underline @endif"
                                    href="/docs/api/emergency/civilian_lookup">
                                    Civilian Lookup
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li x-data="{ isOpen: @if (request()->is('docs/api/civilian/*')) true @else false @endif }">
                        <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                            class="hover:text-black flex items-center">
                            Civilian
                            <svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="heroicon-ui"
                                    d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z">
                                </path>
                            </svg>
                        </button>

                        <ul class="mt-2 py-1 space-y-2 z-20 border-l-2 border-black" x-show="isOpen">
                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/panic')) !text-black underline @endif"
                                    href="/docs/api/emergency/panic">
                                    Set Civilian
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/unit_status')) !text-black underline @endif"
                                    href="/docs/api/emergency/unit_status">
                                    Get Civilians
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/unit_status')) !text-black underline @endif"
                                    href="/docs/api/emergency/unit_status">
                                    Get Civilian
                                </a>
                            </li>

                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/unit_location')) !text-black underline @endif"
                                    href="/docs/api/emergency/unit_location">
                                    New Civilian
                                </a>
                            </li>
                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/get_active_unit')) !text-black underline @endif"
                                    href="/docs/api/emergency/get_active_unit">
                                    Edit Civilian
                                </a>
                            </li>
                            <li>
                                <hr>
                            </li>
                            <li class="ml-2">
                                <a class=" hover:text-black @if (request()->is('docs/api/emergency/get_calls')) !text-black underline @endif"
                                    href="/docs/api/emergency/get_calls">
                                    Register Vehicle
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li>
                <h3 class="font-semibold tracking-tight text-slate-900">
                    Resources
                </h3>

                <ul class="pl-3 mt-3 space-y-2" role="list">
                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/getting_started/road_map')) !text-black underline @endif"
                            href="/docs/getting_started/road_map">
                            Road Map
                        </a>
                    </li>
                    <li>
                        <a class=" hover:text-black @if (request()->is('docs/getting_started/known_issues')) !text-black underline @endif"
                            href="/docs/getting_started/known_issues">
                            Known Issues
                        </a>
                    </li>
                    {{-- <li>
                        <a class=" hover:text-black @if (request()->is('docs/terms_of_service')) !text-black underline @endif"
                            href="/docs/terms_of_service">
                            Terms of Service
                        </a>
                    </li> --}}
                </ul>
            </li>
        </ul>
    </nav>
</div>
