<?php

spl_autoload_register(function($className){

    $path = $className . ".php";
    if(file_exists($path))
    {
        include_once($path);
    }

});