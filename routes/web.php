<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title = 'Trova il giusto link per accedere alla stanza segreta';
    $text = 'made by anas hamimi';
    return view('home', compact('title', 'text'));
})->name('home');

Route::get('secret', function () {
    $title = 'Congratulazioni hai trovato la stanza segreta';
    return view('secret', compact('title'));
})->name('secret');

Route::get('wrong', function () {
    $title = 'Mi dispiace non è la stanza segreta :)';
    return view('wrong', compact('title'));
})->name('wrong');
