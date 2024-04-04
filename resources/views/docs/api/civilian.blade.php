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

                <div class="rounded-md bg-yellow-50 p-4 my-3">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path clip-rule="evenodd"
                                    d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"
                                    fill-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <div class="text-sm text-yellow-700">
                                <p>These endpoints are not yet active.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <header class="">
                    <p class="text-base font-medium text-slate-300">
                        API Resources
                    </p>

                    <h1 class="text-3xl font-bold tracking-tight">
                        Civilian Endpoints
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    All the Civilian Endpoints
                </p>

                <div class="space-y-3" id="new_call">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        View All Civilians Connected to User
                    </h3>

                    <p class="">
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-green-500 ring-1 ring-inset ring-blue-700/10">POST</span>
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-gray-300 ring-1 ring-inset ring-blue-700/10">api/v1/fivem/civilian/civilians</span>
                    </p>

                    <h2 class="mt-16 text-lg font-semibold tracking-tight">Request Body</h2>
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
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Discord User ID
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <span class="flex-1">

                            </span>
                        </span>

                    </code> --}}

                    <p>200 A successful call will list all civilians connected to the given user.</p>
                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
[
    {
        "id": 279684039,
        "user_id": 188790560658685954,
        "first_name": "TestTest",
        "last_name": "test",
        "picture": null,
        "date_of_birth": "2024-01-08T06:00:00.000000Z",
        "gender": "Male",
        "race": "Asian",
        "postal": 122334,
        "street": "Test",
        "city": "Sandy",
        "occupation": null,
        "height": "54",
        "weight": "105",
        "status": 1,
        "active_persona": 0,
        "created_at": "2024-01-22T19:16:50.000000Z",
        "updated_at": "2024-01-22T19:20:15.000000Z",
        "deleted_at": null,
        "is_violent": 0,
        "is_weapon": 0,
        "is_ill": 0,
        "is_swat": 0,
        "is_ciu": 0,
        "is_warrant": 0,
        "is_officer": 0,
        "user_department_id": null,
        "licenses": [],
        "medical_records": [],
        "vehicles": [],
        "weapons": []
    },
    ...
]
                            </pre>
                        </span>
                    </code>
                </div>

                <div class="space-y-3" id="new_call">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Create New Civilian
                    </h3>

                    <p class="">
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-green-500 ring-1 ring-inset ring-blue-700/10">POST</span>
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-gray-300 ring-1 ring-inset ring-blue-700/10">api/v1/fivem/civilian/create</span>
                    </p>

                    <h2 class="mt-16 text-lg font-semibold tracking-tight">Request Body</h2>
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
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Discord User ID
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    first_name</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Civilian First Name
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    last_name</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Civilian Last Name
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    date_of_birth</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Civilian Date of Birth
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    gender</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Gender of Civilian
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    race</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Race of Civilian
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    postal</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">number</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Postal of Civilian
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    street</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Street location of Civilian
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    city</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">City location of Civilian
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    occupation</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Occupation of Civilian
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">NULL</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    height</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Height of Civilian in inches
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    weight</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Weight of Civilian in pounds
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <span class="flex-1">

                            </span>
                        </span>

                    </code> --}}

                    <p>200 A successful call will return the civilian that was just created.</p>

                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
[
    {
        "id": 279684039,
        "user_id": 188790560658685954,
        "first_name": "TestTest",
        "last_name": "test",
        "picture": null,
        "date_of_birth": "2024-01-08T06:00:00.000000Z",
        "gender": "Male",
        "race": "Asian",
        "postal": 122334,
        "street": "Test",
        "city": "Sandy",
        "occupation": null,
        "height": "54",
        "weight": "105",
        "status": 1,
        "active_persona": 0,
        "created_at": "2024-01-22T19:16:50.000000Z",
        "updated_at": "2024-01-22T19:20:15.000000Z",
        "deleted_at": null,
        "is_violent": 0,
        "is_weapon": 0,
        "is_ill": 0,
        "is_swat": 0,
        "is_ciu": 0,
        "is_warrant": 0,
        "is_officer": 0,
        "user_department_id": null,
        "licenses": [],
        "medical_records": [],
        "vehicles": [],
        "weapons": []
    }
]
                            </pre>
                        </span>
                    </code>
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
                <div class="mr-auto text-left">
                    <dt class="text-sm font-normal tracking-tight">
                        Previous
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold hover:underline" href="{{ route('docs.api.get-started') }}">
                            Get Started
                        </a>
                    </dd>
                </div>

                <div class="ml-auto text-right">
                    <dt class="text-sm font-normal tracking-tight">
                        Next
                    </dt>

                    <dd class="mt-1">
                        <a class="text-base font-semibold hover:underline" href="{{ route('docs.api.panic-button') }}">
                            Panic Button
                        </a>
                    </dd>
                </div>
            </dl>
        </div>
    </main>
@endsection
