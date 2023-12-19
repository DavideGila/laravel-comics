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
    $content = config('bluebar.content');
    return view('home', compact('content'));
})->name('home');

Route::get('/movie', function () {
    $product = config('comics.comic');
    $content = config('bluebar.content');
    return view('pages.movie', compact('product', 'content'));
})->name('movie');

Route::get('/comics', function () {
    $product = config('comics.comic');
    $content = config('bluebar.content');
    return view('comics.index', compact('product', 'content'));
})->name('comics.index');
