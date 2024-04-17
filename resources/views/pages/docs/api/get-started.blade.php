@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">

        @include('inc.docs.sidebar')
        <div class="flex-auto max-w-3xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
            <article class="">
                <div class="rounded-md bg-red-50 p-4 my-3">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg aria-hidden="true" class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path clip-rule="evenodd"
                                    d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"
                                    fill-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <div class="text-sm text-red-700">
                                <p>API is in Alpha and may change at any time.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <header class="">
                    <p class="text-base font-medium text-slate-300">
                        API Resources
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        Get Started
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    Get started with our API
                </p>
                {{--
                <div class="mt-4 rounded-lg ">
                    <img alt="Discord Integration" class="mx-auto"
                        src="{{ asset('images/docs/get-started-portal-screen.png') }}">
                </div> --}}

                <div class="space-y-3" id="step1">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Get API Token
                    </h3>

                    <p class="">
                        API Token can be found in the <span class="text-red-500 font-bold">Admin > Cad Settings > API
                            Key</span>. If you do not see a key
                        there then click the green button that says "Generate/Generate API Key".
                    </p>

                    <div class="rounded-md bg-yellow-50 p-4 my-3">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"
                                        fill-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-yellow-700">
                                    <p>There is a known issue that will not allow the key to show up immediately. Once
                                        clicking the button wait 5 seconds then refresh the page and it will be there. DO
                                        NOT CLICK THE BUTTON OVER AND OVER.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="space-y-3" id="step2">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Headers
                    </h3>

                    <div class="">
                        <p>API token needs to go into the header under "token".</p>
                    </div>
                </div>

                <div class="space-y-3" id="new_call">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        API Online Check
                    </h3>

                    <p class="">
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-green-500 ring-1 ring-inset ring-blue-700/10">GET</span>
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-gray-300 ring-1 ring-inset ring-blue-700/10">api/v1</span>
                    </p>

                    <p>200 A successful call will be met with a funny joke.</p>
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

            <dl class="flex pt-6 mt-6 border-t border-slate-200">
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

                {{-- <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold hover:underline" href="{{ route('docs.api.911-call') }}">
                            911 Call
                        </a>
                    </dd>
                </div> --}}
            </dl>
        </div>
    </main>
@endsection
