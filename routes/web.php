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

Route::get('/', 'ViewController@show_index');
Route::get('/index_2', 'ViewController@show_index_2');
Route::get('/index_3', 'ViewController@show_index_3');
Route::get('/widgets', 'ViewController@show_widgets');
