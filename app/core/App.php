<?php

class App{
    private $controller ='home';
    private $method ='index';

private function spiltURL(){
    $URL = $_GET['url'] ?? 'home';
    $URL = explode("/",$URL);
    return $URL;
}

public function loadcontroller(){
    $URL=$this->spiltURL();
$filename = "../app/controller/".ucfirst($URL[0]).".php";
    if(file_exists($filename)){
        require $filename;
        $this->controller=ucfirst($URL[0]);
    }
    else{
        $filename = "../app/controller/_404.php";
        require $filename;
        $this->controller='_404';
        }
     
$controller = new  $this->controller;
call_user_func_array([$controller,$this->method],[]);

    }
}

