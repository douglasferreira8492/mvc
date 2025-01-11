<?php

use Core\BaseController;

class Users extends BaseController{

    public function __construct()
    {
        
    }
    public function users()
    {
        $this->view("UsersView");
    }
    

}