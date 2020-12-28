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

	// Add Page
	function add_data(){
		$model=new EmployeeModel();
		if($this->request->getMethod()=='post' && $this->validate([
			'full_name'=>'required',
			'email'=>'required'
		])){
			if($model->save([
				'full_name'=>$this->request->getPost('full_name'),
				'email'=>$this->request->getPost('email'),
				'mobile'=>$this->request->getPost('mobile'),
				'address'=>$this->request->getPost('address'),
				'department'=>$this->request->getPost('department'),
				'salary'=>$this->request->getPost('salary'),
				'doj'=>$this->request->getPost('doj'),
				'dor'=>$this->request->getPost('dor'),
				'is_active'=>$this->request->getPost('is_active'),
			])){
				$data['status']='Data has been added.';
			}
		}
		$data['pageTitle']='Add Data';
		return view('add.php',$data);
	}

	// Update Data
	function update_data($id){
		$model=new EmployeeModel();
		// Form Validation
		if($this->request->getMethod()=='post' && $this->validate([
			'full_name'=>'required',
			'email'=>'required'
		])){
			if($model->update($id,[
				'full_name'=>$this->request->getPost('full_name'),
				'email'=>$this->request->getPost('email'),
				'mobile'=>$this->request->getPost('mobile'),
				'address'=>$this->request->getPost('address'),
				'department'=>$this->request->getPost('department'),
				'salary'=>$this->request->getPost('salary'),
				'doj'=>$this->request->getPost('doj'),
				'dor'=>$this->request->getPost('dor'),
				'is_active'=>$this->request->getPost('is_active'),
			])){
				$data['status']='Data has been update.';
			}
		}
		$data['emp']=$model->find($id);;
		$data['pageTitle']='Update Data';
		return view('update.php',$data);
	}

}
