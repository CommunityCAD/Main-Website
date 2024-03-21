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

Route::view('docs', 'docs.index')->name('docs.home');
Route::view('docs/discord-bot-integration', 'docs.discord-bot-integration')->name('docs.discord-bot-integration');
