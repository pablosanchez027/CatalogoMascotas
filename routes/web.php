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

Route::resource('mascotas', 'MascotaController');
Route::get('starter','StarterController@starter')->name('starter');

Route::resource('especies', 'EspecieController');
Route::get('starter2','Starter2Controller@starter2')->name('starter2');