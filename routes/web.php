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
    return view('selection');
});

Route::get('/index', 'HomeController@index')->name('home');

Route::post('/superhero/{slug}', 'SuperheroController@emergency')->name('emergency');

Route::get('/superheroes', 'SuperheroController@index');

Route::get('/superhero/{slug}', 'SuperheroController@show');

Auth::routes();
