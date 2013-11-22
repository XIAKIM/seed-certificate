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
	}

	public function saveRequestPP10()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"companyName" => "required",
				"ownerName" => "required"
			]);
			if($validator->passes())
			{
				$pp10 = new pp10;

				$pp10->certificateType = Session::get('type');
				$pp10->certificateNumber = Input::get('certificateNumber');
				$pp10->companyName = Input::get('companyName');
				$pp10->ownerName = Input::get('ownerName');

				$pp10->companyAddressNo = Input::get('companyAddressNo');
				$pp10->companyAddressMoo = Input::get('companyAddressMoo');
				$pp10->companyAddressSoi = Input::get('companyAddressSoi');
				$pp10->companyAddressRoad = Input::get('companyAddressRoad');
				$pp10->companyAddressSubDistrict = Input::get('companyAddressSubDistrict');
				$pp10->companyAddressDistrict = Input::get('companyAddressDistrict');
				$pp10->companyAddressProvince = Input::get('companyAddressProvince');
				$pp10->companyAddressPostalCode = Input::get('companyAddressPostalCode');

				$pp10->collectingLocationNo = Input::get('collectingLocationNo'); 
				$pp10->collectingLocationMoo = Input::get('collectingLocationMoo');
				$pp10->collectingLocationSoi = Input::get('collectingLocationSoi');
				$pp10->collectingLocationRoad = Input::get('collectingLocationRoad');
				$pp10->collectingLocationSubDistrict = Input::get('collectingLocationSubDistrict');
				$pp10->collectingLocationDistrict = Input::get('collectingLocationDistrict');
				$pp10->collectingLocationProvince = Input::get('collectingLocationProvince');
				$pp10->collectingLocationPostalCode = Input::get('collectingLocationPostalCode');

				$pp10->storingLocation = Input::get('storingLocation'); 
				$pp10->requestID = Session::get('requestID');

				return Redirect::route('/afterrequest');
			}
		}

	}

	public function denyRequestPP10($id){
		$request = Requests::find(PP10::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist', $id);
		}
		$request->status = 'Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/requestlist');
	}

	public function verifyRequestPP10()	{
		$pp10 = PP10::find($id);
		if(Requests::find($pp10->requestID)->status != 'Waiting') { 
			return Redirect::route('/requestlist', $pp10->userID);
		}
		$request = Requests::find($pp10->requestID);
		$request->status = 'Approved';
		$request->save();

		return Redirect::route('/extendcertificate');
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