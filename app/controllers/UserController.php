<?php

class UserController extends BaseController {

	public function __construct()
	{
		

		$this->beforeFilter('csrf', array('on' => 'posts'));

	}

	public function index()
	{

		'Bienvenue '.Auth::user()->username;

	}

	public function login()
	{


	}

	public function signup()
	{
		if(Auth::check())
		{
			return Redirect::to('user');
		}	

		return View::make('user.signup');					
	}

	public function logout()
	{

		
	}
}