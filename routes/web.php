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

Route::get("/","MainController@top");
Route::get("menu","MainController@menu");
Route::get('/contact',"MainController@contact");
Route::post('/contact',"MainController@postContact");


Route::get('/news','MainController@news');

Route::get("instagram","InstagramController@index");
