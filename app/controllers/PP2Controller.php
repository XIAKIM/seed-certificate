<?php
	class PP2Controller extends BaseController{
	protected $layout="index";	

	public function checkRequestPP2()	{

	}
	public function initRequestPP2()	{
		if(Auth::guest()) return Redirect::route('/');
		$user = User::find(Session::get('userID'));
		$type = ['type' => Session::get('type')];
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->message = 'waiting';
		$request->type = 'pp2';
		$request->save();
		Session::put('requestID', $request->id);
		$this->layout->content = View::make('request.requestpassing',compact('type','request'));
	}

	public function saveRequestPP2()	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"companyName" => "required",
				"ownerName" => "required",
				"companyAddressNo" =>"required",
				"companyAddressMoo" =>"required",
				"companyAddressSoi" =>"required",
				"companyAddressRoad" =>"required",
				"companyAddressSubDistrict" =>"required",
				"companyAddressDistrict" =>"required",
				"companyAddressProvince" =>"required",
				"companyAddressPostalCode" =>"required",

				"arrivalCity" => "required",
				"arrivalCountry" => "required",
				"arrivalCheckpoint" => "required",
				"arrivalVehicle" => "required",
				"departureCity" => "required",
				"departureCountry" => "required",
				"departureCheckpoint" => "required",
				"departureVehicle" => "required",

				"transportRoute" => "required",
				"temporayLocation" => "required",
				"passingPeriod" => "required"
			]);
			if($validator->passes())
			{
				$pp2 = new PP2;
				$pp2->certificateType = "2";
				$pp2->companyName = Input::get('companyName');
				$pp2->ownerName = Input::get('ownerName');
				$pp2->companyAddressNo = Input::get('companyAddressNo');
				$pp2->companyAddressMoo = Input::get('companyAddressMoo');
				$pp2->companyAddressSoi = Input::get('companyAddressSoi');
				$pp2->companyAddressRoad = Input::get('companyAddressRoad');
				$pp2->companyAddressSubDistrict = Input::get('companyAddressSubDistrict');
				$pp2->companyAddressDistrict = Input::get('companyAddressDistrict');
				$pp2->companyAddressProvince = Input::get('companyAddressProvince');
				$pp2->companyAddressPostalCode = Input::get('companyAddressPostalCode');
			

				$pp2->arrivalCity = Input::get('arrivalCity');
				$pp2->arrivalCountry = Input::get('arrivalCountry');
				$pp2->arrivalCheckpoint = Input::get('arrivalCheckpoint');
				$pp2->arrivalVehicle = Input::get('arrivalVehicle');
				$pp2->departureCity = Input::get('departureCity');
				$pp2->departureCountry = Input::get('departureCountry');
				$pp2->departureCheckpoint = Input::get('departureCheckpoint');
				$pp2->departureVehicle = Input::get('departureVehicle');
				$pp2->transportRoute = Input::get('transportRoute');
				$pp2->temporayLocation = Input::get('temporayLocation');
				$pp2->passingPeriod = Input::get('passingPeriod');
				
				$pp2->userID = Session::get('userID');
				$pp2->requestID = Session::get('requestID');
				$pp2->save();
				return Redirect::route('/afterrequest');
			}
		}
	}

	public function denyRequestPP2($id)	{
		$request = Requests::find(PP2::find($id)->requestID);
		if($request->status != "Waiting")	{
		}	
		$request->status ='Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/requestlist/pp2/{id}', $pp2->userID);
	}

	public function createCertificatePP2($id)	{
		$pp2 = PP2::find($id);
		if(Requests::find($pp2->requestID)->status != 'Waiting') { 
		}
		Log::error(Requests::find($pp2->requestID)->status);
		$certificate = new Certificate;
		$expiredDate = new DateTime();
		$expiredDate->add(new DateInterval('P1Y'));
		$certificate->expiredDate = $expiredDate;
		$certificate->certificateType = $pp2->certificateType;
		$certificate->requestType = 'pp2';
		// $certificate->ppID = $pp1->id;
		$certificate->requestID = $pp2->requestID;
		$certificate->userID = $pp2->userID;
		$certificate->save();

		//set status
		$request = Requests::find($pp2->requestID);
		$request->status = 'Approved';
		$request->save();

		return Redirect::route('/requestlist/pp2/{id}', $pp2->userID);
	
	}
}

