<?php

class CertificateController extends BaseController {
	protected $layout = "index";
	
	public function showPP3()
	{
		if(Auth::guest()) return Redirect::route('/');
		if(Certificate::where('certificateType', '=', 3)->where('userID', '=', Auth::user()->id)->first() != null) 
		{
			$certificate = Certificate::where('certificateType', '=', 3)->where('userID', '=', Auth::user()->id)->first();
			$this->layout->content = View::make('certificate.PP3', compact('certificate'));
		}
		else return Redirect::route('/');
	}

	public function showPP4()
	{
		if(Auth::guest()) return Redirect::route('/');
		if(Certificate::where('certificateType', '=', 4)->where('userID', '=', Auth::user()->id)->first() != null) 
		{
			$certificate = Certificate::where('certificateType', '=', 4)->where('userID', '=', Auth::user()->id)->first();
			$this->layout->content = View::make('certificate.PP4', compact('certificate'));
		}
		else return Redirect::route('/');
	}

	public function showPP5()
	{
		if(Auth::guest()) return Redirect::route('/');
		if(Certificate::where('certificateType', '=', 5)->where('userID', '=', Auth::user()->id)->first() != null) 
		{
			$certificate = Certificate::where('certificateType', '=', 5)->where('userID', '=', Auth::user()->id)->first();
			$this->layout->content = View::make('certificate.PP4', compact('certificate'));
		}
		else return Redirect::route('/');
	}

	public function showPP6()
	{
		if(Auth::guest()) return Redirect::route('/');
		if(Certificate::where('certificateType', '=', 6)->where('userID', '=', Auth::user()->id)->first() != null) 
		{
			$certificate = Certificate::where('certificateType', '=', 6)->where('userID', '=', Auth::user()->id)->first();
			$this->layout->content = View::make('certificate.PP4', compact('certificate'));
		}
		else return Redirect::route('/');
	}
}
