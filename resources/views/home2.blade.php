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
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479343374643322/Member_Portal.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479343374643322/Member_Portal.png">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479354846072933/Admin_Edit_Departments.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479354846072933/Admin_Edit_Departments.png">
                        </a>

                        <a class="block relative bg-red-100 col-span-2 row-span-2"
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479355294863370/Admin_Manage_Departments.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479355294863370/Admin_Manage_Departments.png">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479364467789905/Penal_Code.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479364467789905/Penal_Code.png">
                        </a>

                        <a class="block relative bg-red-100"
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479365168238603/Staff_Applications.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479365168238603/Staff_Applications.png">
                        </a>

                        <a class="block relative bg-red-100 w-36 h-24"
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479364803346543/Staff_Announcements.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479364803346543/Staff_Announcements.png">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479342246375475/Civilian_Screen.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479342246375475/Civilian_Screen.png">
                        </a>

                        <a class="block relative bg-red-100 col-span-2 row-span-2"
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479354548265111/Civilian_Home.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479354548265111/Civilian_Home.png">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479343089418250/Dispatch_Screen.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479343089418250/Dispatch_Screen.png">
                        </a>

                        <a class="block relative bg-red-100"
                            href="https://media.discordapp.net/attachments/632810626363686922/1140479356800606238/Call_View.png"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://media.discordapp.net/attachments/632810626363686922/1140479356800606238/Call_View.png">
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
            <div class="md:grid-cols-2 grid mt-2">
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="BCRP" class="h-48 mx-auto" src="{{ asset('images/bcrp.png') }}">
                    <h3 class="text-center tracking-widest">Blaine County Roleplay</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="We Want You" class="h-48 mx-auto"
                        src="https://partsandservice.co.nz/wp-content/uploads/2019/09/We-Want-You-Poster-Template.jpg">
                    <h3 class="text-center tracking-widest">We Want You!</h3>
                    <p class="text-sm">If you would like to see more of our system join our discord today!
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-10 max-w-5xl mx-auto">
            <h1 class="text-center text-3xl" id="reviews">Reviews</h1>
            <div class="md:grid-cols-1 grid mt-2">
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <h3 class="text-center tracking-widest">Coming Soon</h3>
                    <p class="text-sm">
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
