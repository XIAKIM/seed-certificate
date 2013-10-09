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

				$description->userAddressNo = Input::get('userAddressNo');
				$description->userMoo = Input::get('userAddressMoo');
				$description->userSoi = Input::get('userAddressSoi');
				$description->userRoad = Input::get('userAddressRoad');
				$description->userSubDistrict = Input::get('userAddressSubDistrict');
				$description->userDistrict = Input::get('userAddressDistrict');
				$description->userProvince = Input::get('userAddressProvince');
				$description->userPostalCode = Input::get('userAddressPostalCode');

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
		$pp1s = PP1::where('userID', '=', Auth::user()->id)->get();
		$this->layout->content = View::make('user.status', compact('pp1s'));
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
        }
        $this->layout->content = View::make('mainpage');
	}

	public function afterLogin()
	{
		if(Auth::guest()) return Redirect::route('/');
		if(Auth::user()->role == 'officer' || Auth::user()->role == 'lab') return Redirect::route('/afteradminlogin');
		$this->layout->content = View::make('user.afterlogin');	
	}

	public function afterAdminLogin()
	{
		if(Auth::guest()) return Redirect::route('/');
		if(Auth::user()->role == 'entrepreneur') return Redirect::route('/');
		$description = Description::find(Auth::user()->descriptionID);
		$this->layout->content = View::make('user.firstPageLab', compact('description'));
	}
	public function profile()
	{
		if(Auth::guest()) return Redirect::route('/');
		$description = Description::find(Auth::user()->descriptionID);
		$this->layout->content = View::make('user.profile', compact('description'));
	}

	public function edit()
	{
		if(Auth::guest()) return Redirect::route('/');
		$description = Description::find(Auth::user()->descriptionID);
		$this->layout->content = View::make('user.profileEdit', compact('description'));
	}

	public function editAction()
	{
		if (Input::server("REQUEST_METHOD") == "POST")
        {
            $validator = Validator::make(Input::all(), [
                "passwordOld" => "required",
                "password1" => "required",
                "password2" => "required",
            ]);
            if ($validator->passes())
            {
            	Log::error(Input::get('passwordOld'));
            	Log::error(Input::get('password1'));
            	Log::error(Input::get('password2'));
            	Log::error(Auth::user()->password);
            	Log::error(Hash::make(Input::get('passwordOld')));
            	if(Hash::check(Input::get('passwordOld'), Auth::user()->password) && Input::get('password1') == Input::get('password2'))
            	{
            		Auth::user()->password = Hash::make(Input::get('password2'));
            		Auth::user()->save();
            		return Redirect::route('/profile');
            	}
            }
            return Redirect::route('/');
        }
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
