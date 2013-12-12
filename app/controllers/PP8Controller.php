<?php

class PP8Controller extends BaseController{
	protected $layout = "index";

	public function initRequestPP8()
	{
		if(Auth::guest()) return Redirect::route('/');
		$pp1 = PP1::where('certificateType', '=', 5)->where('userID', '=', Auth::user()->id)->first();
		$request = Requests::find($pp1->requestID);
		if($request->status != 'Waiting for PP8 Request') return Redirect::route('/');
		Session::put('requestID', $request->id);
		Session::put('pp1ID', $pp1->id);
		$this->layout->content = View::make('request.requestPP8');
	}

	public function saveRequestPP8()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"speciesType" => "required",
				"speciesName" => "required",
				"scientificName" => "required",
				"unit" => "required",
				"source" => "required",
				"amount" => "required"
			]);
			if($validator->passes())
			{
				$pp8 = new PP8;
				$pp8->speciesType = Input::get('speciesType');
				$pp8->speciesName = Input::get('speciesName');
				$pp8->scientificName = Input::get('scientificName');
				$pp8->unit = Input::get('unit');
				$pp8->source = Input::get('source');
				$pp8->amount = Input::get('amount');
				$pp8->pp1ID = Session::get('pp1ID');
				$pp8->userID = Session::get('userID');
				$pp8->requestID = Session::get('requestID');
				$pp8->save();
				return Redirect::route('/afterrequest');
			}
		} 
	}

	public function denyRequestPP8($id)	{
		$request = Requests::find(PP8::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist/pp8/{id}', $id);
		}
		$request->status = 'Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/requestlist');
	}

	public function createCertificatePP8($id)	{
		//new cerificate
		$pp8 = PP8::find($id);
		if(Requests::find($pp8->requestID)->status != 'Waiting') { 
			return Redirect::route('/requestlist/pp8/{id}', $pp8->userID);
		}
		$pp1 = PP1::find($pp8->pp1ID);
		$certificate = new Certificate;
		$expiredDate = new DateTime();
		$expiredDate->add(new DateInterval('P1Y'));
		$certificate->expiredDate = $expiredDate;
		$certificate->certificateType = $pp1->certificateType;
		$certificate->requestType = 'pp1';
		$certificate->requestID = $pp1->requestID;
		$certificate->userID = $pp1->userID;
		$certificate->save();

		//set status
		$request = Requests::find($pp1->requestID);
		$request->status = 'Approved';
		$request->save();

		$request = Requests::find($pp8->requestID);
		$request->status = 'Approved';
		$request->save();

		return Redirect::route('/requestlist/pp8/{id}', $pp8->userID);
	}

}