<?php

class PP11Controller extends BaseController{
	protected $layout = "index";

	public function checkRequestPP11()
 	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$selectrequest = input::get("select-request");
			Session::put('pp11type', $selectrequest);
			return Redirect::route('/initrequestpp11');
		}
 	}
 
 	public function initRequestPP11()
 	{
		if(Auth::guest()) return Redirect::route('/');
		$certificate = Certificate::where('certificateType', '=', Session::get("pp11type"))->where('userID', '=', Auth::user()->id)->first();
		if($certificate == null) return Redirect::route('/');
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'pp11';
		$request->save();
		Session::put('requestID', $request->id);
		$this->layout->content = View::make('request.reasonrequestsubstitute');
 	}
 
 	public function saveRequestPP11()
 	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"reason" => "required",
				"companyName" => "required"
			]);
			if($validator->passes())
			{
				$certificate = Certificate::where('certificateType', '=', Session::get("pp11type"))->where('userID', '=', Auth::user()->id)->first();
				$pp11 = new pp11;
				$pp11->certificateType = "11";
				$pp11->certificateID = $certificate->id;
				$pp11->companyName = Input::get('companyName');
				$pp11->substituteType = Session::get('pp11type');
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
		return Redirect::route('/requestlist/pp11/{id}', $pp11->userID);
 	}

	public function substituteCertificate($id)	{
		$request = Requests::find(PP11::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist', $id);
		}
		$pp11 = PP11::find($id);
		$certificate = Certificate::where('certificateType', '=', $pp11->substituteType)->where('userID', '=', $pp11->userID)->first();
		$pp1 = PP1::find($certificate->requestID);
		$pp1->companyName = $pp11->companyName;
		$pp1->save();
		$request = Requests::find($pp11->requestID);
		$request->status = 'Approved';
		$request->save();	

		return Redirect::route('/requestlist/pp11/{id}', $pp11->userID);
	}
}
