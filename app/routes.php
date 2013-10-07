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

Route::any('/checkrequest', [
	'as' => '/checkrequest',
	'uses' => 'RequestController@checkRequestAction'
]);

Route::any('/afterrequest', [
	'as' => '/afterrequest',
	'uses' => 'RequestController@afterRequest'
]);

Route::any('/requestPP1', [
	'as' => '/requestPP1',
	'uses' => 'RequestController@requestPP1'
]);

Route::any('/createPP1Request', [
	'as' => '/createPP1Request',
	'uses' => 'RequestController@createPP1RequestAction'
]);

Route::any('/requestPP8', [
	'as' => '/requestPP8',
	'uses' => 'RequestController@requestPP8'
]);

Route::any('/createPP8Request', [
	'as' => '/createPP8Request',
	'uses' => 'RequestController@createPP8RequestAction'
]);

Route::any('/requestPP9', [
	'as' => '/requestPP9',
	'uses' => 'RequestController@requestPP9'
]);

Route::any('/createPP9Request', [
	'as' => '/createPP9Request',
	'uses' => 'RequestController@createPP9RequestAction'
]);

Route::any('/verification', [
	'as' => '/verification',
	'uses' => 'RequestController@verification'
]);

Route::any('/verificationAccount', [
	'as' => '/verificationAccount',
	'uses' => 'RequestController@verificationAccountAll'
]);

Route::any('/verificationAccount/{id}', [
	'as' => '/verificationAccount/{id}',
	'uses' => 'RequestController@verificationUser'
]);

Route::any('/accountApprove/{id}', [
	'as' => '/accountApprove/{id}',
	'uses' => 'RequestController@accountApproveAction'
]);

Route::any('/accountDeny/{id}', [
	'as' => '/accountDeny/{id}',
	'uses' => 'RequestController@accountDenyAction'
]);

Route::any('/verificationSeed', [
	'as' => '/verificationSeed',
	'uses' => 'RequestController@verificationSeedAll'
]);

Route::any('/verificationSeed/pp1/{id}', [
	'as' => '/verificationSeed/pp1/{id}',
	'uses' => 'RequestController@verificationSeedPersonPP1'
]);

Route::any('/verificationSeed/pp1/information/{id}', [
	'as' => '/verificationSeed/pp1/information/{id}',
	'uses' => 'RequestController@verificationSeedPP1'
]);

Route::any('/pp1verify/{id}', [
	'as' => '/pp1verify/{id}',
	'uses' => 'RequestController@pp1VerifyAction'
]);

Route::any('/pp1deny/{id}', [
	'as' => '/pp1deny/{id}',
	'uses' => 'RequestController@pp1DenyAction'
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


