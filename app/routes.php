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

Route::any('/requestprolong', [
	'as' => '/requestprolong',
	'uses' => 'NewPageController@goToRequestProlong'
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
	'as' => '/accountlist/{id}',
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

Route::any('/requestlist/pp2/{id}', [
	'as' => '/requestlist/pp2/{id}',
	'uses' => 'NewPageController@goToVerificationRequestPP2'
]);

Route::any('/requestlist/pp2/information/{id}', [
	'as' => '/requestlist/pp2/information/{id}',
	'uses' => 'NewPageController@goToRequestInformationPP2Page'
]);


Route::any('/requestlist/pp10/{id}', [
	'as' => '/requestlist/pp10/{id}',
	'uses' => 'NewPageController@goToVerificationRequestPP10'
]);

Route::any('/requestlist/pp10/information/{id}', [
	'as' => '/requestlist/pp10/information/{id}',
	'uses' => 'NewPageController@goToRequestInformationPP10Page'
]);


Route::any('/requestlist/pp11/{id}', [
	'as' => '/requestlist/pp11/{id}',
	'uses' => 'NewPageController@goToVerificationRequestPP11'
]);

Route::any('/requestlist/pp11/information/{id}', [
	'as' => '/requestlist/pp11/information/{id}',
	'uses' => 'NewPageController@goToRequestInformationPP11Page'
]);


Route::any('/requestlist/pp12/{id}', [
	'as' => '/requestlist/pp12/{id}',
	'uses' => 'NewPageController@goToVerificationRequestPP12'
]);

Route::any('/requestlist/pp12/information/{id}', [
	'as' => '/requestlist/pp12/information/{id}',
	'uses' => 'NewPageController@goToRequestInformationPP12Page'
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


//PP1Controller ///////////////////////////////////////////////////////////////////////////
Route::any('/checkrequestpp1', [
	'as' => '/checkrequestpp1',
	'uses' => 'PP1Controller@checkRequestPP1'
]);

Route::any('/initrequestpp1', [
	'as' => '/initrequestpp1',
	'uses' => 'PP1Controller@initRequestPP1'
]);

Route::any('/saverequestpp1', [
	'as' => '/saverequestpp1',
	'uses' => 'PP1Controller@saveRequestPP1'
]);

Route::any('/denyrequestpp1/{id}', [
	'as' => '/denyrequestpp1/{id}',
	'uses' => 'PP1Controller@denyRequestPP1'
]);


Route::any('/createcertificatepp1/{id}', [
	'as' => '/createcertificatepp1/{id}',
	'uses' => 'PP1Controller@createCertificatePP1'
]);

//PP2Controller //////////////////////////////////////////////////////////////////
Route::any('/checkrequestpp2', [
	'as' => '/checkrequestpp2',
	'uses' => 'PP2Controller@checkRequestPP2'
]);

Route::any('/initrequestpp2', [
	'as' => '/initrequestpp2',
	'uses' => 'PP2Controller@initRequestPP2'
]);

Route::any('/saverequestpp2', [
	'as' => '/saverequestpp2',
	'uses' => 'PP2Controller@saveRequestPP2'
]);

Route::any('/denyrequestpp2/{id}', [
	'as' => '/denyrequestpp2/{id}',
	'uses' => 'PP2Controller@denyRequestPP2'
]);


Route::any('/createcertificatepp2/{id}', [
	'as' => '/createcertificatepp2/{id}',
	'uses' => 'PP2Controller@createCertificatePP2'
]);

//PP10Controller/////////////////////////////////////////////////////////////////////
Route::any('/checkrequestpp10', [
	'as' => '/checkrequestpp10',
	'uses' => 'PP10Controller@checkRequestPP10'
]);

Route::any('/initrequestpp10', [
	'as' => '/initrequestpp10',
	'uses' => 'PP10Controller@initRequestPP10'
]);

Route::any('/saverequestpp10', [
	'as' => '/saverequestpp10',
	'uses' => 'PP10Controller@saveRequestPP10'
]);

Route::any('/denyrequestpp10', [
	'as' => '/denyrequestpp10',
	'uses' => 'PP10Controller@denyRequestPP10'
]);

Route::any('/verifyrequestpp10', [
	'as' => '/verifyrequestpp10',
	'uses' => 'PP10Controller@verifyRequestPP10'
]);

Route::any('/extendcertificate', [
	'as' => '/extendcertificate',
	'uses' => 'PP10Controller@extendCertificate'
]);

//PP11Controller///////////////////////////////////////////////////////////////////
Route::any('/checkrequestpp11', [
	'as' => '/checkrequestpp11',
	'uses' => 'PP11Controller@checkRequestPP11'
]);

Route::any('/initrequestpp11', [
	'as' => '/initrequestpp11',
	'uses' => 'PP11Controller@initRequestPP11'
]);

Route::any('/saverequestpp11', [
	'as' => '/saverequestpp11',
	'uses' => 'PP11Controller@saveRequestPP11'
]);

Route::any('/denyrequestpp11', [
	'as' => '/denyrequestpp11',
	'uses' => 'PP11Controller@denyRequestPP11'
]);

Route::any('/verifyrequestpp11', [
	'as' => '/verifyrequestpp11',
	'uses' => 'PP11Controller@verifyRequestPP11'
]);

Route::any('/substitutecertificate', [
	'as' => '/substitutecertificate',
	'uses' => 'PP11Controller@substituteCertificate'
]);

//PP12Controller/////////////////////////////////////////////////////////////////
Route::any('/checkrequestpp12', [
	'as' => '/checkrequestpp12',
	'uses' => 'PP12Controller@checkRequestPP12'
]);

Route::any('/initrequestpp12', [
	'as' => '/initrequestpp12',
	'uses' => 'PP12Controller@initRequestPP12'
]);

Route::any('/saverequestpp12', [
	'as' => '/saverequestpp12',
	'uses' => 'PP12Controller@saveRequestPP12'
]);

Route::any('/denyrequestpp12', [
	'as' => '/denyrequestpp12',
	'uses' => 'PP12Controller@denyRequestPP12'
]);

Route::any('/verifyrequestpp12', [
	'as' => '/verifyrequestpp12',
	'uses' => 'PP12Controller@verifyRequestPP12'
]);



//RM3Controller//////////////////////////////////////////////////////////////////////
Route::any('/checkrequestrm3', [
	'as' => '/checkrequestrm3',
	'uses' => 'PP1Controller@checkRequestRM3'
]);

Route::any('/initrequestrm3', [
	'as' => '/initrequestrm3',
	'uses' => 'PP1Controller@initRequestRM3'
]);

Route::any('/saverequestrm3', [
	'as' => '/saverequestrm3',
	'uses' => 'PP1Controller@saveRequestRM3'
]);

Route::any('/denyrequestrm3', [
	'as' => '/denyrequestrm3',
	'uses' => 'PP1Controller@denyRequestRM3'
]);

Route::any('/verifyrequestrm3', [
	'as' => '/verifyrequestrm3',
	'uses' => 'PP1Controller@verifyRequestRM3'
]);

