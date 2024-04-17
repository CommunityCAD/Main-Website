<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home2')->name('home');
Route::view('/pricing', 'pricing')->name('pricing');

Route::view('posts/just-ship-v1', 'posts.just-ship-v1')->name('posts.just-ship-v1');

Route::view('/docs', 'docs.home')->name('docs.home');
Route::view('/docs/getting_started/road_map', 'docs.getting_started.road_map')->name('docs.getting_started.road_map');
Route::view('/docs/getting_started/known_issues', 'docs.getting_started.known_issues')->name('docs.getting_started.known_issues');

Route::view('docs/install', 'docs.install')->name('docs.install');
Route::view('docs/get-started', 'docs.get-started')->name('docs.get-started');
Route::view('docs/discord-bot-integration', 'docs.discord-bot-integration')->name('docs.discord-bot-integration');
Route::view('docs/settings-page', 'docs.settings-page')->name('docs.settings-page');


Route::view('docs/api/get-started', 'docs.api.get-started')->name('docs.api.get-started');
Route::view('docs/api/panic-button', 'docs.api.panic-button')->name('docs.api.panic-button');
Route::view('docs/api/911-call', 'docs.api.911-call')->name('docs.api.911-call');

Route::view('docs/api/civilian', 'docs.api.civilian')->name('docs.api.civilian');

Route::view('docs/api/emergency/panic', 'docs.api.emergency.panic')->name('docs.api.emergency.panic');
Route::view('docs/api/emergency/unit_status', 'docs.api.emergency.unit_status')->name('docs.api.emergency.unit_status');
Route::view('docs/api/emergency/unit_location', 'docs.api.emergency.unit_location')->name('docs.api.emergency.unit_location');
Route::view('docs/api/emergency/get_calls', 'docs.api.emergency.get_calls')->name('docs.api.emergency.get_calls');
Route::view('docs/api/emergency/get_call', 'docs.api.emergency.get_call')->name('docs.api.emergency.get_call');
Route::view('docs/api/emergency/create_call', 'docs.api.emergency.create_call')->name('docs.api.emergency.create_call');
Route::view('docs/api/emergency/add_call_note', 'docs.api.emergency.add_call_note')->name('docs.api.emergency.add_call_note');
