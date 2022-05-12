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

Route::get('/', 'WelcomeController@index');
Route::post('/send-telegram', 'WelcomeController@sendTelegramData');

Auth::routes();

Route::group(['prefix' => 'admin-metallolom', 'middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/price', 'PriceController@index')->name('price');
    Route::get('/create', 'PriceController@create')->name('create');
    Route::post('/store', 'PriceController@store')->name('store');
    Route::get('/show/{id}', 'PriceController@show')->name('show');
    Route::get('/edit/{id}', 'PriceController@edit')->name('edit');
    Route::post('/update', 'PriceController@update')->name('update');
    Route::get('/destroy/{id}', 'PriceController@destroy')->name('destroy');
});
