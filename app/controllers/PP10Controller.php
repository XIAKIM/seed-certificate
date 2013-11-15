<?php

class PP12Controller extends BaseController{
	protected $layout = "index";

	public function checkRequest()
	{
	}

	public function initRequest()
	{
	}

	public function saveRequest()
	{

	}

	public function denyRequest($id){

	}

	public function verifyRequest()	{
		
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