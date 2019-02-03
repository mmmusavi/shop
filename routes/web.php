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

Route::get('/add/{name}/{desc}/{cat}','TestController@add');

Route::get('/product/{id}','TestController@product');

Route::get('/cat/{id}','TestController@cat');

Route::get('/test','TestController@test');

Route::get('/', function () {
    return view('welcome');
});
