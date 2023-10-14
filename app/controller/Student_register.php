<?php

class Student_register extends Controller{
    function index(){
        $data=[];
        $filename = "../app/views/nav.view.php";
        require $filename;
      
         $this->view('student_register');
        
        
        
        }

    }
        