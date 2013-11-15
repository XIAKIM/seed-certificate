<?php

class PP10Controller extends BaseController{
	protected $layout = "index";

	public function checkRequestPP10()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			return Redirect::route('/initRequestpp10');
		}
	}

	public function initRequestPP10()
	{
		if(Auth::guest()) return Redirect::route('/');
		
	}

	public function saveRequestPP10()
	{

	}

	public function denyRequestPP10($id){

	}

	public function verifyRequestPP10()	{
		
	}

	public function extendCertificate($userID,$certificateType)	{

		
		$certificate = Certificate::where('userID','=',$userID)->where('certificateType','=',$certificateType);
		
		$newDate = $certificate->expiredDate;
		date_add($newDate,date_interval_create_from_date_string("1 years"));

		$certificate->expiredDate = $newDate;
		$certificate->save();				
		

		return Redirect::route('/requestlist');
	}

}