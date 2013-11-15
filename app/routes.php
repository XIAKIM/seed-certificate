<?php

Route::get('/allRequest', function() {
	return View::make('request.allRequest');
});

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

Route::any('/denyaccount/{id}', [
	'as' => '/denyaccount',
	'uses' => 'NewAccountController@denyAccount'
]);

Route::any('/approveaccount/{id}', [
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

Route::any('/edit', [
	'as' => '/edit',
	'uses' => 'NewAccountController@changePassword'
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

Route::any('/afterregister', [ 
	'as'=> '/afterregister',
	'uses' => 'NewPageController@goToAfterRegisterPage'
]);
Route::any('/afterlogin', [
	'as' => '/afterlogin',
	'uses' => 'NewPageController@goToAfterLoginPage'
]);
Route::any('/afteradminlogin', [
	'as' => '/afteradminlogin',
	'uses' => 'NewPageController@goToAfterAdminLoginPage'
]);
Route::any('/profile', [
	'as' => '/profile',
	'uses' => 'NewPageController@goToProfilePage'
]);


Route::any('/profile/changepassword', [
	'as' => '/profile/changepassword',
	'uses' => 'NewPageController@goToChangePasswordPage'
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

//List status
Route::any('/certificationlist', [
	'as' => '/certificationlist',
	'uses' => 'NewPageController@goToCertificationList'
]);

Route::any('/accountlist', [
	'as' => '/accountlist',
	'uses' => 'NewPageController@goToAccountListPage'
]);
Route::any('/accountlist/{id}', [
	'as' => '/accountlsit/{id}',
	'uses' => 'NewPageController@goToVerificationUserAccountPage'
]);

Route::get('/lablist', function() {
	return View::make('request.verificationLab');
});

Route::get('/requestPP8', function() {
	return View::make('request.requestPP8');
});

Route::any('/requestlist', [
	'as' => '/requestlist',
	'uses' => 'NewPageController@goToRequestListPage'
]);
Route::any('/afterrequest', [
	'as' => '/afterrequest', 
	'uses' => 'NewPageController@gotoAfterRequestPage']);

Route::any('/requestlist/pp1/{id}', [
	'as' => '/requestlist/pp1/{id}',
	'uses' => 'NewPageController@goToVerificationRequestPP1'
]);

Route::any('/requestlist/pp1/information/{id}', [
	'as' => '/requestlist/pp1/information/{id}',
	'uses' => 'NewPageController@goToRequestInformationPP1Page'
]);

Route::get('/formpp2', function() {
	return View::make('form.formpp2');
});

Route::get('/formpp7', function() {
	return View::make('form.formpp7');
});

Route::get('/formpp10', function() {
	return View::make('form.formpp10');
});

Route::get('/formpp11', function() {
	return View::make('form.formpp11');
});

Route::get('/formpp12', function() {
	return View::make('form.formpp12');
});

Route::get('/formrm3', function() {
	return View::make('form.formrm3');
});
Route::get('/requestpp2table', function() {
	return View::make('request.requestpp2table');
});

Route::get('/dabout', function() {
	return View::make('details.about');
});

Route::get('/dcontract', function() {
	return View::make('details.contract');
});

Route::get('/alldetails', function() {
	return View::make('details.alldetails');
});

Route::get('/getstart', function() {
	return View::make('details.getstart');
});

Route::get('/howdoirequestpage', function() {
	return View::make('details.howdoirequestpage');
});

Route::get('/howtochangeinfo', function() {
	return View::make('details.howtochangeinfo');
});

Route::get('/howtogetcertification', function() {
	return View::make('details.howtogetcertification');
});

Route::get('/howtorequestpp1', function() {
	return View::make('details.howtorequestpp1');
});

Route::get('/howtorequestpp1', function() {
	return View::make('details.howtorequestpp10');
});

Route::get('/howtorequestpp1', function() {
	return View::make('details.howtorequestpp11');
});

Route::get('/howtorequestpp1', function() {
	return View::make('details.howtorequestpp12');
});

Route::get('/howtorequestpp1', function() {
	return View::make('details.howtorequestpp2');
});

Route::get('/howtorequestpp1', function() {
	return View::make('details.howtorequestpp3');
});

Route::get('/howtorequestpp1', function() {
	return View::make('details.howtoviewstatus');
});

Route::get('/requestrm3table', function() {
	return View::make('request.requestrm3table');
});


//PP1Controller

//PP2Controller

//PP10Controller

//PP11Controller

//PP12Controller

//RM3Controller