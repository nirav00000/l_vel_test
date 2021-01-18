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

Route::get('/hello', function () {
    return view('hello');
});






Route::get('hello1/{j}', 'helloController@display_function');


//===============laravel crud====================
Route::get('wholex', 'helloController@wholex');
Route::get('editx/{name}', 'helloController@editx');
Route::get('viewx/{name}', 'helloController@viewx');
Route::post('insertx', 'helloController@insertx');
Route::get('deletex/{id}', 'helloController@deletex');
Route::put('updatex', 'helloController@updatex');