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

			$validator = validator::make(Input::all(),[
					/// what is input ????
				//////
				]);

			// if($validator->passes()){


			// 	// $requestFormType => Input::get(" ");
			// 	if($requestFormType == "PP"){

			// 	}
			// 	else if($requestFormType == "PP1"){

			// 	}
			// 	else if($requestFormType == "PP2"){

			// 	}
			// 	else if($requestFormType == "PP8"){

			// 	}
			// 	else if($requestFormType == "PP9"){

			// 	}
			// 	else if($requestFormType == "PP10"){

			// 	}
			// 	else if($requestFormType == "PP11"){

			// 	}
			// 	else if($requestFormType == "PP12"){

			// 	}
			// 	else if($requestFormType == "RM3"){

			// 	}

			// }



		}
	}	

	// @author Varunyu
	public function requestForm()
	{
		$this->layout->content = View::make('request.form');
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