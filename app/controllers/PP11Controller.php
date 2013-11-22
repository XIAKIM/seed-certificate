<?php

class PP11Controller extends BaseController{
	protected $layout = "index";

	public function checkRequestPP11()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			return Redirect::route('/initRequestpp11');
		}
	}

	public function initRequestPP11()
	{
		if(Auth::guest()) return Redirect::route('/');
		$user = User::find(Session::get('userID'));
		$description = Description::find($user->descriptionID);

		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'pp11';
		$request->save();
		Session::put('requestID', $request->id);
	}

	public function saveRequestPP11()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"companyName" => "required",
				"ownerName" => "required"
			]);
			if($validator->passes())
			{
				$pp11 = new pp11;
				$pp11->certificateType = Session::get('type');
				$pp11->certificateNumber = Input::get('certificateNumber');
				$pp11->companyName = Input::get('companyName');

				$pp11->reason = Input::get('reason');
				$pp11->userID = Session::get('userID');
				$pp11->requestID = Session::get('requestID');
				$pp11->save();

				return Redirect::route('/afterrequest');

			}
		}

	}

	public function denyRequestPP11($id){

		$request = Requests::find(PP11::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist', $id);
		}
		$request->status = 'Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/requestlist');
	}

	public function verifyRequestPP11()	{
		$pp11 = PP11::find($id);
		if(Requests::find($pp10->requestID)->status != 'Waiting') { 
			return Redirect::route('/requestlist', $pp10->userID);
		}
		$request = Requests::find($pp11->requestID);
		$request->status = 'Approved';
		$request->save();

		return Redirect::route('/substitutecertificate');
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