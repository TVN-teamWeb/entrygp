<?php

/* AUTENTICAZIONE */
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users')->middleware('auth');
Route::get('/users/create', 'UserController@create')->middleware('auth');
Route::get('/users/{user}/edit', 'UserController@edit')->middleware('auth');
Route::post('/users/{user}/edit', 'UserController@update')->middleware('auth');


//WORKS
Route::get('/works', 'WorkController@index')->middleware('auth');
Route::get('/works/{user}/create', 'WorkController@create')->middleware('auth');
Route::get('/works/{work}/edit', 'WorkController@edit')->middleware('auth');
