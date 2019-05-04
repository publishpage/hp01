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
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/tournament', function () {
    return view('tournament');
});

Route::get('/up', function () {
    return view('admin.upload');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
