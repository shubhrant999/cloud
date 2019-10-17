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

Route::get('/admin', 'Admin@index');
Route::get('/login', 'Admin@login');
Route::get('/logout', 'Admin@logout');

Route::get('/', function(){
	//return resource_path('views/users');
    return view('welcome');
});

Route::get('users', function () {
    return view('users');
});


Route::get('/main', 'TriController@index');
Route::get('/about', 'TriController@about');
Route::get('/services', 'TriController@services');
