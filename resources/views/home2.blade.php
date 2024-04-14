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
                            href="https://cdn.discordapp.com/attachments/1207861684686037032/1207861807079755796/image.png?ex=662b03f7&is=66188ef7&hm=311b4ca8abeb1df5fbf944c43147e3e0df121aa563d4f272384f32c889a296b2&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207861684686037032/1207861807079755796/image.png?ex=662b03f7&is=66188ef7&hm=311b4ca8abeb1df5fbf944c43147e3e0df121aa563d4f272384f32c889a296b2&">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="https://cdn.discordapp.com/attachments/1207861684686037032/1207861879335166013/image.png?ex=662b0409&is=66188f09&hm=3ec070aa2e74a095ca7bc2c874d511f786d85f605ee3612772f0276c8956acc7&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207861684686037032/1207861879335166013/image.png?ex=662b0409&is=66188f09&hm=3ec070aa2e74a095ca7bc2c874d511f786d85f605ee3612772f0276c8956acc7&">
                        </a>

                        <a class="block relative bg-red-100 col-span-2 row-span-2"
                            href="https://cdn.discordapp.com/attachments/1207861684686037032/1207862102153232434/image.png?ex=662b043e&is=66188f3e&hm=06a5f9ef8d9da85738857f630767d8b7b593211336cf89ae50c960ce1a83e0d9&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207861684686037032/1207862102153232434/image.png?ex=662b043e&is=66188f3e&hm=06a5f9ef8d9da85738857f630767d8b7b593211336cf89ae50c960ce1a83e0d9&">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="https://cdn.discordapp.com/attachments/1207859166505472000/1207859166807592991/image.png?ex=662b0182&is=66188c82&hm=3eb83844a1f5204b68822ec678d7523c245c486c93826e953e14d90b56ffc1ad&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207859166505472000/1207859166807592991/image.png?ex=662b0182&is=66188c82&hm=3eb83844a1f5204b68822ec678d7523c245c486c93826e953e14d90b56ffc1ad&">
                        </a>

                        <a class="block relative bg-red-100"
                            href="https://cdn.discordapp.com/attachments/1207859166505472000/1207859593057931274/image.png?ex=662b01e7&is=66188ce7&hm=ead26134e5c1007c0448105337685ded960de76fd8c3550eff41cb398661809d&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207859166505472000/1207859593057931274/image.png?ex=662b01e7&is=66188ce7&hm=ead26134e5c1007c0448105337685ded960de76fd8c3550eff41cb398661809d&">
                        </a>

                        <a class="block relative bg-red-100 w-36 h-24"
                            href="https://cdn.discordapp.com/attachments/1207859166505472000/1207859791175753818/image.png?ex=662b0217&is=66188d17&hm=62e0ddd29fac9727f24250279f3a4b8484555b81f1fa8f4f25d380d7717c0755&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207859166505472000/1207859791175753818/image.png?ex=662b0217&is=66188d17&hm=62e0ddd29fac9727f24250279f3a4b8484555b81f1fa8f4f25d380d7717c0755&">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="https://cdn.discordapp.com/attachments/1207861185052147732/1207861501399146496/image.png?ex=662b03ae&is=66188eae&hm=5ef550e4977702aafafbe7d3efa30c2f32711d09549fe8651664753225a4501c&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207861185052147732/1207861501399146496/image.png?ex=662b03ae&is=66188eae&hm=5ef550e4977702aafafbe7d3efa30c2f32711d09549fe8651664753225a4501c&">
                        </a>

                        <a class="block relative bg-red-100 col-span-2 row-span-2"
                            href="https://cdn.discordapp.com/attachments/1207861185052147732/1207861343189733376/image.png?ex=662b0389&is=66188e89&hm=3c2ac6994298bcb1c38f107a31660350a5904594b23602d65d27617b9e51f47a&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207861185052147732/1207861343189733376/image.png?ex=662b0389&is=66188e89&hm=3c2ac6994298bcb1c38f107a31660350a5904594b23602d65d27617b9e51f47a&">
                        </a>

                        <a class="block relative bg-red-100 row-span-2"
                            href="https://cdn.discordapp.com/attachments/1207861185052147732/1207861185630707722/image.png?ex=662b0363&is=66188e63&hm=4dfa0d1fd2379c85058af09fa10b9c52567913c4a2fda2756afb230c4c98db7c&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207861185052147732/1207861185630707722/image.png?ex=662b0363&is=66188e63&hm=4dfa0d1fd2379c85058af09fa10b9c52567913c4a2fda2756afb230c4c98db7c&">
                        </a>

                        <a class="block relative bg-red-100"
                            href="https://cdn.discordapp.com/attachments/1207866750188912683/1207867020658606140/image.png?ex=662b08d2&is=661893d2&hm=222296d8f4c001261137709a4068157404ff09dd31349b239c2602e2ecc9629c&"
                            x-on:click.prevent="open">
                            <img class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://cdn.discordapp.com/attachments/1207866750188912683/1207867020658606140/image.png?ex=662b08d2&is=661893d2&hm=222296d8f4c001261137709a4068157404ff09dd31349b239c2602e2ecc9629c&">
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
                    <img alt="BCRP" class="h-48 mx-auto"
                        src="https://cdn.discordapp.com/attachments/1196284104275132436/1208992539017740358/OIG2.png?ex=6625e68b&is=6613718b&hm=1afbdcab1ded358154d32445d289f7846ba4d1b2f0fe51cae2bc126c8e7883a3&">
                    <h3 class="text-center tracking-widest">River City Roleplay</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="Blacklight Roleplay" class="h-48 mx-auto"
                        src="https://cdn.discordapp.com/attachments/1208870432833409085/1208992113430241322/blrp.png?ex=6625e625&is=66137125&hm=fe50f2cc7dd55d08ea9bbb4a4484ac022151f8abe23c66accf09262ae1e9ae89&">
                    <h3 class="text-center tracking-widest">Blacklight Roleplay</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="South Dakota Roleplay" class="h-48 mx-auto"
                        src="https://cdn.discordapp.com/attachments/1200892346984845495/1211330120191574077/giphy_1.gif?ex=662e6796&is=661bf296&hm=f269972869b906a4552a69bd6325ddc501bd015f2259d64b54852d88502d93f8&">
                    <h3 class="text-center tracking-widest">South Dakota Roleplay</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="Operations San Andreas" class="h-48 mx-auto"
                        src="https://cdn.discordapp.com/attachments/995112290091282503/1224885764723048520/OSA_NoBG.png?ex=661f1ec3&is=660ca9c3&hm=492f96052c8b734e1e5722eeae8a29e6de82c0ea6da37842a5d99e8b2e46a7b2&">
                    <h3 class="text-center tracking-widest">Operations San Andreas</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="South Embassy Roleplay" class="h-48 mx-auto"
                        src="https://cdn.discordapp.com/icons/1211461960919678986/42e985044986c6b63765ec2a3b049f3c.png?size=4096">
                    <h3 class="text-center tracking-widest">South Embassy Roleplay</h3>
                    <p class="text-sm">
                    </p>
                </div>
                <div class="bg-gray-800 px-4 py-2 rounded-xl mx-4 my-2">
                    <img alt="DOJ:RP Sandy Shores" class="h-48 mx-auto"
                        src="https://cdn.discordapp.com/emojis/942253911081898044.webp?size=128&quality=lossless">
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
