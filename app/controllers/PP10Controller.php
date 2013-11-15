<?php

class PP12Controller extends BaseController{
	protected $layout = "index";

	public function checkRequestPP12()
	{
	}

	public function initRequestPP12()
	{
	}

	public function saveRequestPP12()
	{

	}

	public function denyRequestPP12($id){

	}

	public function verifyRequestPP12()	{
		
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