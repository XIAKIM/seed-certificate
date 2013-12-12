<?php

class PP12Controller extends BaseController{
	protected $layout = "index";

	public function checkRequestPP12()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$selectrequest = input::get("select-request");
			Session::put('pp12type', $selectrequest);
			return Redirect::route('/initrequestpp12');
		}
	}

	public function initRequestPP12()
	{
		if(Auth::guest()) return Redirect::route('/');
		$certificate = Certificate::where('certificateType', '=', Session::get("pp12type"))->where('userID', '=', Auth::user()->id)->first();
		if($certificate == null) return Redirect::route('/');
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'pp12';
		$request->save();
		Session::put('requestID', $request->id);
		$this->layout->content = View::make('request.reasonrequestrelocation');
	}

	public function saveRequestPP12()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"reason" => "required",
				"addressNo" => "required",
				"addressMoo" => "required",
				"addressSoi" => "required",
				"addressRoad" => "required",
				"addressSubDistrict" => "required",
				"addressDistrict" => "required",
				"addressProvince" => "required",
				"addressPostalCode" => "required"
			]);
			if($validator->passes())
			{
				$certificate = Certificate::where('certificateType', '=', Session::get("pp12type"))->where('userID', '=', Auth::user()->id)->first();
				$pp12 = new pp12;
				$pp12->certificateType = "12";
				$pp12->certificateID = $certificate->id;
				$pp12->newLocationAddressNo = Input::get('addressNo');
				$pp12->newLocationAddressMoo = Input::get('addressMoo');
				$pp12->newLocationAddressSoi = Input::get('addressSoi');
				$pp12->newLocationAddressRoad = Input::get('addressRoad');
				$pp12->newLocationAddressSubDistrict = Input::get('addressSubDistrict');
				$pp12->newLocationAddressDistrict = Input::get('addressDistrict');
				$pp12->newLocationAddressProvince = Input::get('addressProvince');
				$pp12->newLocationAddressPostalCode = Input::get('addressPostalCode');
				$pp12->relocationType = Session::get('pp12type');
				$pp12->reason = Input::get('reason');
				$pp12->userID = Session::get('userID');
				$pp12->requestID = Session::get('requestID');
				$pp12->save();
				return Redirect::route('/afterrequest');
			}
		} 
	}

	public function denyRequestPP12($id) {
		$pp12 = PP12::find($id);
		$request = Requests::find($pp12->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist', $id);
		}
		$request->status = 'Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/requestlist/pp12/{id}', $pp12->userID);
	}

	public function relocationCertificate($id) {
		$request = Requests::find(PP12::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist', $id);
		}
		$pp12 = PP12::find($id);
		$certificate = Certificate::where('certificateType', '=', $pp12->relocationType)->where('userID', '=', $pp12->userID)->first();
		$pp1 = PP1::find($certificate->requestID);
		$pp1->storingAddressNo = $pp12->newLocationAddressNo;
		$pp1->storingAddressMoo = $pp12->newLocationAddressMoo;
		$pp1->storingAddressSoi = $pp12->newLocationAddressSoi;
		$pp1->storingAddressRoad = $pp12->newLocationAddressRoad;
		$pp1->storingAddressSubDistrict = $pp12->newLocationAddressSubDistrict;
		$pp1->storingAddressDistrict = $pp12->newLocationAddressDistrict;
		$pp1->storingAddressProvince = $pp12->newLocationAddressProvince;
		$pp1->storingAddressPostalCode = $pp12->newLocationAddressPostalCode;
		$pp1->save();
		$request = Requests::find($pp12->requestID);
		$request->status = 'Approved';
		$request->save();	

		return Redirect::route('/requestlist/pp12/{id}', $pp12->userID);
	}

}