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

Route::get('/user', 'WebControllers\UserController@index');
Route::get('/user/add', 'WebControllers\UserController@addUser');
Route::get('/user/edit/{id}', 'WebControllers\UserController@editUser');

Route::post('/user', 'WebControllers\UserController@storeUser');
Route::post('/user/update/{id}', 'WebControllers\UserController@updateUser');
Route::get('/user/delete/{id}', 'WebControllers\UserController@deleteUser');
