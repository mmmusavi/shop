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

Route::get('/login',['as' => 'login', 'uses' => 'TestController@login']);
Route::post('/login','TestController@loginPost');

Route::get('/register','TestController@register');
Route::post('/register-post','TestController@registerPost');

Route::get('/test','TestController@test');

Route::get('/form','TestController@form');
Route::post('/form','TestController@formPost');

Route::get('/profile','ProfileController@index');

Route::get('/', function () {
    return view('welcome');
});
