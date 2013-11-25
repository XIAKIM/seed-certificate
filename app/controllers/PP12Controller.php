<?php

class PP12Controller extends BaseController{
	protected $layout = "index";

	public function checkRequestPP12()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$selectrequest = input::get("select-request");
			Session::put('type', $selectrequest);
			return Redirect::route('/initrequestpp12');
		}
	}

	public function initRequestPP12()
	{
		$this->layout->content = View::make('request.requestrelocation');
	}

	public function saveRequest()
	{

	}

	public function denyRequest($id){

	}

	public function verifyRequest()	{
		
	}


}