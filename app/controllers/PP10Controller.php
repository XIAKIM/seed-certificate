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
<<<<<<< HEAD
		$user = User::find(Session::get('userID'));
		$description = Description::find($user->descriptionID);
<<<<<<< HEAD
		$type = ['type' => Session::get('type')];
=======

>>>>>>> ba455c81be2c58ccd07ff73f04f7dda8f3ba97f4
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'pp10';
		$request->save();
		Session::put('requestID', $request->id);
<<<<<<< HEAD
		$this->layout->content = View::make('request.requestPP1', compact('description', 'type', 'request'));
=======

>>>>>>> ba455c81be2c58ccd07ff73f04f7dda8f3ba97f4
=======
		
>>>>>>> parent of ba455c8... update PP10&11Controller
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