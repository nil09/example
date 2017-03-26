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

Route::get('/','PostController@index');

Route::get('/new-post','PostController@create');

Route::post('/store-post','PostController@store');

Route::get('/new-category','CategoryController@create');

Route::post('/store-category','CategoryController@store');

Route::get('/new-tag','TagController@create');

Route::post('/store-tag','TagController@store');
