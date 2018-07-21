<?php

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

Route::get('/upload_barang', function () {
    return view('upload_barang');
});

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('loginCustomer');
Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('registeringCustomer');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
