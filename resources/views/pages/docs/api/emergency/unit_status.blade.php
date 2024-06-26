@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">
        <div class="flex-auto max-w-8xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
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
                        API Resources > Emergency
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        Unit Status
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    Update your unit's status in the CAD via API.
                </p>

                <div class="space-y-3" id="panic">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Update Unit Status
                    </h3>
                    <p class="">
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-green-500 ring-1 ring-inset ring-blue-700/10">POST</span>
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-gray-300 ring-1 ring-inset ring-blue-700/10">api/v1/emergency/unit_status</span>
                    </p>

                    <h2 class="mt-16 text-lg font-semibold tracking-tight" id="request_body">Request Body</h2>
                    <table class="min-w-full divide-y divide-gray-300 text-white">
                        <thead>
                            <tr>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-bold sm:pl-0" scope="col">Name
                                </th>
                                <th class="px-3 py-3.5 text-left text-sm font-bold" scope="col">Type
                                </th>
                                <th class="px-3 py-3.5 text-left text-sm font-bold" scope="col">
                                    Description
                                </th>
                                <th class="px-3 py-3.5 text-left text-sm font-bold" scope="col">
                                    Default
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    user_id</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">number</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Discord ID of the player.
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    status</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">New status. <a class="text-sm text-link"
                                        href="#status_options">Accepted Status Options</a>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 class="mt-16 text-lg font-semibold tracking-tight" id="example_call">Example Request Body</h2>
                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
    "user_id": 123456789123456789,
    "status": "AVL"
}</pre>
                        </span>
                    </code>

                    <h2 class="mt-16 text-lg font-semibold tracking-tight" id="example_responses">Responses</h2>
                    <p>200 A successful call.</p>

                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
    "success": true,
    "message": "Status updated.",
    "data": []
}</pre>
                        </span>
                    </code>

                    <p>200 with error message if the unit was not found.</p>
                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
    "success": false,
    "message": "No active unit found for the given user.",
    "data": []
}</pre>
                        </span>
                    </code>

                    <p>200 with validation error messages.</p>
                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
    "success": false,
    "message": "Validation errors",
    "data": {
        "user_id": [
            "The user id field is required.",
            "The user id field is required."
        ],
        "status": [
            "The status field is required.",
            "The selected status is invalid." // Not in given list below
        ]
    }
}</pre>
                        </span>
                    </code>

                </div>

                <div class="space-y-3" id="status_options">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Status Options
                    </h3>
                    <p>ID is what the API expects as the status field.</p>
                    <table class="min-w-full divide-y divide-gray-300 text-white">
                        <thead>
                            <tr>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-bold sm:pl-0" scope="col">ID
                                </th>
                                <th class="px-3 py-3.5 text-left text-sm font-bold" scope="col">Name
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    AVL</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Available</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    ENRUTE</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Enroute</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    ONSCN</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">On Scene</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    BRK</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Break</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    OFFDTY - RPT</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Off duty and need to fill out report.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @include('inc.docs.support')

            </article>

            {{-- <dl class="flex pt-6 mt-6 border-t border-slate-200">
                <div class="mr-auto text-left">
                    <dt class="text-sm font-normal tracking-tight">
                        Previous
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold hover:underline" href="{{ route('docs.api.911-call') }}">
                            911 Call
                        </a>
                    </dd>
                </div> --}}

            {{-- <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold hover:underline" href="{{ route('docs.api.panic-button') }}">
                            Panic Button
                        </a>
                    </dd>
                </div> --}}
            </dl>
        </div>
    </main>
@endsection
