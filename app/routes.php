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

Route::any('/afteradminlogin', [
	'as' => '/afteradminlogin',
	'uses' => 'UserController@afterAdminLogin'
]);

Route::any('/profile', [
	'as' => '/profile',
	'uses' => 'UserController@profile'
]);

Route::any('/edit', [
	'as' => '/edit',
	'uses' => 'UserController@editAction'
]);

Route::any('/profile/edit', [
	'as' => '/profile/edit',
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



Route::any('/certificate/pp3', [
	'as' => '/certificate/pp3',
	'uses' => 'CertificateController@showPP3'
]);

Route::any('/certificate/pp4', [
	'as' => '/certificate/pp4',
	'uses' => 'CertificateController@showPP4'
]);

Route::any('/certificate/pp5', [
	'as' => '/certificate/pp5',
	'uses' => 'CertificateController@showPP5'
]);

Route::any('/certificate/pp6', [
	'as' => '/certificate/pp6',
	'uses' => 'CertificateController@showPP6'
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

Route::get('/requestprolong', function() {
	return View::make('request.requestprolong');
});


Route::get('/requestrelocation', function() {
	return View::make('request.requestrelocation');
});

Route::get('/requestsubstitute', function() {
	return View::make('request.requestsubstitute');
});

Route::get('/reasonrequestrelocation', function() {
	return View::make('request.reasonrequestrelocation');
});

Route::get('/reasonrequestsubstitute', function() {
	return View::make('request.reasonrequestsubstitute');
});

Route::get('/allRequest', function() {
	return View::make('request.allRequest');
});

//*****************************************************************************************************
//*************************** NEW CONTROLLER **********************************************************
//NewAccountController

Route::get('/requestpassing', function() {
	return View::make('request.requestpassing');
});

Route::get('/requestrm3', function() {
	return View::make('request.requestrm3');
});

Route::any('/saveuserinfo', [
	'as' => '/saveuserinfo',
	'uses' => 'NewAccountController@saveUserInfo'
]);

Route::any('/denyaccount', [
	'as' => '/denyaccount',
	'uses' => 'NewAccountController@denyAccount'
]);

Route::any('/approveaccount', [
	'as' => '/approveaccount',
	'uses' => 'NewAccountController@approveAccount'
]);

Route::any('/createuser', [
	'as' => '/createuser',
	'uses' => 'NewAccountController@createUser'
]);

Route::any('/changepassword', [
	'as' => '/changepassword',
	'uses' => 'NewAccountController@changePassword'
]);

Route::any('/login', [
	'as' => '/login',
	'uses' => 'NewAccountController@login'
]);

Route::any('/logout', [
	'as' => '/logout',
	'uses' => 'NewAccountController@logout'
]);


//NewCertificateController

Route::any('/displaycertificate', [
	'as' => '/displaycertificate',
	'uses' => 'NewCertificateController@displayCertificate'
]);

//NewLabController

Route::any('/checklabresult', [
	'as' => '/checklabresult',
	'uses' => 'NewLabController@checkLabResult'
]);

//NewPageController

Route::any('/', [
	'as' => '/',
	'uses' => 'NewPageController@goToHomePage'
]);

Route::any('/about', [
	'as' => '/about',
	'uses' => 'NewPageController@goToAboutPage'
]);

Route::any('/details', [
	'as' => '/details',
	'uses' => 'NewPageController@goToDetailsPage'
]);

Route::any('/contact', [
	'as' => '/contact',
	'uses' => 'NewPageController@goToContactPage'
]);

Route::any('/signup', [
	'as' => '/signup',
	'uses' => 'NewPageController@goToSignUpPage'
]);

Route::any('/profile', [
	'as' => '/profile',
	'uses' => 'NewPageController@goToProfilePage'
]);

Route::any('/request', [
	'as' => '/request',
	'uses' => 'NewPageController@goToRequestPage'
]);

Route::any('/verification', [
	'as' => '/verification',
	'uses' => 'NewPageController@goToVerificationPage'
]);

Route::any('/requestlist', [
	'as' => '/requestlist',
	'uses' => 'NewPageController@goToRequestList'
]);

Route::any('/certificationlist', [
	'as' => '/certificationlist',
	'uses' => 'NewPageController@goToCertificationList'
]);

Route::any('/accountlist', [
	'as' => '/accountlist',
	'uses' => 'NewPageController@goToAccountList'
]);

Route::any('/lablist', [
	'as' => '/lablist',
	'uses' => 'NewPageController@goToLabList'
]);
