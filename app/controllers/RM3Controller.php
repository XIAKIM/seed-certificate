<?php

class RM3Controller extends BaseController{
	protected $layout = "index";

	public function checkRequestRM3()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$selectrequest = input::get("select-request");
			Session::put('rm3type', $selectrequest);
			return Redirect::route('/initrequestrm3');
		}
	}

	public function initRequestRM3()
	{
		if(Auth::guest()) return Redirect::route('/');
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'rm3';
		$request->save();
		Session::put('requestID', $request->id);
		$this->layout->content = View::make('request.requestrm3table');
	}

	public function saveRequestRM3()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"commonName" => "required",
				"speciesName" => "required",
				"source" => "required",
				"chemical" => "required",
				"seedAmount" => "required",
				"totalWeight" => "required"
			]);
			if($validator->passes())
			{
				$rm3 = new RM3;
				if(Session::get('rm3type') == 1) $testType = "growth";
				else if(Session::get('rm3type') == 2) $testType = "purity";
				else $testType = "humidity";
				$rm3->testType = $testType;
				$rm3->certificateType = 'rm4';
				$rm3->commonName = Input::get('commonName');
				$rm3->speciesName = Input::get('speciesName');
				$rm3->source = Input::get('source');
				$rm3->chemical = Input::get('chemical');
				$rm3->seedAmount = Input::get('seedAmount');
				$rm3->totalWeight = Input::get('totalWeight');
				$rm3->userID = Session::get('userID');
				$rm3->requestID = Session::get('requestID');
				$rm3->save();
				return Redirect::route('/afterrequest');
			}
		} 
	}

	public function denyRequestRM3($id) {
		$rm3 = RM3::find($id);
		$request = Requests::find($rm3->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist', $id);
		}
		$request->status = 'Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/requestlist/rm3/{id}', $rm3->userID);
	}

	public function verifyRequestRM3($id) {
		//new cerificate
		$rm3 = RM3::find($id);
		if(Requests::find($rm3->requestID)->status != 'Waiting') { 
			return Redirect::route('/requestlist/rm3/{id}', $rm3->userID);
		}
		$certificate = new Certificate;
		$expiredDate = new DateTime();
		$expiredDate->add(new DateInterval('P1Y'));
		$certificate->expiredDate = $expiredDate;
		$certificate->certificateType = 'rm4';
		$certificate->requestType = 'rm3';
		// $certificate->ppID = $pp1->id;
		$certificate->requestID = $rm3->requestID;
		$certificate->userID = $rm3->userID;
		$certificate->save();

		//set status
		$request = Requests::find($rm3->requestID);
		$request->status = 'Approved';
		$request->save();

		return Redirect::route('/requestlist/rm3/{id}', $rm3->userID);
	}

}