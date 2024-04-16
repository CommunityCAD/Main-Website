@extends('layouts.docs')

@section('content')
    <main class="relative flex justify-center mx-auto max-w-8xl sm:px-2 lg:px-8 xl:px-12">

        @include('inc.docs.sidebar')
        <div class="flex-auto max-w-5xl min-w-0 px-4 py-10 mx-auto lg:pr-0 lg:pl-8 xl:px-16 text-white">
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
                        Get Calls
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    This endpoint allows you to retrieve all active calls and previously
                    closed calls.
                </p>

                <div class="space-y-3" id="panic">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Get Calls
                    </h3>
                    <p class="">
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-green-500 ring-1 ring-inset ring-blue-700/10">POST</span>
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-gray-300 ring-1 ring-inset ring-blue-700/10">api/v1/emergency/get_calls</span>
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
                                    closed_call_limit</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">number</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Number of closed calls to return.
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
    "closed_call_limit": 10 // 0 to only return active calls
}
                            </pre>
                        </span>
                    </code>

                    <h2 class="mt-16 text-lg font-semibold tracking-tight" id="example_responses">Responses</h2>
                    <p>200 A successful call will be met with all the active and previously closed calls.</p>

                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
    "success": true,
    "message": "",
    "data": {
        "open": [
            {
                "id": 2400017,
                "nature": "TEST",
                "nature_name": "TEST CALL",
                "narrative": "This is the narrative",
                "location": "123 Test AVE",
                "city": "Sandy Shores",
                "priority": 3,
                "type": 1,
                "status": "RCVD",
                "status_name": "Call Open",
                "source": "911 CALL",
                "created_at": "04/05/2024 19:46:57",
                "updated_at": "04/05/2024 19:46:57",
                "call_log": [
                        {
                            "id": 206,
                            "from": "Ariana Daugherty (1C-1)",
                            "text": "Call Status Updated To RCVD",
                            "created_at": "04/13/2024 12:14:17"
                        },
                        ...
                ],
                "call_civilians": [
                        {
                            "id": 16,
                            "civilian_id": 122714196,
                            "call_id": 2400014,
                            "type": "RP",
                            "created_at": "2024-03-06T04:19:12.000000Z",
                            "updated_at": "2024-03-06T04:19:12.000000Z",
                            "deleted_at": null,
                            "civilian": null
                        }
                ],
                "call_vehicles": [
                        {
                            "id": 8,
                            "vehicle_id": 2,
                            "call_id": 2400010,
                            "type": "RP",
                            "created_at": "2024-04-02T02:15:33.000000Z",
                            "updated_at": "2024-04-02T02:15:33.000000Z",
                            "deleted_at": null,
                            "vehicle": {
                                "id": 2,
                                "plate": "abc123",
                                "model": "Ford F150",
                                "color": "Green",
                                "registration_expire": "2024-02-06T06:00:00.000000Z",
                                "civilian_id": 600613090,
                                "vehicle_status": 2,
                                "created_at": "2024-01-08T01:20:08.000000Z",
                                "updated_at": "2024-01-08T01:20:08.000000Z",
                                "deleted_at": null,
                                "impound_ticket_id": null,
                                "picture": null,
                                "business_id": null
                            }
                        }
                ]
            },
        ]
        "closed": [
            {...}
        ]
    }
}</pre>
                        </span>
                    </code>

                    <p>200 with validation errors.</p>
                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
    "success": false,
    "message": "Validation errors",
    "data": {
        "closed_call_limit": [
            "The closed call limit field is required.",
            "The closed call limit must be a number."
        ]
    }
}
                            </pre>
                        </span>
                    </code>

                </div>

                <div class="space-y-3" id="support">
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
