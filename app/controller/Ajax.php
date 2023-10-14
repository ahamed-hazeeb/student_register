<?php

class Ajax extends Controller{
    function index(){
      $student = new Student;
      if (isset($_POST['type']) && $_POST['type'] == 'insert') {
     
        $valid= $student->validate($_POST);
        echo $valid;
        var_dump($valid=="");
        if($valid==""){
         
        $search=[];
        $post=[];
        $post['s_id']=$_POST['s_id'];
      
        $search=($student->get_first_result($post));
       

      if(empty($search)){
        
          $get=$student->insert($_POST);
              if($get ===true)
              {
              
                $student_table=$student->table_auto();
                echo $student_table;
                
              }
              else
              {
              echo "Not";
              }
          }
          else{
            echo "record exist";
          }
      }else{
        echo "ID empty";
      }
              
       }
       if (isset($_POST['type']) && $_POST['type'] == 'search') {
        $search=[];
        $post=[];
        $post['s_id']=$_POST['s_id'];
    
           $search=($student->get_first_result($post));
            $json_data=json_encode($search) ;
          echo $json_data;

       }
       if (isset($_POST['type']) && $_POST['type'] == 'update') {
       

          if($_POST['s_id']!=""){
          $search=[];
          $post=[];
          $post['s_id']=$_POST['s_id'];
          $search=($student->get_first_result($post));
        
                if(!empty($search)){
                $student->update($_POST['s_id'],$_POST);
            
                $student_reg= new Student();
                $student_table=$student_reg->table_auto();
                echo $student_table;
            
                }
                else{
                  echo "valid id";
                }   
          } else
          {
            echo "ID empty";
          }
       }
       if (isset($_POST['type']) && $_POST['type'] == 'delete') {
       
        if($_POST['s_id']!=""){
          $search=[];
          $post=[];
          $post['s_id']=$_POST['s_id'];
          $search=($student->get_first_result($post));
        
           if(!empty($search)){
                 $student->delete($_POST['s_id']);
                 
                 $student_reg= new Student();
                 $student_table=$student_reg->table_auto();
                 echo $student_table;
             
                 }
                 else{
                   echo "valid id";
                 }   
           } else
           {
             echo "ID empty";
           }    
    }  }
        
}
