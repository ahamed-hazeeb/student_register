<?php

spl_autoload_register(function($classname){
    require "../app/models/".ucfirst($classname).".php";
});

require 'config.php';
require 'function.php';
require 'Database.php';
require 'Models.php';
require 'Controller.php';
require 'App.php';