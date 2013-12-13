<?php

class PP9Controller extends BaseController{
	protected $layout = "index";

	public function initRequestPP9()
	{
		if(Auth::guest()) return Redirect::route('/');
		$pp1 = PP1::where('certificateType', '=', 6)->where('userID', '=', Auth::user()->id)->first();
		$requestCheck = Requests::find($pp1->requestID);
		if($requestCheck->status != 'Waiting for PP8 Request') return Redirect::route('/');
		Session::put('pp1ID', $pp1->id);
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'pp9';
		$request->save();
		Session::put('requestID', $request->id);
		$this->layout->content = View::make('request.requestPP9');
	}

	public function saveRequestPP9()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"speciesType" => "required",
				"speciesName" => "required",
				"scientificName" => "required",
				"unit" => "required",
				"departureCountry" => "required",
				"amount" => "required"
			]);
			if($validator->passes())
			{
				$pp9 = new PP9;
				$pp8->certificateType = 9;
				$pp9->speciesType = Input::get('speciesType');
				$pp9->speciesName = Input::get('speciesName');
				$pp9->scientificName = Input::get('scientificName');
				$pp9->unit = Input::get('unit');
				$pp9->source = Input::get('departureCountry');
				$pp9->amount = Input::get('amount');
				$pp9->pp1ID = Session::get('pp1ID');
				$pp9->userID = Session::get('userID');
				$pp9->requestID = Session::get('requestID');
				$pp9->save();
				return Redirect::route('/afterrequest');
			}
		} 
	}

	public function denyRequestPP9($id)	{
		$request = Requests::find(PP9::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist/pp9/{id}', $id);
		}
		$request->status = 'Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/requestlist');
	}

	public function createCertificatePP9($id)	{
		//new cerificate
		$pp9 = PP9::find($id);
		if(Requests::find($pp8->requestID)->status != 'Waiting') { 
			return Redirect::route('/requestlist/pp9/{id}', $pp9->userID);
		}
		$pp1 = PP1::find($pp9->pp1ID);
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

		$request = Requests::find($pp9->requestID);
		$request->status = 'Approved';
		$request->save();

		return Redirect::route('/requestlist/pp9/{id}', $pp9->userID);
	}

}