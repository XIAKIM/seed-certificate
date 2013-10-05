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

	public function requestPP8()
	{
		$this->layout->content = View::make('request.requestPP8');
	}

	public function requestPP9()
	{
		$this->layout->content = View::make('request.requestPP9');
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
	public function verificationAccountAll()
	{
		$descriptions = Description::all();
		$this->layout->content = View::make('request.verificationAccountAll', compact('descriptions'));
	}

	// @author Varunyu
	public function verificationUser($id)
	{
		$description= Description::find($id);
		$this->layout->content = View::make('request.verificationUser', compact('description'));
	}

	public function accountApproveAction($id)
	{
		//generate new user
		$user = new User;
		$user->username = 'entrepreneur' . $id;
		//random password
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$password = substr(str_shuffle($chars), 0, 10);
		$user->password = Hash::make($password);
		$user->role = 'entrepreneur';
		$user->descriptionID = $id;
		$user->save();

		//set description to approved
		$description = Description::find($id);
		$description->status = 1;
		$description->save();

		//sending username and password to email
		$data = array(
    		'username' => $user->username,
    		'password' => $password
		);
		Mail::send('emails.welcome', $data, function($message)
		{
    		$message->to($description->email)->subject('Welcome!');
		});

		return Redirect::route('/verificationAccountAll');
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