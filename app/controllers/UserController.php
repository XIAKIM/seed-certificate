<?php

class UserController extends BaseController {
	protected $layout = "index";

	public function index()
	{
        $this->layout->content = View::make('mainpage');
	}

	public function signup()
	{
		$this->layout->content = View::make('user.signup');
	}
	/* @author KimApiwat */ 
	public function createAction()
	{
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			
			$validator = Validator::make(Input::all(),[
				"Username" => "required",
				"Age"  => "required",
				"Name" => "required",
				"Address" => "required",
				"Issued Province" => "required",
				"Nationality" => "required",
				"Nationality Type" => "required",
				"Nationality Numbrt" => "required",
				"Issued District" => "required",
				"Issued Province" => "required",
				"Identification Number" => "required",
				"Tel Number" => "required"]);
			
				
		}
	}

	public function status()
	{

		$this->layout->content = View::make('user.status');
	}

	public function loginAction() 
	{
        if (Input::server("REQUEST_METHOD") == "POST")
        {
            $validator = Validator::make(Input::all(), [
                "username" => "required",
                "password" => "required"
            ]);

            if ($validator->passes())
            {
                $credentials = [
                    "username" => Input::get("username"),
                    "password" => Input::get("password"),
                    "active" => 1
                ];
                if (Auth::attempt($credentials)) 
                {
                	Session::put('userID', Auth::user()->id);
                	return Redirect::route('/afterlogin');
                }
            }
            $data["username"] = Input::get("username");
            $this->layout->content = View::make('mainpage');
            return;
        }
        $this->layout->content = View::make('mainpage');
	}

	public function afterLogin()
	{
		$this->layout->content = View::make('user.afterlogin');	
	}

	public function profile()
	{
		$this->layout->content = View::make('user.profile');
	}

	public function edit()
	{
		$this->layout->content = View::make('user.edit');
	}

	public function updateAction()
	{
	
	}
	/* Delete User by id */
	/* @author Kimapiwat */ 
	public function deleteAction($id)
	{
		$affected = DB::table('User')->delete($id);
	}

	/* @author Kimapiwat */
	public function logoutAction()
	{
		Auth::logout();
		// todo : Delete session 
	}

	public function requestPP9()
	{
		$this->layout->content = View::make('request.requestPP9');
		// todo : Delete session 
	}
	public function requestPP1()
	{
		$this->layout->content = View::make('request.requestPP1');
		// todo : Delete session 
	}
}
