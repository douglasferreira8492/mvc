<?php
include_once("autoload.php");
include_once("helper.php");

$url = $_GET['url'];
$url = explode('/',$url);

$function = array_pop($url);
$patch    = "App/". implode("/",$url) . ".php";

if(file_exists($patch))
{
    require_once($patch);
    $className    =  end($url) ;
    $instance     =  new $className;
    $instance->$function();

}else{
    echo "Erro 404.";
}

?>