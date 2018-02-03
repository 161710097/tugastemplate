<?php

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
    return view('welcome');
});

Route::get('/galeri', function () {
    return view('layouts.galeri');
});

Route::get('/chelsea', function () {
    return view('layouts.rumah');
});

Route::get('/sejarah', function () {
    return view('layouts.sejarah');
});

Route::get('/manager', function () {
    return view('layouts.manager');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('tabel','jaja@tabel');

Auth::routes();

Route::get('/chelsea', 'HomeController@index')->name('home');
