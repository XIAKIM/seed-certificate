<?php

class PP1Controller extends BaseController{
	protected $layout = "index";

	public function checkRequest()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$selectrequest = input::get("select-request");
			Session::put('type', $selectrequest);
			return Redirect::route('/initRequest');
		}
	}

	public function initRequest()
	{
		if(Auth::guest()) return Redirect::route('/');
		$user = User::find(Session::get('userID'));
		$description = Description::find($user->descriptionID);
		$type = ['type' => Session::get('type')];
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'pp1';
		$request->save();
		Session::put('requestID', $request->id);
		$this->layout->content = View::make('request.requestPP1', compact('description', 'type', 'request'));
	}



	public function saveRequest()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"companyName" => "required",
				"ownerName" => "required"
			]);
			if($validator->passes())
			{
				$pp1 = new PP1;
				$pp1->certificateType = Session::get('type');
				$pp1->companyName = Input::get('companyName');
				$pp1->ownerName = Input::get('ownerName');


				$pp1->companyAddressNo = Input::get('companyAddressNo');
				$pp1->companyAddressMoo = Input::get('companyAddressMoo');
				$pp1->companyAddressSoi = Input::get('companyAddressSoi');
				$pp1->companyAddressRoad = Input::get('companyAddressRoad');
				$pp1->companyAddressSubDistrict = Input::get('companyAddressSubDistrict');
				$pp1->companyAddressDistrict = Input::get('companyAddressDistrict');
				$pp1->companyAddressProvince = Input::get('companyAddressProvince');
				$pp1->companyAddressPostalCode = Input::get('companyAddressPostalCode');

				$pp1->collectingLocationNo = Input::get('collectingLocationNo');
				$pp1->collectingLocationMoo = Input::get('collectingLocationMoo');
				$pp1->collectingLocationSoi = Input::get('collectingLocationSoi');
				$pp1->collectingLocationRoad = Input::get('collectingLocationRoad');
				$pp1->collectingLocationSubDistrict = Input::get('collectingLocationSubDistrict');
				$pp1->collectingLocationDistrict = Input::get('collectingLocationDistrict');
				$pp1->collectingLocationProvince = Input::get('collectingLocationProvince');
				$pp1->collectingLocationPostalCode = Input::get('collectingLocationPostalCode');
				
				$pp1->storingAddressNo = Input::get('collectingLocationNo');	
				$pp1->storingAddressMoo = Input::get('collectingLocationMoo');				
				$pp1->storingAddressSoi = Input::get('collectingLocationSoi');				
				$pp1->storingAddressRoad = Input::get('collectingLocationRoad');				
				$pp1->storingAddressSubDistrict = Input::get('collectingLocationSubDistrict');
				$pp1->storingAddressDistrict = Input::get('collectingLocationDistrict');			
				$pp1->storingAddressProvince	= Input::get('collectingLocationProvince');	
				$pp1->storingAddressPostalCode = Input::get('collectingLocationPostalCode');				

				$pp1->userID = Session::get('userID');
				$pp1->requestID = Session::get('requestID');
				$pp1->save();
				return Redirect::route('/afterrequest');
			}
		}
	}

	public function denyRequest($id)	{
		$request = Requests::find(PP1::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/requestlist/pp1/{id}', $id);
		}
		$request->status = 'Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/requestlist');
	}

	public function createCertificate($id)	{
		//new cerificate
		$pp1 = PP1::find($id);
		if(Requests::find($pp1->requestID)->status != 'Waiting') { 
			return Redirect::route('/requestlist/pp1/{id}', $pp1->userID);
		}
		Log::error(Requests::find($pp1->requestID)->status);
		$certificate = new Certificate;
		$expiredDate = new DateTime();
		$expiredDate->add(new DateInterval('P1Y'));
		$certificate->expiredDate = $expiredDate;
		$certificate->certificateType = $pp1->certificateType;
		$certificate->requestType = 'pp1';
		// $certificate->ppID = $pp1->id;
		$certificate->requestID = $pp1->requestID;
		$certificate->userID = $pp1->userID;
		$certificate->save();

		//set status
		$request = Requests::find($pp1->requestID);
		$request->status = 'Approved';
		$request->save();

		return Redirect::route('/requestlist/pp1/{id}', $pp1->userID);
	}
}