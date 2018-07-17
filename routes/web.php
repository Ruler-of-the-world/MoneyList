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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/money', 'LoadController@index')->name('money');
Route::post('/save', 'SaveController@index')->name('save');
Route::post('/edit', 'EditController@index')->name('edit');
Route::post('/list', 'ListLoadController@index');

