@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
        <div class="flex-auto max-w-8xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
            <article class="">
                <header class="">
                    <p class="text-base font-medium text-slate-300">
                        Change Log
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        Change Log
                    </h1>
                </header>
                <div class="space-y-3" id="thank_you">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        <a class="text-link"
                            href="https://github.com/CommunityCAD/CommunityCAD/releases/tag/v1.4.3.1">v1.4.3</a>
                    </h3>

                    <h3 class="text-lg">CAD System</h3>
                    <ul class="">
                        <li>- New roster page designs for departments</li>
                        <li>- New ticket design for officers, civilian and the courthouse</li>
                        <li>- Added options to courthouse that allows judges to find civilians guilty or non-guilty on
                            specific
                            tickets</li>
                        <li>- Added version number under profile dropdown to easily tell if updates worked</li>
                    </ul>
                </div>

                @include('inc.docs.support')

            </article>

            {{-- <dl class="flex pt-6 mt-6 border-t border-slate-200">
                <div class="mr-auto text-left">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Previous
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs/installation">
                            Installation
                        </a>
                    </dd>
                </div>

                <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight text-slate-500">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold text-slate-200 hover:underline" href="/docs/road_map">
                            Road Map
                        </a>
                    </dd>
                </div>
            </dl> --}}
        </div>
    </main>
@endsection
