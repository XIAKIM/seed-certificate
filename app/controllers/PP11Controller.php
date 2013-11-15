<?php

class PP11Controller extends BaseController{
	protected $layout = "index";

	public function checkRequest()
	{
	}

	public function initRequest()
	{
	}

	public function saveRequest()
	{

	}

	public function denyRequest($id){

	}

	public function verifyRequest()	{
		
	}

	public function substituteCertificate($userID)	{

		$certificate = Certificate::where('userID','=',$userID)->where('certificateType','=',$certificateType);

		$validator = Validator::make(Input::all(),[
				"companyName" => "required"
			]);

		if($validator->passes())
		{
			$pp11 = new pp11;
			$pp11->certificateType = Session::get('type');

			$pp11->companyName = Input::get('companyName');
			$pp11->certificateNumber = Input::get('certificateNumber');
			$pp11->reason = Input::get('reason');
			$pp11->userID = Session::get('userID');
			$pp11->requestID = Session::get('requestID');

			$pp1->save();

			return Redirect::route('/afterrequest');
		}

	}
}