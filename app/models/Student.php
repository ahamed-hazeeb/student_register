<?php

class Student {

    use Model;

    protected $table = 'register';
    protected $allowedColumns = [
        'program', 'batch', 's_id', 'name', 'nic', 'dob','gender', 'email', 'address'];

    public function validate($data)
	{
		$data=[];
		$data=$_POST;
		$this->errors = [];

        if(empty($_POST['s_id']))
		{
			$this->errors['s_id'] = "index is required s_id";
		}
		if(empty($_POST['name']))
		{
			$this->errors['name'] = "index is required name";
		}
		if(empty($_POST['nic']))
		{
			$this->errors['nic'] = "index is required nic";
		}
		if(empty($_POST['dob']))
		{
			$this->errors['dob'] = "index is required dob";
		}
        
        if(empty($data['email']))
		{
			$this->errors['email'] = "Email is required email";
		}
		
		
		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}

	function table_auto(){
		$string=[]; 
		$st = new Student;
			  $string = $st->find_all();
			  
			  if (!empty($string)) {
				# code...
			  
  $jsonString = json_encode($string);
  $json_reader = json_decode($jsonString,true);
   
			  //get the values one by one
			  foreach ($json_reader as $key => $detail) {
				echo "<tr><td>".$detail['s_id']."</td>";
				echo "<td>".$detail['batch']."</td>";
				echo "<td>".$detail['program']."</td>";
				echo "<td>".$detail['name']."</td>";
				echo "<td>".$detail['nic']."</td>";
				echo "<td>".$detail['dob']."</td>";
				echo "<td>".$detail['gender']."</td>";
				echo "<td>".$detail['email']."</td>";
				echo "<td>".$detail['address']."</td></tr>";
		}
		}
		else{
			echo "no data";
		}
	}
	 
	

}