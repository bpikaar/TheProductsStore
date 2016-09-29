<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);

Route::get('users', ['as' => 'users.index', 'uses' => 'UserController@index']);
Route::post('users/producten-opslaan',
    ['as' => 'users.storeProducts', 'uses' => 'UserController@storeProducts']);

Route::resource('products', 'ProductController');
