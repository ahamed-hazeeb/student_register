<?php

class Home extends Controller{
    function index(){
        $data=[];
        echo "This is home controller<br>";
        $filename = "../app/views/nav.view.php";
        require $filename;
        $user = new User;

      $arr['name']='ahamed';
        $result =  $user->where($arr);
        show($result);

        $this->view('home',$data);
    }
}
