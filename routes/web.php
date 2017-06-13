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
    return view('layout.base');
});

Route::get('/my-donations', function () {
    return view('my-donations');
});

Route::resource('receiver', 'ReceiverController');

Route::resource('donations', 'DonationsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
