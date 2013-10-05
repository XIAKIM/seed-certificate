<?php

class RequestController extends BaseController {
	protected $layout = "index";
	
	// @author Varunyu
	public function request()
	{
		$this->layout->content = View::make('request.request');
	}

	// @author Varunyu
	public function checkRequestAction()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{

			// $validator = validator::make(Input::get("select-request")[
			// 		"select-request" => "required";
			// 	]);

			$selectrequest = input::get("select-request");

			if($selectrequest == "3"){

				Session::put('requestType',$selectrequest);
				return Redirect::route('/request/form');

			}
			else if ($selectrequest == "4"){

				Session::put('requestType',$selectrequest);
				return Redirect::route('/request/form');

			}
			else if ($selectrequest == "5"){

				Session::put('requestType',$selectrequest);
				return Redirect::route('/request/form');

			}
			else if ($selectrequest == "6"){

				Session::put('requestType',$selectrequest);
				return Redirect::route('/request/form');

			}



		}
	}	

	// @author Varunyu
	public function requestPP1()
	{

		$this->layout->content = View::make('request.requestPP1');

	}

	// @author Varunyu
	public function createRequestAction()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{

		}
	}

	// @author Varunyu
	public function verification()
	{
		$this->layout->content = View::make('request.verification');
	}

	// @author Varunyu
	public function accountVerification()
	{
		$this->layout->content = View::make('request.accountVerification');
	}

	// @author Varunyu
	public function allAccountVerification()
	{
		$this->layout->content = View::make('request.allAccountVerification');
	}


	// @ author Varunyu
	public function accountApproveAction($id)
	{
		// DB::update('update users set active = 1 where id = ? , $id');
		// $id = Session::get('userID');
		$user = User::find($id);
		$user->active = 1;
		$user->save();


	}

	public function accountDenyAction($id)
	{
		// DB::table('User')->delete($id);
		$user = User::find($id);
		$user-> delete($id);
	}

	// @author Varunyu
	public function seedVerification()
	{
		$this->layout->content = View::make('request.seedVerification');
	}

	// @author Varunyu
	public function allSeedVerification()
	{
		$this->layout->content = View::make('request.allSeedVerification');
	}

	public function seedApproveAction()
	{

	}

	public function seedDenyAction()
	{
		
	}
}