<?php

class NewPageController extends BaseController {
	protected $layout = "index";
	
	public function goToHomePage(){
		$this->layout->content = View::make('mainpage');
	}

	public function goToAboutPage(){

	}

	public function goToDetailsPage(){

	}

	public function goToContactPage(){

	}

	public function goToSignUpPage(){
		$this->layout->content = View::make('user.signup');
	}
	public function goToAfterRegisterPage()	{
		$this->layout->content = View::make('user.afterregister');
	}		
	public function goToAfterLoginPage()	{
		if(Auth::guest()) return Redirect::route('/');
		if(Auth::user()->role == 'officer' || Auth::user()->role == 'lab') return Redirect::route('/afteradminlogin');
		$this->layout->content = View::make('user.afterlogin');	
	}
	public function goToAfterAdminLoginPage()	{
		if(Auth::guest()) return Redirect::route('/');
		if(Auth::user()->role == 'entrepreneur') return Redirect::route('/');
		$description = Description::find(Auth::user()->descriptionID);
		$this->layout->content = View::make('user.firstPageLab', compact('description'));
	}
	public function goToAfterRequestPage()	{
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('request.afteruserrequest');
	}
	public function goToProfilePage(){
		if(Auth::guest()) return Redirect::route('/');
		$description = Description::find(Auth::user()->descriptionID);
		$this->layout->content = View::make('user.profile', compact('description'));
	}

	public function goToRequestPage(){
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('request.request');
	}

	public function goToVerificationPage(){
		if(Auth::guest() || Auth::user()->role == 'entrepreneur') return Redirect::route('/');
		$this->layout->content = View::make('request.verification');
	}

	public function goToRequestListPage(){
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$pp1s = Requests::where('type','=','pp1')->groupBy('userID')->get();
		$pp2s = Requests::where('type','=','pp2')->groupBy('userID')->get();
		$pp8s = Requests::where('type','=','pp8')->groupBy('userID')->get();
		$pp9s = Requests::where('type','=','pp9')->groupBy('userID')->get();
		$pp10s = Requests::where('type','=','pp10')->groupBy('userID')->get();
		$pp11s = Requests::where('type','=','pp11')->groupBy('userID')->get();
		$pp12s = Requests::where('type','=','pp12')->groupBy('userID')->get();
		$rm3s = Requests::where('type','=','rm3')->groupBy('userID')->get();
		$this->layout->content = View::make('request.verificationSeedAll', compact('pp1s','pp2s','pp8s', 'pp9s','pp10s','pp11s','pp12s','rm3s'));
	}

	public function goToCertificationList(){
		if(Auth::guest()) return Redirect::route('/');
		$pp1s = PP1::where('userID', '=', Auth::user()->id)->get();
		$pp2s = PP2::where('userID', '=', Auth::user()->id)->get();
		$pp8s = PP8::where('userID', '=', Auth::user()->id)->get();
		$pp9s = PP9::where('userID', '=', Auth::user()->id)->get();
		$pp10s = PP10::where('userID', '=', Auth::user()->id)->get();
		$pp11s = PP11::where('userID', '=', Auth::user()->id)->get();
		$pp12s = PP12::where('userID', '=', Auth::user()->id)->get();
		$rm3s = RM3::where('userID', '=', Auth::user()->id)->get();	
		$this->layout->content = View::make('user.status', compact('pp1s','pp2s','pp8s','pp9s','pp10s','pp11s','pp12s','rm3s'));
	}

	public function goToLabList(){
		
		
	}
	public function goToAccountListPage()	{
		if(Auth::guest() || Auth::user()->role == "entrepreneur") return Redirect::route('/');
		$descriptions = Description::all();
		$this->layout->content = View::make('request.verificationAccountAll', compact('descriptions'));
	}
	public function goToVerificationUserAccountPage($id)
	{
		if(Description::find($id)->status != 0) return Redirect::route('/accountlist');
		$description= Description::find($id);
		$this->layout->content = View::make('request.verificationUser', compact('description'));
	}
	public function goToChangePasswordPage()	{
		if(Auth::guest()) return Redirect::route('/');
		$description = Description::find(Auth::user()->descriptionID);
		// $this->layout->content = View::make('user.profileEdit', compact('description'));
		$this->layout->content = View::make('user.profileEdit');
	}

	public function goToVerificationRequestPP1($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$documents = PP1::where('userID', '=', $id)->get();
		$this->layout->content = View::make('request.verificationSeedPerson', compact('documents'));
	}

	public function goToRequestInformationPP1Page($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$pp1 = PP1::find($id);
		$this->layout->content = View::make('request.verificationPP1', compact('pp1'));
	}

	public function goToVerificationRequestPP2($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$documents = PP2::where('userID', '=', $id)->get();
		$this->layout->content = View::make('request.verificationSeedPerson', compact('documents'));
	}
	
	public function goToRequestInformationPP2Page($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$pp2 = PP2::find($id);
		$this->layout->content = View::make('form.formpp2', compact('pp2'));
	}

	public function goToVerificationRequestPP10($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$documents = PP10::where('userID', '=', $id)->get();
		$this->layout->content = View::make('request.verificationSeedPerson', compact('documents'));
	}
	
	public function goToRequestInformationPP10Page($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$pp10 = PP10::find($id);
		$user = User::find($pp10->userID);
		$description = Description::find($user->descriptionID);
		$certificate = Certificate::where('certificateType', '=', $pp10->prolongType)->where('userID', '=', $user->id)->first();
		$pp1 = PP1::where('requestID', '=', $certificate->requestID)->first();
		$this->layout->content = View::make('form.formpp10', compact('pp10', 'description', 'pp1'));
	}

	public function goToVerificationRequestPP11($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$documents = PP11::where('userID', '=', $id)->get();
		$this->layout->content = View::make('request.verificationSeedPerson', compact('documents'));
	}
	
	public function goToRequestInformationPP11Page($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$pp11 = PP11::find($id);
		$user = User::find($pp11->userID);
		$description = Description::find($user->descriptionID);
		$certificate = Certificate::where('certificateType', '=', $pp11->substituteType)->where('userID', '=', $user->id)->first();
		$pp1 = PP1::where('requestID', '=', $certificate->requestID)->first();
		$this->layout->content = View::make('form.formpp11', compact('pp11', 'description', 'certificate', 'pp1'));
	}

	public function goToVerificationRequestPP12($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$documents = PP12::where('userID', '=', $id)->get();
		$this->layout->content = View::make('request.verificationSeedPerson', compact('documents'));
	}
	
	public function goToRequestInformationPP12Page($id)	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$pp12 = PP12::find($id);
		$user = User::find($pp12->userID);
		$description = Description::find($user->descriptionID);
		$certificate = Certificate::where('certificateType', '=', $pp12->relocationType)->where('userID', '=', $user->id)->first();
		$pp1 = PP1::where('requestID', '=', $certificate->requestID)->first();
		$this->layout->content = View::make('form.formpp12', compact('pp12', 'description', 'certificate', 'pp1'));
	}

	public function goToRequestProlong() {
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('request.requestprolong');
	}

	public function goToRequestSubstitute() {
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('request.requestsubstitute');	
	}

	public function goToRequestRelocation() {
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('request.requestrelocation');	
	}

}
