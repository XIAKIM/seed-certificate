<?php

class PP10Controller extends BaseController{
	protected $layout = "index";

	public function checkRequestPP10()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$selectrequest = input::get("select-request");
			Session::put('pp10type', $selectrequest);
			return Redirect::route('/initrequestpp10');
		}
	}

	public function initRequestPP10()
	{
		if(Auth::guest()) return Redirect::route('/');
		$user = User::find(Session::get('userID'));
		$description = Description::find($user->descriptionID);
		$type = ['type' => Session::get('type')];
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'pp10';
		$request->save();
		Session::put('requestID', $request->id);
		$this->layout->content = View::make('request.requestPP1', compact('description', 'type', 'request'));
	}

	public function saveRequestPP10()
	{

	}

	public function denyRequestPP10($id){

	}

	public function verifyRequestPP10()	{
		
	}

	public function extendCertificate()	{
		$certificate = Certificate::where('certificateType', '=', 3)->where('userID', '=', Auth::user()->id)->first();
		$expiredDate = new DateTime();
		$expiredDate->add(new DateInterval('P1Y'));
		$certificate->expiredDate = $expiredDate;
		$certificate->certificateType = Session::get('pp10type');
		$certificate->save();				
		return Redirect::route('/requestlist');
	}

}