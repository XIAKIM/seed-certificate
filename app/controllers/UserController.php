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
		if(Input::server("REQUEST_METHOD")=="POST")
		{
			$validator = Validator::make(Input::all(),[
				"name" => "required",
				"lastname" => "required",
				"email" => "required",
				"age"  => "required",
				"nationality" => "required",
				"identificationType" => "required",
				"identificationNumber" => "required",
				"issuedDistrict" => "required",
				"issuedProvince" => "required",
				"address" => "required",
				"telNumber" => "required"
			]);
			if($validator->passes())
			{
				$description = new Description;
				$description->name = Input::get('name');
				$description->lastName = Input::get('lastname');
				$description->email = Input::get('email');
				$description->age = Input::get('age');
				$description->nationality = Input::get('nationality');
				$description->identificationType = Input::get('identificationType');
				$description->identificationNumber = Input::get('identificationNumber');
				$description->issuedDistrict = Input::get('issuedDistrict');
				$description->issuedProvince = Input::get('issuedProvince');
				$description->address = Input::get('address');
				$description->telNumber = Input::get('telNumber');
				$description->status = 0;
				$description->save();
				return Redirect::route('/afterregister');
			}
			else return Redirect::route('/afterregister')->with('error', true);
		}
	}

	public function status()
	{
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('user.status');
	}

	public function afterregister()
	{
		$this->layout->content = View::make('user.afterregister');
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
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('user.afterlogin');	
	}

	public function profile()
	{
		if(Auth::guest()) return Redirect::route('/');
		$this->layout->content = View::make('user.profile');
	}

	public function edit()
	{
		if(Auth::guest()) return Redirect::route('/');
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
		return Redirect::route('/');
	}
}
