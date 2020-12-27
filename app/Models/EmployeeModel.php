<?php
namespace App\Models;
use CodeIgniter\Model;

class EmployeeModel extends Model{
	protected $table='employees';
	protected $allowedFields=['full_name','email','mobile','address','department','salary','doj','dor','is_active'];

	function getAll(){
		return $this->findAll();
	}
}

?>