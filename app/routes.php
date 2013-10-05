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

//UserController Routes

Route::any('/', [
	'as' => '/',
	'uses' => 'UserController@index'
]);

Route::any('/signup', [
	'as' => '/signup',
	'uses' => 'UserController@signup'
]);

Route::any('/create', [
	'as' => '/create',
	'uses' => 'UserController@createAction'
]);

Route::any('/status', [
	'as' => '/status',
	'uses' => 'UserController@status'
]);

Route::any('/login', [
	'as' => '/login',
	'uses' => 'UserController@loginAction'
]);

Route::any('/afterlogin', [
	'as' => '/afterlogin',
	'uses' => 'UserController@afterLogin'
]);

Route::any('/profile', [
	'as' => '/profile',
	'uses' => 'UserController@profile'
]);

Route::any('/edit', [
	'as' => '/edit',
	'uses' => 'UserController@edit'
]);

Route::any('/update', [
	'as' => '/update',
	'uses' => 'UserController@updateAction'
]);

Route::any('/delete', [
	'as' => '/delete',
	'uses' => 'UserController@deleteAction'
]);

Route::any('/logout', [
	'as' => '/logout',
	'uses' => 'UserController@logoutAction'
]);

Route::any('/afterregister', [
	'as' => '/afterregister',
	'uses' => 'UserController@afterregister'
]);


//RequestController Routes

Route::any('/request', [
	'as' => '/request',
	'uses' => 'RequestController@request'
]);

Route::any('/requestPP1', [
	'as' => '/requestPP1',
	'uses' => 'RequestController@requestPP1'
]);

Route::any('/requestPP8', [
	'as' => '/requestPP8',
	'uses' => 'RequestController@requestPP8'
]);

Route::any('/requestPP9', [
	'as' => '/requestPP9',
	'uses' => 'RequestController@requestPP9'
]);

Route::any('/verification', [
	'as' => '/verification',
	'uses' => 'RequestController@verification'
]);

Route::any('/verificationAccountAll', [
	'as' => '/verificationAccountAll',
	'uses' => 'RequestController@verificationAccountAll'
]);

Route::any('/verificationAccount/{id}', [
	'as' => '/verificationAccount/{id}',
	'uses' => 'RequestController@verificationUser'
]);

Route::get('/details', function() {
	return View::make('details');
});

Route::get('/contact', function() {
	return View::make('contact');
});

Route::get('/about', function() {
	return View::make('about');
});

Route::get('/requstPP8', function() {
	return View::make('user.requestPP8');
});

Route::get('/requestPP9', function() {
	return View::make('request.requestPP9');
});

Route::get('/firstUser', function() {
	return View::make('user.firstUser');
});

Route::get('/vertifyPP8', function() {
	return View::make('user.vertifyPP8');
});

Route::get('/vertifyPP9', function() {
	return View::make('user.vertifyPP9');
});


Route::get('/verification', function() {
	return View::make('request.verification');
});

Route::get('/seedVerificationAll', function() {
	return View::make('request.seedVerificationAll');
});

Route::get('/accountVerificationAll', function() {
	return View::make('request.accountVerificationAll');
});

Route::get('/accountVerification', function() {
	return View::make('request.accountVerification');
});

Route::get('/seedVerificationPerson', function() {
	return View::make('request.seedVerificationPerson');
});

Route::get('/verificationUser', function() {
	return View::make('request.verificationUser');
});

Route::get('/informationPP1Officer', function() {
	return View::make('request.informationPP1Officer');
});

Route::get('/Verification', function() {
	return View::make('request.Verification');
});

Route::get('/information', function() {
	return View::make('user.information');
});