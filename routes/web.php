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
    return view('homepage');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/beli', function () {
    return view('beli');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
