<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\EmployeeModel;
class Home extends Controller
{
	public function index()
	{
		$model=new EmployeeModel();
		$data['employees']=$model->getAll();
		return view('home.php',$data);
	}

	//--------------------------------------------------------------------

	// Hello World App
	public function hello_world(){
		return view('hello_world.php');
	}

}
