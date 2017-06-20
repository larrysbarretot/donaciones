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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('layout.base');
});

Route::get('/my-donations', 'DonationsController@index');

Route::resource('receiver', 'ReceiverController');

Route::resource('donations', 'DonationsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => '/nueva-donacion'], function () {

        Route::get('/paso-1', 'DonationsController@donacionPaso1');

        Route::get('/paso-2', 'DonationsController@donacionPaso2');

    });
});
