<?php

class RequestController extends BaseController {
	protected $layout = "index";
	
	public function request()
	{
		$this->layout->content = View::make('request.request');
	}

	public function checkRequestAction()
	{

	}	

	public function requestForm()
	{

	}

	public function createRequestAction()
	{

	}

	public function verification()
	{

	}

	public function accountVerification()
	{

	}

	public function allAccountVerification()
	{

	}

	public function accountApproveAction()
	{

	}

	public function accountDenyAction()
	{

	}

	public function seedVerification()
	{

	}

	public function allSeedVerification()
	{

	}

	public function seedApproveAction()
	{

	}

	public function seedDenyAction()
	{
		
	}
}