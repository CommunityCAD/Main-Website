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
                        Get Call
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    This endpoint allows you to retrieve a call.
                </p>

                <div class="space-y-3" id="panic">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Get Call
                    </h3>
                    <p class="">
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-green-500 ring-1 ring-inset ring-blue-700/10">POST</span>
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-gray-300 ring-1 ring-inset ring-blue-700/10">api/v1/emergency/get_call</span>
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
                                    call_id</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">number</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Number of closed calls to return.
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    note</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Note to be saved.
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    from</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Officer Name (Call sign)
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
    "call_id": 123456789,
    "note": "Call Note",
    "from": "Ron S (1C-2)"
}
                            </pre>
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
    "message": "",
    "data": [
        {
            "id": 2400010,
            "nature": "DOMESTIC",
            "nature_name": "DOMESTIC DISTURBANCE VIOLENCE",
            "narrative": "Voluptatem dicta eos",
            "location": "Minus dolorum fuga",
            "city": "Et quia omnis ducimu",
            "priority": 1,
            "type": 2,
            "status": "RCVD",
            "status_name": "Call Open",
            "source": "911 CALL",
            "created_at": "02/09/2024 20:10:06",
            "updated_at": "04/01/2024 21:16:52",
            "call_log": [
                {
                    "id": 195,
                    "from": "Guy Cruz (1C-31)",
                    "text": "Officer  has been assigned.",
                    "created_at": "02/09/2024 20:25:03"
                },
                ...
            ],
            "call_civilians": [
                {
                    "id": 17,
                    "civilian_id": 279684039,
                    "type": "VICTIM",
                    "civilian": {
                        "id": 279684039,
                        "user_id": 188790560658685954,
                        "first_name": "TestTest",
                        "last_name": "test",
                        "full_name": "TestTest test",
                        "picture": null,
                        "date_of_birth": "01/08/2024",
                        "gender": "Male",
                        "race": "Asian",
                        "postal": 122334,
                        "street": "Test",
                        "city": "Sandy",
                        "full_address": "122334 Test Sandy",
                        "occupation": null,
                        "height": "54",
                        "weight": "105",
                        "status": 1,
                        "status_name": "Alive",
                        "active_persona": 0,
                        "created_at": "01/22/2024 13:16:50",
                        "updated_at": "01/22/2024 13:20:15",
                        "is_violent": 0,
                        "is_weapon": 0,
                        "is_ill": 0,
                        "is_swat": 0,
                        "is_ciu": 0,
                        "is_warrant": 0
                    }
                }
                ...
            ],
            "call_vehicles": [
                {
                    "id": 8,
                    "vehicle_id": 2,
                    "type": "RP",
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
                ...
            ]
        },
    ]
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
    "message": "Call not found.",
    "data": []
}
                            </pre>
                        </span>
                    </code>

                </div>

                <div class="space-y-3" id="support">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Related Information
                    </h3>
                    <p class="">
                        You can find more information about the other responses for the following
                    <ul>
                        <li>Vehcile</li>
                        <li>Civilian</li>
                        <li>Call Log</li>
                    </ul>
                    </p>
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
