<?php

function show($a){
    echo "<pre>";
    print_r($a);
    echo"</pre>";
}

function redirect($path)
{
	header("Location: " . ROOT."/".$path);
	die;
}