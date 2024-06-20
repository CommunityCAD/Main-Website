@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
        <div class="flex-auto max-w-8xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
            <article class="">
                <header class="">
                    <p class="text-base font-medium text-slate-300">
                        Jobs
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        Jobs
                    </h1>
                </header>
                <div class="space-y-3" id="thank_you">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Marketing Manager
                    </h3>

                    <p>As the marketing manger you will stay active on our forum posts and do community outreach to help
                        bring in members to CommunityCAD. You will be the public face for our system by posting ads in
                        Discords, Reddit and other groups that allow advertisements.</p>
                </div>

                <div class="space-y-3" id="thank_you">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        FiveM Script Developers
                    </h3>

                    <p>Help grow our scripts for CommunityCAD by creating scripts that can interact with our API.</p>
                </div>

                <div class="space-y-3" id="thank_you">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Benefits
                    </h3>

                    <p>As a member of our staff team you will get access to CommunityCAD for your community at a discounted
                        rate. You will also be in our affiliate program that you will receive a commission on each new
                        hosting member you bring in. Script developers also will get a per script bonus each month that they
                        create for the CommunityCAD community.</p>

                    <p>If you are interested please join our Discord below and DM Gage!</p>
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
