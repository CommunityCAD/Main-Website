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
                        Installation
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    This guide will walk you through how to set up your CommunityCAD. I have made the CAD to be hosted
                    easily and seemlessly for a varity of technical knowladge. There are a few ways to get your CAD up and
                    running.
                </p>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Requirements
                    </h3>

                    <p class="">
                    <ul>
                        <li>PHP 8.2 or higher</li>
                        <li>Web Server</li>
                        <li>Git</li>
                        <li>MySQL</li>
                        <li>Composer</li>
                        <li>Node.js/npm - Developer only</li>
                    </ul>
                    </p>

                    <p>These are just rough drafts and may contain grammar or spelling errors. Please bear with me while I
                        continue to work on this.</p>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Installation - VPS/Locally
                    </h3>

                    <p class="">
                    <ul>
                        <li>Install Composer and Npm</li>
                        <li>Clone the repository</li>
                        <li>Install dependencies</li>
                        <li>Generate App Key</li>
                        <li>Set up .env file</li>
                        <li>Run Migrations</li>
                        <li>Seed DB with Default Values</li>
                        <li>Good to go</li>
                    </ul>
                    </p>

                    <p>These are just rough drafts and may contain grammar or spelling errors. Please bear with me while I
                        continue to work on this.</p>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Installation - Laravel Forge
                    </h3>

                    <p class="">
                    <ul>
                        <li>Install Composer and Npm</li>
                        <li>Clone the repository</li>
                        <li>Install dependencies</li>
                        <li>Generate App Key</li>
                        <li>Set up .env file</li>
                        <li>Run Migrations</li>
                        <li>Seed DB with Default Values</li>
                        <li>Good to go</li>
                    </ul>
                    </p>

                    <p>These are just rough drafts and may contain grammar or spelling errors. Please bear with me while I
                        continue to work on this.</p>
                </div>

                <div class="space-y-3" id="overview">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Installation - cPanel
                    </h3>

                    <p class="">
                    <ul>
                        <li>Install Composer and Npm</li>
                        <li>Clone the repository</li>
                        <li>Install dependencies</li>
                        <li>Generate App Key</li>
                        <li>Set up .env file</li>
                        <li>Run Migrations</li>
                        <li>Seed DB with Default Values</li>
                        <li>Good to go</li>
                    </ul>
                    </p>

                    <p>These are just rough drafts and may contain grammar or spelling errors. Please bear with me while I
                        continue to work on this.</p>
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
