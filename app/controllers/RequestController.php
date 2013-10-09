<?php

class RequestController extends BaseController {
	protected $layout = "index";
	
	// @author Varunyu
	public function request()
	{
		if(Auth::guest()) return Redirect::route('/');
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
		if(Auth::guest()) return Redirect::route('/');
		$user = User::find(Session::get('userID'));
		$description = Description::find($user->descriptionID);
		$type = ['type' => Session::get('type')];
		$request = new Requests;
		$request->status = 'Waiting';
		$request->userID = Session::get('userID');
		$request->type = 'pp1';
		$request->save();
		Session::put('requestID', $request->id);
		$this->layout->content = View::make('request.requestPP1', compact('description', 'type', 'request'));
	}

	public function requestPP8()
	{
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('request.requestPP8');
	}

	public function requestPP9()
	{
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('request.requestPP9');
	}

	public function afterRequest()
	{
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('request.afteruserrequest');	
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
				"storingAddress" => "required"
			]);
			if($validator->passes())
			{
				$pp1 = new PP1;
				$pp1->certificateType = Session::get('type');
				$pp1->companyName = Input::get('companyName');
				$pp1->ownerName = Input::get('ownerName');
				$pp1->companyAddress = Input::get('companyAddress');
				$pp1->collectingLocation = Input::get('collectingLocation');
				$pp1->storingAddress = Input::get('storingAddress');
				$pp1->userID = Session::get('userID');
				$pp1->requestID = Session::get('requestID');
				$pp1->save();
				return Redirect::route('/afterrequest');
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
		if(Auth::guest() || Auth::user()->role == 'entrepreneur') return Redirect::route('/');
		$this->layout->content = View::make('request.verification');
	}

	// @author Varunyu
	public function verificationAccountAll()
	{
		if(Auth::guest() || Auth::user()->role == "entrepreneur") return Redirect::route('/');
		$descriptions = Description::all();
		$this->layout->content = View::make('request.verificationAccountAll', compact('descriptions'));
	}

	// @author Varunyu
	public function verificationUser($id)
	{
		if(Description::find($id)->status != 0) return Redirect::route('/verificationAccount');
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
		Mail::send('emails.genUserPass', $data, function($message) use ($description)
		{
    		$message->to($description->email)->subject('Welcome!');
		});

		return Redirect::route('/verificationAccount');
	}

	public function accountDenyAction($id)
	{
		$description = Description::find($id);

		$data = ['comment' => Input::get('comment')];
		Mail::send('emails.deniedAccount', $data, function($message) use ($description)
		{
    		$message->to($description->email)->subject('Welcome!');
		});

		$description->delete();
		return Redirect::route('/verificationAccount');
	}

	// @author Varunyu
	public function verificationSeedAll()
	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$pp1s = Requests::where('type', '=', 'pp1')->groupBy('userID')->get();
		$pp8s = Requests::where('type', '=', 'pp8')->groupBy('userID')->get();
		$pp9s = Requests::where('type', '=', 'pp9')->groupBy('userID')->get();
		$this->layout->content = View::make('request.verificationSeedAll', compact('pp1s', 'pp8s', 'pp9s'));
	}

	// @author Varunyu
	public function verificationSeedPersonPP1($id)
	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$pp1s = PP1::where('userID', '=', $id)->get();
		$this->layout->content = View::make('request.verificationSeedPerson', compact('pp1s'));
	}

	public function verificationSeedPP1($id)
	{
		if(Auth::guest() || Auth::user()->role != "officer") return Redirect::route('/');
		$pp1 = PP1::find($id);
		$this->layout->content = View::make('request.verificationPP1', compact('pp1'));
	}

	public function pp1VerifyAction($id)
	{

		//new cerificate
		$pp1 = PP1::find($id);
		if(Requests::find($pp1->requestID)->status != 'Waiting') { 
			return Redirect::route('/verificationSeed/pp1/{id}', $pp1->userID);
		}
		Log::error(Requests::find($pp1->requestID)->status);
		$certificate = new Certificate;
		$expiredDate = new DateTime();
		$expiredDate->add(new DateInterval('P1Y'));
		$certificate->expiredDate = $expiredDate;
		$certificate->certificateType = $pp1->certificateType;
		$certificate->requestType = 'pp1';
		$certificate->ppID = $pp1->id;
		$certificate->userID = $pp1->userID;
		$certificate->save();

		//set status
		$request = Requests::find($pp1->requestID);
		$request->status = 'Approved';
		$request->save();

		return Redirect::route('/verificationSeed/pp1/{id}', $pp1->userID);
	}

	public function pp1DenyAction($id)
	{
		$request = Requests::find(PP1::find($id)->requestID);
		if($request->status != 'Waiting') { 
			return Redirect::route('/verificationSeed/pp1/{id}', $id);
		}
		$request->status = 'Denied';
		$request->message = Input::get('comment');
		$request->save();
		return Redirect::route('/verificationSeed/pp1/{id}', $id);
	}
}