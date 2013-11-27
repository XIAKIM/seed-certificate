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
		$certificate = Certificate::where('certificateType', '=', Session::get("pp10type"))->where('userID', '=', Auth::user()->id)->first();
		if($certificate == null) return Redirect::route('/');
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'pp10';
		$request->save();
		$pp10 = new PP10;
		$pp10->certificateType = "10";
		$pp10->certificateID = $certificate->id;
		$pp10->prolongType = Session::get("pp10type");
		$pp10->userID = Auth::user()->id;
		$pp10->requestID = $request->id;
		$pp10->save();
		return Redirect::route('/afterrequest');
	}

	public function denyRequestPP10($id){
		$request = Requests::find(PP10::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist', $id);
		}
		$request->status ='Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/requestlist/pp10/{id}', $pp10->userID);
	}

	public function extendCertificate($id)	{
		$request = Requests::find(PP10::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist', $id);
		}
		$pp10 = PP10::find($id);
		$certificate = Certificate::where('certificateType', '=', $pp10->prolongType)->where('userID', '=', $pp10->userID)->first();
		$expiredDate = new DateTime();
		$expiredDate->add(new DateInterval('P1Y'));
		$certificate->expiredDate = $expiredDate;
		$certificate->certificateType = Session::get('pp10type');
		$certificate->save();
		$request = Requests::find($pp10->requestID);
		$request->status = 'Approved';
		$request->save();			
		return Redirect::route('/requestlist/pp10/{id}', $pp10->userID);
	}

}