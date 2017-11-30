<?php

/* AUTENTICAZIONE */
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/create', 'UserController@create');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::post('/users/{user}/edit', 'UserController@update');
