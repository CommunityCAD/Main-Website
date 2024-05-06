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
                        Create Call
                    </h1>
                </header>

                <p class="mt-2 text-xl text-slate-300">
                    This endpoint allows you to create calls.
                </p>

                <div class="space-y-3" id="create_call">
                    <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                        Create Call
                    </h3>
                    <p class="">
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-green-500 ring-1 ring-inset ring-blue-700/10">POST</span>
                        <span
                            class="inline-flex items-center rounded-md bg-gray-700 px-2 py-1 text-base font-medium text-gray-300 ring-1 ring-inset ring-blue-700/10">api/v1/emergency/create_call</span>
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
                                    narrative</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">What is happening
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    location</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Where is it happening
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    city</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Where is it happening
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Required</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    type</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">number</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Who you need.<br>
                                    Options: 1 = LEO; 2 = Fire; 3 = EMS;
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-yellow-500">1</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    source</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">How you got the call.<br>
                                    Options: ["911 CALL", "NON-EMERGENCY", "OFFICER", "FIRE"]
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-yellow-500">911 CALL</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    status</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Status of Call.
                                    <a class="underline" href="#status_codes">
                                        List of status codes options.
                                    </a>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-yellow-500">RCVD</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    nature</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">string</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Type of Call.
                                    <a class="underline" href="#nature_codes">
                                        List of all call nature codes options.
                                    </a>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-yellow-500">OTHER</td>
                            </tr>

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-0">
                                    priority</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">number</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">Prioity number 1-5.
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-yellow-500">3</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 class="mt-16 text-lg font-semibold tracking-tight" id="example_call">Example Call</h2>
                    <code
                        class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                        <span class="flex gap-4">
                            <pre class="flex-1">
{
"narrative": "Test narrative",
"location": "Location",
"city": "City",
"nature": "OTHER", // Optional
"status": "RCVD", // Optional
"type": "1", // Optional
"priority": "3", // Optional
"source": "911 Call" // Optional
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
    "message": "",
    "data": [
        {
            "id": 2400018,
            "nature": "OTHER",
            "nature_name": "OTHER",
            "narrative": "Test Narrative",
            "location": "Test Location",
            "city": "City",
            "priority": 3,
            "type": 1,
            "status": "RCVD",
            "status_name": "Call Open",
            "source": "911 Call",
            "created_at": "04/16/2024 16:18:30",
            "updated_at": "04/16/2024 16:18:30",
            "call_log": [],
            "call_civilians": [],
            "call_vehicles": []
        }
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
    "message": "Validation errors",
    "data": {
        "narrative": [
            "The narrative field is required."
        ],
        "location": [
            "The location field is required."
        ],
        "city": [
            "The city field is required."
        ],
        "nature": [
            "The nature must only contain letters."
        ],
        "priority": [
            "The priority must be a number."
        ]
    }
}</pre>
                        </span>
                    </code>

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
                                    <p>If an invaild Nature or Source is entered the default will be used. No error will be
                                        displayed.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-3" id="nature_codes">
                        <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                            Nature Codes
                        </h3>
                        <p class="">
                        <ul class="list-inside list-disc">
                            <li><span class='font-bold text-lg'>ABDUCTIO</span> - ABDUCTION</li>
                            <li><span class='font-bold text-lg'>ABUSEABA</span> - ABUSE ABANDONMENT NEGLECT</li>
                            <li><span class='font-bold text-lg'>ACCPRT</span> - ACCIDENT (REPORT ONLY)</li>
                            <li><span class='font-bold text-lg'>ACCPD</span> - ACCIDENT PD</li>
                            <li><span class='font-bold text-lg'>ALARM</span> - ALARM COMPANY - POLICE</li>
                            <li><span class='font-bold text-lg'>ANIMAL</span> - ANIMAL PROBLEM</li>
                            <li><span class='font-bold text-lg'>ASSLTIP</span> - ASSAULT IN PROGRESS</li>
                            <li><span class='font-bold text-lg'>ASSAULT REPORT</span> - ASSAULT REPORT</li>
                            <li><span class='font-bold text-lg'>ASSLTSEX</span> - ASSAULT SEXUAL</li>
                            <li><span class='font-bold text-lg'>ASSLTIJ</span> - ASSAULT WITH INJURY (NOT IN PROGRESS)</li>
                            <li><span class='font-bold text-lg'>ATL</span> - ATTEMPT TO LOCATE</li>
                            <li><span class='font-bold text-lg'>BOMBEXP</span> - BOMB EXPLOSION</li>
                            <li><span class='font-bold text-lg'>BOMBFND</span> - BOMB FOUND</li>
                            <li><span class='font-bold text-lg'>BOMBTHRT</span> - BOMB THREAT</li>
                            <li><span class='font-bold text-lg'>BURGLARY</span> - BURGLARY HOME INVASION</li>
                            <li><span class='font-bold text-lg'>BURGIP</span> - BURGLARY IN PROGRESS</li>
                            <li><span class='font-bold text-lg'>BURG</span> - BURGLARY REPORT</li>
                            <li><span class='font-bold text-lg'>CARJACK</span> - CAR JACKING</li>
                            <li><span class='font-bold text-lg'>CONTSUBS</span> - CONTROLLED SUBSTANCE</li>
                            <li><span class='font-bold text-lg'>DECEASED</span> - DECEASED PERSON</li>
                            <li><span class='font-bold text-lg'>DIST</span> - DISTURBANCE</li>
                            <li><span class='font-bold text-lg'>DISTDOME</span> - DISTURBANCE - DOMESTIC</li>
                            <li><span class='font-bold text-lg'>DISTNOIS</span> - DISTURBANCE - NOISE</li>
                            <li><span class='font-bold text-lg'>DISTURBN</span> - DISTURBANCE NUISANCE</li>
                            <li><span class='font-bold text-lg'>DISTWEAP</span> - DISTURBANCE W/WEAPON</li>
                            <li><span class='font-bold text-lg'>DOMESTIC</span> - DOMESTIC DISTURBANCE VIOLENCE</li>
                            <li><span class='font-bold text-lg'>DUI</span> - DRIVING UNDER THE INFLUENCE (IMPAIRED DRIVING)
                            </li>
                            <li><span class='font-bold text-lg'>FBRUSH</span> - GRASS, BRUSH, or OR TIMBER FIRE</li>
                            <li><span class='font-bold text-lg'>FCOALARM</span> - CARBON MONOXIDE ALARM</li>
                            <li><span class='font-bold text-lg'>FCONFINE</span> - CONFINED SPACE RESCUE</li>
                            <li><span class='font-bold text-lg'>FEXTRIC</span> - EXTRICATION</li>
                            <li><span class='font-bold text-lg'>FHAZMAT</span> - HAZ-MAT</li>
                            <li><span class='font-bold text-lg'>FIGHT</span> - FIGHT</li>
                            <li><span class='font-bold text-lg'>FIGHTWEA</span> - FIGHT W/WEAPON</li>
                            <li><span class='font-bold text-lg'>FNDPERS</span> - FOUND PERSON</li>
                            <li><span class='font-bold text-lg'>FNDPROP</span> - FOUND PROPERTY</li>
                            <li><span class='font-bold text-lg'>FNONSTR</span> - NON-STRUCTURE FIRE</li>
                            <li><span class='font-bold text-lg'>FSTRUCT</span> - STRUCTURE FIRE</li>
                            <li><span class='font-bold text-lg'>GUNSHOTS</span> - GUNSHOTS REPORTED</li>
                            <li><span class='font-bold text-lg'>HARASSME</span> - HARASSMENT STALKING THREAT</li>
                            <li><span class='font-bold text-lg'>HITRUN</span> - HIT & RUN</li>
                            <li><span class='font-bold text-lg'>HITRUNIJ</span> - HIT & RUN WITH INJURY</li>
                            <li><span class='font-bold text-lg'>HOMICID</span> - HOMICIDE</li>
                            <li><span class='font-bold text-lg'>HOSTAGE</span> - HOSTAGE</li>
                            <li><span class='font-bold text-lg'>INDECENC</span> - INDECENCY LEWDNESS</li>
                            <li><span class='font-bold text-lg'>INDEXP</span> - INDECENT EXPOSURE</li>
                            <li><span class='font-bold text-lg'>INTOXDRV</span> - INTOXICATED DRIVER</li>
                            <li><span class='font-bold text-lg'>INTOXPER</span> - INTOXICATED PERSON</li>
                            <li><span class='font-bold text-lg'>JUVENILE</span> - JUVENILE TROUBLE</li>
                            <li><span class='font-bold text-lg'>KIDNAPIP</span> - KIDNAPPING IN PROGRESS</li>
                            <li><span class='font-bold text-lg'>KIDNAP</span> - KIDNAPPING REPORT</li>
                            <li><span class='font-bold text-lg'>MEDI</span> - MEDICAL</li>
                            <li><span class='font-bold text-lg'>MISCELLA</span> - MISCELLANEOUS</li>
                            <li><span class='font-bold text-lg'>MISSINGF</span> - MISSING RUNAWAY FOUND PERSON</li>
                            <li><span class='font-bold text-lg'>NCORDER</span> - NO CONTACT ORDER VIOLATION</li>
                            <li><span class='font-bold text-lg'>OTHER</span> - OTHER</li>
                            <li><span class='font-bold text-lg'>OUTSIDEF</span> - OUTSIDE FIRE</li>
                            <li><span class='font-bold text-lg'>PICKUP</span> - PICKUP ITEM/PROPERTY</li>
                            <li><span class='font-bold text-lg'>PURSUITF</span> - FOOT PURSUIT</li>
                            <li><span class='font-bold text-lg'>PURSUITV</span> - VEHICLE PURSUIT</li>
                            <li><span class='font-bold text-lg'>RECKLESS</span> - RECKLESS DRIVER</li>
                            <li><span class='font-bold text-lg'>RECOVERY</span> - RECOVERY STOLEN VEHICLE</li>
                            <li><span class='font-bold text-lg'>ROBBERYC</span> - ROBBERY CARJACKING</li>
                            <li><span class='font-bold text-lg'>ROBERYIP</span> - ROBBERY IN PROGRESS</li>
                            <li><span class='font-bold text-lg'>ROBBERY</span> - ROBBERY REPORT</li>
                            <li><span class='font-bold text-lg'>RUNAWAY</span> - RUNAWAY</li>
                            <li><span class='font-bold text-lg'>SHOOTING</span> - SHOOTING</li>
                            <li><span class='font-bold text-lg'>SRT</span> - SRT CALL</li>
                            <li><span class='font-bold text-lg'>STABBING</span> - STABBING</li>
                            <li><span class='font-bold text-lg'>STALLVEH</span> - STALLED VEHICLE</li>
                            <li><span class='font-bold text-lg'>SUBJWEAP</span> - SUBJECT WITH A WEAPON</li>
                            <li><span class='font-bold text-lg'>SUSPPKGB</span> - SUSPICIOUS PACKAGE/BOMB THREAT</li>
                            <li><span class='font-bold text-lg'>SUSPPERS</span> - SUSPICIOUS PERSON</li>
                            <li><span class='font-bold text-lg'>SUSPVEH</span> - SUSPICIOUS VEHICLE</li>
                            <li><span class='font-bold text-lg'>SUSPICIO</span> - SUSPICIOUS WANTED PERSON CIRCUMSTANCES
                                VEHICLE</li>
                            <li><span class='font-bold text-lg'>THEFT</span> - THEFT</li>
                            <li><span class='font-bold text-lg'>THEFTFRV</span> - THEFT FROM VEHICLE</li>
                            <li><span class='font-bold text-lg'>THEFTIC</span> - THEFT IN CUSTODY</li>
                            <li><span class='font-bold text-lg'>THEFTIP</span> - THEFT IN PROGRESS</li>
                            <li><span class='font-bold text-lg'>THEFTVEH</span> - THEFT OF VEHICLE</li>
                            <li><span class='font-bold text-lg'>TRAFFTOW</span> - TOW VEHICLE</li>
                            <li><span class='font-bold text-lg'>TRAFFIC</span> - TRAFFIC</li>
                            <li><span class='font-bold text-lg'>TRAFFHAZ</span> - TRAFFIC HAZARD</li>
                            <li><span class='font-bold text-lg'>TS</span> - TRAFFIC STOP</li>
                            <li><span class='font-bold text-lg'>TRAFFICA</span> - TRAFFIC TRANSPORTATION ACCIDENT (CRASH)
                            </li>
                            <li><span class='font-bold text-lg'>TRAFFICV</span> - TRAFFIC VIOLATION</li>
                            <li><span class='font-bold text-lg'>TRESPASS</span> - TRESPASSING UNWANTED</li>
                            <li><span class='font-bold text-lg'>TRBLUNK</span> - TROUBLE UNKNOWN</li>
                            <li><span class='font-bold text-lg'>VEHICLEF</span> - VEHICLE FIRE</li>
                            <li><span class='font-bold text-lg'>WATERRES</span> - WATER RESCUE</li>
                            <li><span class='font-bold text-lg'>WATERCRA</span> - WATERCRAFT IN DISTRESS</li>
                            <li><span class='font-bold text-lg'>WELFCHK</span> - WELFARE CHECK</li>
                            <li><span class='font-bold text-lg'>TEST</span> - TEST CALL</li>
                        </ul>
                        </p>
                    </div>

                    <div class="space-y-3" id="status_codes">
                        <h3 class="mt-16 text-2xl font-semibold tracking-tight">
                            Status Codes
                        </h3>
                        <p class="">
                        <ul class="list-inside list-disc">
                            <li><span class='font-bold text-lg'>RCVD</span> - Call Open</li>
                            <li><span class='font-bold text-lg'>HLD</span> - Call On Hold</li>
                            <li><span class='font-bold text-lg'>ENRT</span> - Units Enroute</li>
                            <li><span class='font-bold text-lg'>ARRVD</span> - Units Arrived Onscene</li>
                        </ul>
                        </p>
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
