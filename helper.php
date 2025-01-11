<?php
define('BASE_URL', 'http://localhost/mvc/');

function base_url($uri = null)
{
    if($uri == "")
    {
        return BASE_URL;
        exit;
    }
    return BASE_URL . $uri . "/";
}