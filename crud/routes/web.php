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
Route::get('/test/{id}','CrudController@test');
Route::get('/index','CrudController@index');
Route::get('/create','CrudController@create');
Route::post('/create','CrudController@store');
Route::get('/index/{id}','CrudController@show');
Route::post('/update/{id}','CrudController@test');
Route::post('/destroy/{id}','CrudController@destroy');