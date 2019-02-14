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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', 'PageController@index');
Route::get('/album', 'PageController@album');
Route::get('/help', 'PageController@help');
Route::get('/reminders', 'PageController@reminders');

//CRUD
Route::resource('posts', 'EntriesController');
//Route::post('/posts{{$id}}','EntriesController@show');




Auth::routes();

Route::get('/', 'HomeController@index');
