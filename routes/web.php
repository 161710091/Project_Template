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

Route::get('rumah', 'LatihanController@rumah');
Route::get('paragraph', 'LatihanController@paragraph');
Route::get('table', 'LatihanController@table');
Route::get('foto', 'LatihanController@foto');
Route::get('about', 'LatihanController@costum1');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
