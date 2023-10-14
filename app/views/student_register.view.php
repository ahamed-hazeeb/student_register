<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?=ROOT?>/assets/js/jquery-3.7.1.js"></script>
  <script type="text/javascript" src="<?=ROOT?>/assets/js/submit_form.js"></script>
  <?php $filename = "../app/views/ajax.view.php";
        require $filename;
?>
   
    <title>Student register</title>
</head>
<body>
<div class="main_box">
  <div class="form_box">
    <form method="post" id="myform">
  
  
  
  <div  class="card p-2">
  <h3 style="margin: 0;"><center> Student Register</center></h3>
<hr id="hr_">
  <div class="form-group " >
    <label for="exampleFormControlInput1"  id="lbl_id">Index </label>
    <input type="text" class="form-control "  id="s_id" placeholder="" name="s_id"  >
    <button type="button" class="btn btn-primary" name="search" id="search" style="margin-left: 10px;" onclick="search_id()">Search</button>   
  </div> 
  
  <div class="form-group">
    <label for="exampleFormControlSelect1" id="lbl_program">Program</label>
    <select class="form-control form-control-sm" id="program"name="program">
      <option>SOF</option>
      <option>NET</option>
      <option>MMW</option>
    </select>
  </div>

  <div class=" form-group">
    <label for="exampleFormControlSelect2"id="lbl_batch">GROUP</label>
    <select class="form-control form-control p-1 m-1" id="batch" name="batch">
      <option>FULL TIME</option>
      <option>PART TIME</option>
    </select>
    
  </div>
  
 
  <div class="form-group ">
    <label for="exampleFormControlInput1" id="lbl_name">Name</label>
    <input type="text" class="form-control form-control-sm" id="name" placeholder="" name="name">
  </div> 
  
  <div class="form-group ">
    <label for="exampleFormControlInput1" id="lbl_nic">NIC</label>
    <input type="text" class="form-control form-control-sm" id="nic" placeholder="" name="nic">
  </div>
  
  <div class="form-group ">
    <label for="exampleFormControlInput1" id="lbl_dob">Date Of Birth</label>
    <input type="date" class="form-control form-control-sm" id="dob" placeholder="" name="dob">
  </div> 
  
  <div class="form-group">
    <label for="exampleFormControlSelect2" id="lbl_gender">Gender</label>
    <select class="form-control form-control-sm" id="gender" name="gender">
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  
  <div class="form-group ">
    <label for="exampleFormControlInput1" id="lbl_email">Email</label>
    <input type="text" class="form-control form-control-sm" id="email" placeholder="name@example.com" name="email" >

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" id="lbl_address">Address</label>
    <textarea class="form-control form-control-sm" id="address" name="address" rows="3"></textarea >
  </div>
  <div style="display: flex;">
  <button type="submit" class="btn btn-primary m-2 p-3" name="submit" id="submit" >INSERT</button>    
  <button type="button" class="btn btn-primary m-3 p-2" name="update" id="update" style="width:100px;" onclick="update_()">Update</button>    
  <button type="button" class="btn btn-success m-3 p-2" name="delete" id="delete" style="width:100px; " onclick="delete_rec()">Delete</button>    
  </div>

  </div>
  
  </div>
</form>
</div>
<div class="table_main">
   <div class="inner_box" ;">
    <table id="example"class="table table-striped table-hover table-responsive">
      <h3 style="text-align: center;">Student List</h3>
	      <thead>
		      <tr>
          <th>Student ID</th>
          <th>Program</th>
          <th>Batch</th>
          <th>Name</th>
          <th>NIC</th>
          <th style="width: 100px;">Date Of Birth</th>
          <th>Gender</th>
          <th>Email</th>
          <th>Address</th>
        </tr>
	</thead>
	<tbody id="table_data">
		<?php
    $reg= new Student;
    $reg->table_auto();
	?>
	</tbody>
</table>
 </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>