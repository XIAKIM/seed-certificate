<?php

class NewAccountController extends BaseController {
	protected $layout = "index";
	
	public function saveUserInfo(){

	}

	public function denyAccount($id){
		$description = Description::find($id);

		$data = ['comment' => Input::get('comment')];
		Mail::send('emails.deniedAccount', $data, function($message) use ($description)
		{
    		$message->to($description->email)->subject('Welcome!');
		});

		$description->delete();
		return Redirect::route('/accountlist');
	}

	public function approveAccount($id){
		$emailCheck = Description::find($id)->email;
		if(User::where('email', '=', $emailCheck)->count() >= 1) return Redirect::route('/accountlist');
		$user = new User;
		$user->username = 'entrepreneur' . $id;
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$password = substr(str_shuffle($chars), 0, 10);

		$user->password = Hash::make($password);
		$user->email = $emailCheck;
		$user->role = 'entrepreneur';
		$user->descriptionID = $id;
		$user->save();

		//set description to approved
		$description = Description::find($id);
		$description->status = 1;
		$description->save();

		//sending username and password to email
		$data = array(
    		'email' => $user->email,
    		'password' => $password
		);
		Mail::send('emails.genUserPass', $data, function($message) use ($description)
		{
    		$message->to($description->email)->subject('Welcome!');
		});

		return Redirect::route('/accountlist');
	}

	public function createUser()	{
		if(Input::server("REQUEST_METHOD")=="POST")	{
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
			"telNumber" => "required"
			]);
			if($validator->passes())	{
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
				$description->userAddressMoo = Input::get('userAddressMoo');
				$description->userAddressSoi = Input::get('userAddressSoi');
				$description->userAddressRoad = Input::get('userAddressRoad');
				$description->userAddressSubDistrict = Input::get('userAddressSubDistrict');
				$description->userAddressDistrict = Input::get('userAddressDistrict');
				$description->userAddressProvince = Input::get('userAddressProvince');
				$description->userAddressPostalCode = Input::get('userAddressPostalCode');
				$description->telNumber = Input::get('telNumber');
				$description->status = 0;
				$description->save();
				return Redirect::route('/afterregister');
			}else return Redirect::route('/afterregister')->with('error', true);
		}
	}
	public function changePassword() {
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

	public function login(){
		if (Input::server("REQUEST_METHOD") == "POST")
        {
            $validator = Validator::make(Input::all(), [
                "email" => "required",
                "password" => "required"
            ]);

            if ($validator->passes())
            {
                $credentials = [
                    "email" => Input::get("email"),
                    "password" => Input::get("password")
                ];
                if (Auth::attempt($credentials)) 
                {
                	Session::put('userID', Auth::user()->id);
                	return Redirect::route('/afterlogin');
                }
            }
        }
        return Redirect::route('/')->withInput()->with('error', 'Username and/or password invalid.'); 
	}

	public function logout(){
		Auth::logout();
		return Redirect::route('/');
	}
}
