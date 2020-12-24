<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Home extends Controller
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
