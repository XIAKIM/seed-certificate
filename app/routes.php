<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'UserController@index');
Route::resource('/profile', 'UserController@show');
Route::resource('/signup', 'UserController@create');
Route::resource('/status', 'UserController@showStatus');

Route::resource('/request', 'RequestController@index');
Route::resource('/approve', 'RequestController@approve');
Route::resource('/check', 'RequestController@check');
Route::resource('/form', 'RequestController@showForm');

Route::resource('/certificate', 'CertificateController@index');
Route::get('/certificate/{id}', 'CertificateController@show');

Route::get('/details', function() {
	return View::make('details');
});

Route::get('/contact', function() {
	return View::make('contact');
});

Route::get('/about', function() {
	return View::make('about');
});