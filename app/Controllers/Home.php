<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}
    public function login()
	{
		return view('login.php/Home/login');
	}
}
