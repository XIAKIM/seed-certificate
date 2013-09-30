<?php

class UserController extends BaseController {
	protected $layout = "index";
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->layout->content = View::make('mainpage');
	}

	/*public function loginAction()
	{
		Log::error('test');

		$errors = new MessageBag();
        if ($old = Input::old("errors"))
        {
            $errors = $old;
        }
        $data = [
            "errors" => $errors
        ];
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
                    return Redirect::route("/profile");
                }
            }
            $data["errors"] = new MessageBag([
                "password" => [
                    "Username and/or password invalid."
                ]
            ]);
            $data["username"] = Input::get("username");
            return Redirect::route("/mainpage")
                ->withInput($data);
        }

        return View::make("/mainpage", $data);
	}*/

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
                    $this->layout->content = View::make('user.profile');
                    return;
                }
            }
            $data["username"] = Input::get("username");
            $this->layout->content = View::make('mainpage');
            return;
        }
        $this->layout->content = View::make('mainpage');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $this->layout->content = View::make('user.signup');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//TODO save user to database
	}

	public function show()
	{
		//get userID from session and show
        $this->layout->content = View::make('user.profile');
	}

	public function showStatus() 
	{
		$this->layout->content = View::make('user.status');
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('users.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
