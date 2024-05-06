<div class="w-full text-gray-300 bg-[#124559]">
    <div class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 "
        x-data="{ open: false }">
        <div class="flex flex-row items-center justify-between p-4">
            <img alt="" height="40" src="{{ asset('images/default_images/communitycad.png') }}" width="40">
            <a class="ml-3 text-lg font-semibold tracking-widest uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline"
                href="/">
                CommunityCAD
            </a>
            <button @click="open = !open" class="rounded-lg md:hidden focus:outline-none focus:shadow-outline">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path clip-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        fill-rule="evenodd" x-show="!open"></path>
                    <path clip-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        fill-rule="evenodd" x-show="open"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-between md:flex-row">
            <ul class="md:flex items-center md:space-x-6 space-y-3 md:space-y-0">
                <li class="text-semibold text-white"><a href="/">Home</a></li>
                <li class="text-semibold text-white"><a href="#features">Features</a></li>
                <li class="text-semibold text-white"><a href="#reviews">Reviews</a></li>
                <li class="text-semibold text-white"><a href="/docs">Docs</a></li>
            </ul>
            <ul class="flex items-center space-x-6 mt-5">
                <li>
                    <a href="https://github.com/communitycad/communitycad">
                        <svg class="h-8 w-8" fill="#000000"
                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                            version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <rect height="800" id="Icons" style="fill:none;" width="1280" x="0" y="-192">
                                </rect>
                                <g id="Icons1" serif:id="Icons">
                                    <g id="Strike"> </g>
                                    <g id="H1"> </g>
                                    <g id="H2"> </g>
                                    <g id="H3"> </g>
                                    <g id="list-ul"> </g>
                                    <g id="hamburger-1"> </g>
                                    <g id="hamburger-2"> </g>
                                    <g id="list-ol"> </g>
                                    <g id="list-task"> </g>
                                    <g id="trash"> </g>
                                    <g id="vertical-menu"> </g>
                                    <g id="horizontal-menu"> </g>
                                    <g id="sidebar-2"> </g>
                                    <g id="Pen"> </g>
                                    <g id="Pen1" serif:id="Pen"> </g>
                                    <g id="clock"> </g>
                                    <g id="external-link"> </g>
                                    <g id="hr"> </g>
                                    <g id="info"> </g>
                                    <g id="warning"> </g>
                                    <g id="plus-circle"> </g>
                                    <g id="minus-circle"> </g>
                                    <g id="vue"> </g>
                                    <g id="cog"> </g>
                                    <path
                                        d="M32.029,8.345c-13.27,0 -24.029,10.759 -24.029,24.033c0,10.617 6.885,19.624 16.435,22.803c1.202,0.22 1.64,-0.522 1.64,-1.16c0,-0.569 -0.02,-2.081 -0.032,-4.086c-6.685,1.452 -8.095,-3.222 -8.095,-3.222c-1.093,-2.775 -2.669,-3.514 -2.669,-3.514c-2.182,-1.492 0.165,-1.462 0.165,-1.462c2.412,0.171 3.681,2.477 3.681,2.477c2.144,3.672 5.625,2.611 6.994,1.997c0.219,-1.553 0.838,-2.612 1.526,-3.213c-5.336,-0.606 -10.947,-2.669 -10.947,-11.877c0,-2.623 0.937,-4.769 2.474,-6.449c-0.247,-0.608 -1.072,-3.051 0.235,-6.36c0,0 2.018,-0.646 6.609,2.464c1.917,-0.533 3.973,-0.8 6.016,-0.809c2.041,0.009 4.097,0.276 6.017,0.809c4.588,-3.11 6.602,-2.464 6.602,-2.464c1.311,3.309 0.486,5.752 0.239,6.36c1.54,1.68 2.471,3.826 2.471,6.449c0,9.232 -5.62,11.263 -10.974,11.858c0.864,0.742 1.632,2.208 1.632,4.451c0,3.212 -0.029,5.804 -0.029,6.591c0,0.644 0.432,1.392 1.652,1.157c9.542,-3.185 16.421,-12.186 16.421,-22.8c0,-13.274 -10.76,-24.033 -24.034,-24.033"
                                        id="github" style="fill:#ffffff;"></path>
                                    <g id="logo"> </g>
                                    <g id="radio-check"> </g>
                                    <g id="eye-slash"> </g>
                                    <g id="eye"> </g>
                                    <g id="toggle-off"> </g>
                                    <g id="shredder"> </g>
                                    <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"> </g>
                                    <g id="react"> </g>
                                    <g id="check-selected"> </g>
                                    <g id="turn-off"> </g>
                                    <g id="code-block"> </g>
                                    <g id="user"> </g>
                                    <g id="coffee-bean"> </g>
                                    <g id="coffee-beans">
                                        <g id="coffee-bean1" serif:id="coffee-bean"> </g>
                                    </g>
                                    <g id="coffee-bean-filled"> </g>
                                    <g id="coffee-beans-filled">
                                        <g id="coffee-bean2" serif:id="coffee-bean"> </g>
                                    </g>
                                    <g id="clipboard"> </g>
                                    <g id="clipboard-paste"> </g>
                                    <g id="clipboard-copy"> </g>
                                    <g id="Layer1"> </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li><a href="{{ config('app.main_discord_link') }}">
                        <svg class="h-8 w-8" fill="#000000" preserveAspectRatio="xMidYMid" version="1.1"
                            viewBox="0 -28.5 256 256" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M216.856339,16.5966031 C200.285002,8.84328665 182.566144,3.2084988 164.041564,0 C161.766523,4.11318106 159.108624,9.64549908 157.276099,14.0464379 C137.583995,11.0849896 118.072967,11.0849896 98.7430163,14.0464379 C96.9108417,9.64549908 94.1925838,4.11318106 91.8971895,0 C73.3526068,3.2084988 55.6133949,8.86399117 39.0420583,16.6376612 C5.61752293,67.146514 -3.4433191,116.400813 1.08711069,164.955721 C23.2560196,181.510915 44.7403634,191.567697 65.8621325,198.148576 C71.0772151,190.971126 75.7283628,183.341335 79.7352139,175.300261 C72.104019,172.400575 64.7949724,168.822202 57.8887866,164.667963 C59.7209612,163.310589 61.5131304,161.891452 63.2445898,160.431257 C105.36741,180.133187 151.134928,180.133187 192.754523,160.431257 C194.506336,161.891452 196.298154,163.310589 198.110326,164.667963 C191.183787,168.842556 183.854737,172.420929 176.223542,175.320965 C180.230393,183.341335 184.861538,190.991831 190.096624,198.16893 C211.238746,191.588051 232.743023,181.531619 254.911949,164.955721 C260.227747,108.668201 245.831087,59.8662432 216.856339,16.5966031 Z M85.4738752,135.09489 C72.8290281,135.09489 62.4592217,123.290155 62.4592217,108.914901 C62.4592217,94.5396472 72.607595,82.7145587 85.4738752,82.7145587 C98.3405064,82.7145587 108.709962,94.5189427 108.488529,108.914901 C108.508531,123.290155 98.3405064,135.09489 85.4738752,135.09489 Z M170.525237,135.09489 C157.88039,135.09489 147.510584,123.290155 147.510584,108.914901 C147.510584,94.5396472 157.658606,82.7145587 170.525237,82.7145587 C183.391518,82.7145587 193.761324,94.5189427 193.539891,108.914901 C193.539891,123.290155 183.391518,135.09489 170.525237,135.09489 Z"
                                        fill-rule="nonzero" fill="#ffffff"> </path>
                                </g>
                            </g>
                        </svg>
                    </a></li>
            </ul>
        </nav>
    </div>
</div>
