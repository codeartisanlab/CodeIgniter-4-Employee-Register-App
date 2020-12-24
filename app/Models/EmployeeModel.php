<?php
namespace App\Models;
use CodeIgniter\Model;

class EmployeeModel extends Model{
	protected $table='employees';

	function getAll(){
		return $this->findAll();
	}
}

?>