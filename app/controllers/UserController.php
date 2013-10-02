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

	public function createAction()
	{

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
                    "password" => Input::get("password")
                ];
                if (Auth::attempt($credentials)) 
                {
                	Session::put('userID', Auth::user()->id);
                	return Redirect::route('/profile');
                }
            }
            $data["username"] = Input::get("username");
            $this->layout->content = View::make('mainpage');
            return;
        }
        $this->layout->content = View::make('mainpage');
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

	public function deleteAction()
	{

	}

	public function logoutAction()
	{

	}
}
