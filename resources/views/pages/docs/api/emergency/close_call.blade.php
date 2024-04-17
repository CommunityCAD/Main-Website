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
                        Close Call
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    This endpoint allows you to close calls.
                </p>

                <div class="space-y-3" id="create_call">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Close Call
                    </h3>
                    <p class="">
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-green-500 ring-1 ring-inset ring-blue-700/10">POST</span>
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-gray-300 ring-1 ring-inset ring-blue-700/10">api/v1/emergency/close_call</span>
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
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Call ID
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    status</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Status of Call.
                                    <a class="underline" href="#status_codes">
                                        List of all status codes options.
                                    </a>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-yellow-500">Optional</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    priority</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">number</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Prioity number 1-5.
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-yellow-500">Optional</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 class="mt-16 text-lg font-semibold tracking-tight" id="example_call">Example Call</h2>
                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
"call_id": 123456,
"status": "CLO"
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
    "message": "Call closed.",
    "data": []
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
        "call_id": [
            "The call id field is required.",
            "The call id must be a number."
        ],
        "status": [
            "The status field is required."
        ],
    }
}</pre>
                        </span>
                    </code>

                    <p>200 with call not found.</p>
                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
    "success": false,
    "message": "Call not found.",
    "data": []
}</pre>
                        </span>
                    </code>

                    <p>200 with status code not found.</p>
                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
    "success": false,
    "message": "Status code not found.",
    "data": []
}</pre>
                        </span>
                    </code>

                    <div class="space-y-3" id="status_codes">
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
                                        <p>To update the call status use the Edit Call endpoint.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                            Status Codes
                        </h3>
                        <p class="">
                        <ul class="list-inside list-disc">
                            <li><span class='font-bold text-lg'>CLR</span> - Clear; Needs Report</li>
                            <li><span class='font-bold text-lg'>CLO</span> - Close; No Report</li>
                            <li><span class='font-bold text-lg'>CLO-RPT</span> - Report Made</li>
                            <li><span class='font-bold text-lg'>CLO-SB</span> - Unable To Locate Complaintant</li>
                            <li><span class='font-bold text-lg'>CLO-SC</span> - Unable To Locate Address</li>
                            <li><span class='font-bold text-lg'>CLO-SD</span> - Unable To Locate Suspect</li>
                            <li><span class='font-bold text-lg'>CLO-SL</span> - Verbal Warning</li>
                            <li><span class='font-bold text-lg'>CLO-SLW</span> - Written Warning</li>
                            <li><span class='font-bold text-lg'>CLO-SM</span> - Citation Issued</li>
                            <li><span class='font-bold text-lg'>CLO-SN</span> - Person Arrested</li>
                            <li><span class='font-bold text-lg'>CLO-SO</span> - Made Contact</li>
                            <li><span class='font-bold text-lg'>CLO-SR</span> - Other</li>
                            <li><span class='font-bold text-lg'>CLO-TEST</span> - Test Call Cleared</li>
                        </ul>
                        </p>
                    </div>

                    <div class="space-y-3" id="support">
                        <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                            Still have questions?
                        </h3>
                        <p class="">
                            Still have questions? <a class="underline hover:no-underline"
                                href="https://discord.gg/tmZWX7q2yZ" target="_BLANK">Talk
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
