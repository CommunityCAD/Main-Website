<div>
    <div class="py-4 text-gray-200">
        <div class="ml-6 text-lg font-bold flex items-center">
            <img alt="Court Logo" class="w-12" src="{{ asset('images/default_images/communitycad.png') }}">
            <div class="ml-3">
                <p>CommunityCAD</p>
                <p>Docs</p>
            </div>
        </div>
        <ul class="mt-6 ml-5 text-sm font-medium text-slate-200">
            <li class="relative px-3 py-2 flex items-center">
                <svg aria-hidden="true" class="w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                <span class="ml-4">Getting Started</span>
            </li>

            <li class="ml-6 relative px-4 py-2">
                <a class="flex items-center @if (request()->is('docs')) !text-purple-500 @endif" href="/docs">
                    <span class="">Home</span>
                </a>
            </li>

            <li class="ml-6 relative px-4 py-2">
                <a class="flex items-center @if (request()->is('docs/installation')) !text-purple-500 @endif"
                    href="/docs/installation">
                    <span class="">Installation</span>
                </a>
            </li>

            <li class="ml-6 relative px-4 py-2">
                <a class="flex items-center @if (request()->is('docs/hosted_plan')) !text-purple-500 @endif"
                    href="/docs/hosted_plan">
                    <span class="">Hosted Plan</span>
                </a>
            </li>

            <li class="ml-6 relative px-4 py-2">
                <a class="flex items-center @if (request()->is('docs/road_map')) !text-purple-500 @endif"
                    href="/docs/road_map">
                    <span class="">Road Map</span>
                </a>
            </li>

            <li class="relative px-3 py-2 flex items-center mt-4">
                <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="ml-4">Settings & Integration</span>
            </li>

            <li class="ml-6 relative px-4 py-2">
                <a class="flex items-center @if (request()->is('docs/settings/settings_page')) !text-purple-500 @endif"
                    href="/docs/settings/settings_page">
                    <span class="">Setting Pages</span>
                </a>
            </li>

            <li class="ml-6 relative px-4 py-2">
                <a class="flex items-center @if (request()->is('docs/settings/discord_bot')) !text-purple-500 @endif"
                    href="/docs/settings/discord_bot">
                    <span class="">Discord Bot</span>
                </a>
            </li>

            <li class="ml-6 relative px-4 py-2">
                <a class="flex items-center @if (request()->is('docs/settings/fivem_scripts')) !text-purple-500 @endif"
                    href="/docs/settings/fivem_scripts">
                    <span class="">FiveM Scripts</span>
                </a>
            </li>

            <li class="relative px-3 py-2 flex items-center mt-4">
                <svg class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="ml-4">API Resource</span>
            </li>

            <li class="ml-6 relative px-4 py-2">
                <a class="flex items-center @if (request()->is('docs/api/get_started')) !text-purple-500 @endif"
                    href="/docs/api/get_started">
                    <span>Get Started</span>
                </a>
            </li>

            <li class="ml-6 relative px-4 py-2" x-data="{ isOpen: @if (request()->is('docs/api/emergency/*')) true @else false @endif }">
                <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                    class="flex items-center @if (request()->is('docs/api/emergency/*')) !text-purple-500 @endif">
                    Emergency
                    <svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="heroicon-ui"
                            d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z">
                        </path>
                    </svg>
                </button>

                <ul class="mt-2 py-1 space-y-2 z-20 border-l-2 border-purple-500" x-show="isOpen">
                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/panic')) !text-purple-500 @endif"
                            href="/docs/api/emergency/panic">
                            Panic
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/unit_status')) !text-purple-500 @endif"
                            href="/docs/api/emergency/unit_status">
                            Unit Status
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/unit_location')) !text-purple-500 @endif"
                            href="/docs/api/emergency/unit_location">
                            Unit Location
                        </a>
                    </li>
                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/get_active_unit')) !text-purple-500 @endif"
                            href="/docs/api/emergency/get_active_unit">
                            Get Active Unit
                        </a>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/get_calls')) !text-purple-500 @endif"
                            href="/docs/api/emergency/get_calls">
                            Get Calls
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/get_call')) !text-purple-500 @endif"
                            href="/docs/api/emergency/get_call">
                            Get Call
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/create_call')) !text-purple-500 @endif"
                            href="/docs/api/emergency/create_call">
                            Create Call
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/add_call_note')) !text-purple-500 @endif"
                            href="/docs/api/emergency/add_call_note">
                            Add Call Note
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/edit_call')) !text-purple-500 @endif"
                            href="/docs/api/emergency/edit_call">
                            Edit Call
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/attach_unit')) !text-purple-500 @endif"
                            href="/docs/api/emergency/attach_unit">
                            Attach Unit
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/detach_unit')) !text-purple-500 @endif"
                            href="/docs/api/emergency/detach_unit">
                            Detach Unit
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/close_call')) !text-purple-500 @endif"
                            href="/docs/api/emergency/close_call">
                            Close Call
                        </a>
                    </li>

                    <li>
                        <hr>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/vehicle_lookup')) !text-purple-500 @endif"
                            href="/docs/api/emergency/vehicle_lookup">
                            Vehicle Lookup
                        </a>
                    </li>
                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/civilian_lookup')) !text-purple-500 @endif"
                            href="/docs/api/emergency/civilian_lookup">
                            Civilian Lookup
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ml-6 relative px-4 py-2" x-data="{ isOpen: @if (request()->is('docs/api/civilian/*')) true @else false @endif }">
                <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                    class="flex items-center @if (request()->is('docs/api/civilian/*')) !text-purple-500 @endif">
                    Civilian
                    <svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="heroicon-ui"
                            d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z">
                        </path>
                    </svg>
                </button>

                <ul class="mt-2 py-1 space-y-2 z-20 border-l-2 border-purple-500" x-show="isOpen">
                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/civilian_lookup')) !text-purple-500 @endif"
                            href="/docs/api/emergency/panic">
                            Set Civilian
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/civilian_lookup')) !text-purple-500 @endif"
                            href="/docs/api/emergency/unit_status">
                            Get Civilians
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/civilian_lookup')) !text-purple-500 @endif"
                            href="/docs/api/emergency/unit_status">
                            Get Civilian
                        </a>
                    </li>

                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/civilian_lookup')) !text-purple-500 @endif"
                            href="/docs/api/emergency/unit_location">
                            New Civilian
                        </a>
                    </li>
                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/civilian_lookup')) !text-purple-500 @endif"
                            href="/docs/api/emergency/get_active_unit">
                            Edit Civilian
                        </a>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li class="ml-2">
                        <a class="flex items-center @if (request()->is('docs/api/emergency/civilian_lookup')) !text-purple-500 @endif"
                            href="/docs/api/emergency/get_calls">
                            Register Vehicle
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
