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
    $title = 'Hello World!';
    $text = 'made by anas hamimi';
    return view('home', compact('title', 'text'));
});

Route::get('links', function () {
    $title = 'Choose a link';
    return view('links', compact('title'));
});
