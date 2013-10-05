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
			$selectrequest = input::get("select-request");
			Session::put('type', $selectrequest);
			return Redirect::route('/requestPP1');
		}
	}	

	// @author Varunyu
	public function requestPP1()
	{
		$user = User::find(Session::get('userID'));
		$description = Description::find($user->descriptionID);
		$type = ['type' => Session::get('type')];
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->save();
		Session::put('requestID', $request->id);
		$this->layout->content = View::make('request.requestPP1', compact('description', 'type', 'request'));
	}

	public function requestPP8()
	{
		$this->layout->content = View::make('request.requestPP8');
	}

	public function requestPP9()
	{
		$this->layout->content = View::make('request.requestPP9');
	}

	public function createPP1RequestAction()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"companyName" => "required",
				"ownerName" => "required",
				"companyAddress" => "required",
				"collectingLocation"  => "required",
				"storeLocation" => "required"
			]);
			if($validator->passes())
			{
				$pp1 = new PP1;

				$pp1->save();
				return Redirect::route('/afterregister');
			}
		}
	}

	public function createPP8RequestAction()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{

		}
	}

	public function createPP9RequestAction()
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
		Mail::send('emails.welcome', $data, function($message) use ($description)
		{
    		$message->to($description->email)->subject('Welcome!');
		});

		return Redirect::route('/verificationAccount');
	}

	public function accountDenyAction($id)
	{
		$description = Description::find($id);

		$data = ['comment' => Input::get('comment')];
		Mail::send('emails.welcome2', $data, function($message) use ($description)
		{
    		$message->to($description->email)->subject('Welcome!');
		});

		$description->delete();
		return Redirect::route('/verificationAccount');
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