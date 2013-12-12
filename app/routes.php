<?php

Route::get('/allrequest', function() {
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

Route::any('/requestsubstitute', [
	'as' => '/requestsubstitute',
	'uses' => 'NewPageController@goToRequestSubstitute'
]);

Route::any('requestrelocation', [
	'as' => '/requestrelocation',
	'uses' => 'NewPageController@goToRequestRelocation'
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

Route::any('/requestlist/rm3/{id}', [
	'as' => '/requestlist/rm3/{id}',
	'uses' => 'NewPageController@goToVerificationRequestrm3'
]);

Route::any('/requestlist/rm3/information/{id}', [
	'as' => '/requestlist/rm3/information/{id}',
	'uses' => 'NewPageController@goToRequestInformationRM3Page'
]);

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

//PP8Controller /////////////////////////////////////////////////////////////////////
Route::any('/initrequestpp8', [
	'as' => '/initrequestpp8',
	'uses' => 'PP8Controller@initRequestPP8'
]);

Route::any('/saverequestpp8', [
	'as' => '/saverequestpp8',
	'uses' => 'PP8Controller@saveRequestPP8'
]);

Route::any('/denyrequestpp8/{id}', [
	'as' => '/denyrequestpp8/{id}',
	'uses' => 'PP8Controller@denyRequestPP8'
]);


Route::any('/createcertificatepp8/{id}', [
	'as' => '/createcertificatepp8/{id}',
	'uses' => 'PP8Controller@createCertificatePP8'
]);

//PP9Controller /////////////////////////////////////////////////////////////////////
Route::any('/initrequestpp9', [
	'as' => '/initrequestpp9',
	'uses' => 'PP9Controller@initRequestPP9'
]);

Route::any('/saverequestpp9', [
	'as' => '/saverequestpp9',
	'uses' => 'PP9Controller@saveRequestPP9'
]);

Route::any('/denyrequestpp9/{id}', [
	'as' => '/denyrequestpp9/{id}',
	'uses' => 'PP9Controller@denyRequestPP9'
]);


Route::any('/createcertificatepp9/{id}', [
	'as' => '/createcertificatepp9/{id}',
	'uses' => 'PP9Controller@createCertificatePP9'
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

Route::any('/denyrequestpp10/{id}', [
	'as' => '/denyrequestpp10/{id}',
	'uses' => 'PP10Controller@denyRequestPP10'
]);

Route::any('/extendcertificate/{id}', [
	'as' => '/extendcertificate/{id}',
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

Route::any('/denyrequestpp11/{id}', [
	'as' => '/denyrequestpp11/{id}',
	'uses' => 'PP11Controller@denyRequestPP11'
]);

Route::any('/substitutecertificate/{id}', [
	'as' => '/substitutecertificate/{id}',
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

Route::any('/denyrequestpp12/{id}', [
	'as' => '/denyrequestpp12/{id}',
	'uses' => 'PP12Controller@denyRequestPP12'
]);

Route::any('/relocationcertificate/{id}', [
	'as' => '/relocationcertificate/{id}',
	'uses' => 'PP12Controller@relocationCertificate'
]);



//RM3Controller//////////////////////////////////////////////////////////////////////
Route::any('/checkrequestrm3', [
	'as' => '/checkrequestrm3',
	'uses' => 'RM3Controller@checkRequestRM3'
]);

Route::any('/initrequestrm3', [
	'as' => '/initrequestrm3',
	'uses' => 'RM3Controller@initRequestRM3'
]);

Route::any('/saverequestrm3', [
	'as' => '/saverequestrm3',
	'uses' => 'RM3Controller@saveRequestRM3'
]);

Route::any('/denyrequestrm3/{id}', [
	'as' => '/denyrequestrm3/{id}',
	'uses' => 'RM3Controller@denyRequestRM3'
]);

Route::any('/verifyrequestrm3/{id}', [
	'as' => '/verifyrequestrm3/{id}',
	'uses' => 'RM3Controller@verifyRequestRM3'
]);


//PDF Form
Route::any('/signature/pp3/{id}', [
	'as' => '/signature/pp3/{id}',
	'uses' => 'FormController@showPDFPP3'
]);

Route::any('/signature/pp4/{id}', [
	'as' => '/signature/pp4/{id}',
	'uses' => 'FormController@showPDFPP4'
]);

Route::any('/signature/pp5/{id}', [
	'as' => '/signature/pp5/{id}',
	'uses' => 'FormController@showPDFPP5'
]);

Route::any('/signature/pp6/{id}', [
	'as' => '/signature/pp6/{id}',
	'uses' => 'FormController@showPDFPP6'
]);

Route::any('/signature/pp7/{id}', [
	'as' => '/signature/pp7/{id}',
	'uses' => 'FormController@showPDFPP7'
]);