<?php

class UserController extends BaseController {

	public function __construct()
	{
		
		$this->beforeFilter('guest', array('only' => 'comment','add'));
		$this->beforeFilter('csrf', array('on' => 'posts'));

	}

	public function index()
	{

		'Bienvenue '.Auth::user()->username;

	}

	public function login()
	{

		return View::make("/user/login")
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