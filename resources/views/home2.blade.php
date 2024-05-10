@extends('layouts.public')

@section('content')
    <div class="container mx-auto mt-10 text-white px-4 py-2">
        <h1 class="text-center text-4xl">Elevate your roleplay experience</h1>
        <p class="text-center text-base mt-3 max-w-3xl mx-auto">CommunityCAD is a new all-in-one solution to running your
            community.
            Provides a
            seamless user experience from the time they apply through their RP experience!</p>

        <div class="mt-10 max-w-5xl mx-auto">
            <img alt="" src="{{ asset('images/LEO MDT Call Page.png') }}">
        </div>

        <div class="mt-10 max-w-5xl mx-auto">
            <h1 class="text-center text-3xl" id="features">Features</h1>
            <div class="md:grid-cols-2 lg:grid-cols-3 grid mt-2">
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">Realistic</h3>
                    <p class="text-sm">CAD/MDT design based on real life police CAD software for more immersive experience.
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">Application System</h3>
                    <p class="text-sm">Not only does CommunityCAD serve as your CAD/MDT software it also functions as an
                        application system for members to join your community.
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">Member Management</h3>
                    <p class="text-sm">While it goes without saying, we have developed an in-depth member management portal.
                        This allows you to control everything without going to different places.
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">API Integration*</h3>
                    <p class="text-sm">We will be creating an API for the next version of CommunityCAD so that communities
                        can connect FiveM scripts to the system.
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">Support</h3>
                    <p class="text-sm">This is a passion project of the developer. I will be working on this project well
                        into the future and looking for feedback to improve the system.
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">Customization</h3>
                    <p class="text-sm">Easily adjust CAD settings to customize elements to your community.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-10 select-none">
            <h1 class="text-center text-3xl" id="gallery">Gallery</h1>
            <div class="flex justify-center items-center">

                <div x-data="gallery()">
                    <div class="mt-6 max-w-2xl mx-auto grid gap-2 grid-cols-4 grid-rows-5 px-6">
                        <a class="block relative bg-red-100 w-full h-24"
                            href="{{ asset('images/product_images/MDT1.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/MDT1.png') }}">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="{{ asset('images/product_images/MDT2.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/MDT3.png') }}">
                        </a>

                        <a class="block relative bg-red-100 col-span-2 row-span-2"
                            href="{{ asset('images/product_images/MDT3.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/MDT3.png') }}">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="{{ asset('images/product_images/MDT4.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/MDT4.png') }}">
                        </a>

                        <a class="block relative bg-red-100"
                            href="{{ asset('images/product_images/MDT5.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/MDT5.png') }}">
                        </a>

                        <a class="block relative bg-red-100 w-36 h-24"
                            href="{{ asset('images/product_images/Portal1.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/Portal1.png') }}">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="{{ asset('images/product_images/Portal2.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/Portal2.png') }}">
                        </a>

                        <a class="block relative bg-red-100 col-span-2 row-span-2"
                            href="{{ asset('images/product_images/CIV1.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/CIV1.png') }}">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="{{ asset('images/product_images/CIV2.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/CIV2.png') }}">
                        </a>

                        <a class="block relative bg-red-100"
                            href="{{ asset('images/product_images/CIV3.png') }}"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="{{ asset('images/product_images/CIV3.png') }}">
                        </a>
                    </div>

                    <div class="fixed inset-0 bg-black bg-opacity-90 flex justify-center items-center" style="display: none"
                        x-on:click="close" x-on:keydown.window.escape="close" x-show="isOpen()"
                        x-transition:enter-start="opacity-0" x-transition:enter="transition ease-in-out duration-300"
                        x-transition:leave-end="opacity-0" x-transition:leave="transition ease-in-in duration-300">
                        <img alt="" class="w-4/5 h-4/5 object-contain object-center" x-bind:src="activeImageUrl"
                            x-show="isOpen()" x-transition:enter-start="opacity-0 transform scale-50"
                            x-transition:enter="transition ease-in-out duration-300"
                            x-transition:leave-end="opacity-0 transform scale-50"
                            x-transition:leave="transition ease-in-in duration-300">
                    </div>
                </div>

                <script>
                    function gallery() {
                        return {
                            show: false,
                            activeImageUrl: null,

                            isOpen() {
                                return this.show
                            },

                            open($event) {
                                this.activeImageUrl = $event.target.parentNode.href
                                this.show = true
                            },

                            close() {
                                this.show = false
                                // Clear the active image URL after the image closed
                                setTimeout(() => this.activeImageUrl = null, 300)
                            }
                        }
                    }
                </script>

            </div>
        </div>

        <div class="mt-10 max-w-5xl mx-auto">
            <h1 class="text-center text-3xl" id="">Used By</h1>
            <div class="md:grid-cols-3 grid mt-2">
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="RCRP" class="h-48 mx-auto"
                        src="{{ asset('images/community_images/RiverCityRP.png') }}">
                    <h3 class="text-center tracking-widest">River City Roleplay</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="McDouble Roleplay" class="h-48 mx-auto"
                        src="{{ asset('images/default_images/communitycad.png') }}">
                    <h3 class="text-center tracking-widest">McDouble Roleplay</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="STG RolePlay" class="h-48 mx-auto"
                        src="{{ asset('images/community_images/STG.png') }}">
                    <h3 class="text-center tracking-widest">STG RolePlay</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="SOCA State Of California" class="h-48 mx-auto"
                        src="{{ asset('images/default_images/communitycad.png') }}&">
                    <h3 class="text-center tracking-widest">SOCA State Of California</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="Concord State Office" class="h-48 mx-auto"
                        src="{{ asset('images/default_images/communitycad.png') }}">
                    <h3 class="text-center tracking-widest">Concord State Office</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="DOJ:RP Sandy Shores" class="h-48 mx-auto"
                        src="{{ asset('images/community_images/DOJRPSS.png') }}">
                    <h3 class="text-center tracking-widest">DOJ:RP Sandy Shores</h3>
                    <p class="text-sm">
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-10 max-w-5xl mx-auto">
            <h1 class="text-center text-3xl" id="reviews">Reviews</h1>
            <div class="md:grid-cols-3 grid mt-2">
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">⭐⭐⭐⭐⭐</h3>
                    <p class="text-sm">
                        "CommunityCAD Has a lot of potential to be one of the Best Cards on the Market. Gage is very
                        receptive to Ideas and cares about community feedback. The CAD is straightforward to use and LEO and
                        civilian friendly. I want to thank Gage for making the Civilian Experience nice and useable, as it
                        is usually overlooked! It is the most realistic CAD I have used, and I suggest it to anyone.
                        CommunityCAD Will only get better over time!" - ARP |
                        Mxrcy
                    </p>
                </div>

                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">⭐⭐⭐⭐⭐</h3>
                    <p class="text-sm">
                        "Community CAD has been a great resource to MCDRP, and is overall exactly what we need from a CAD
                        system. I would greatly recommend it to any server looking for a simple, user friendly CAD system.
                        It is actively being worked on and improved as well, which is a very nice thing to see." - MCDRP |
                        me26
                    </p>
                </div>

                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">⭐⭐⭐⭐⭐</h3>
                    <p class="text-sm">
                        "I am the founder of Central Coast Roleplay, a successful community under the use of Community CAD.
                        The support team really does care about the users, and always trying to solve each problem we come
                        across." - CCRP |
                        HAWK
                    </p>
                </div>

                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">⭐⭐⭐⭐⭐</h3>
                    <p class="text-sm">
                        "Very easy to use and i have had no problem with it" - BCRP |
                        Hank Voight
                    </p>
                </div>

                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">⭐⭐⭐⭐⭐</h3>
                    <p class="text-sm">
                        "Very simple to use, but very different from every other cad in fivem." - OSA |
                        Kam
                    </p>
                </div>

                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">⭐⭐⭐⭐⭐</h3>
                    <p class="text-sm">
                        "Very ez to Setup, Owner is really nice and Helpful, realistic MDT, i will keep using this CAD for
                        as long as i live" - SERP |
                        GhostYourLocalMenace
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
