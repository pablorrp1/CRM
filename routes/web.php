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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/usuario/{name}/{state}', function ($name, $state) {
    return view('usuario', array("name" => $name, "state" => $state, "points" => random_int(1, 100)));
});

Route::get('/estaciones', function () {
    return view('estaciones');
});

Route::get('/membresias', function () {
    return view('membresias');
});

Route::get('/finanzas', function () {
    return view('finanzas');
});