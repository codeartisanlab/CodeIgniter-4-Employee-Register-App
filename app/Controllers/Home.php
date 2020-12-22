<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	// Hello World App
	public function hello_world(){
		return view('hello_world.php');
	}

}
