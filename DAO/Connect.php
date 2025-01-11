<?php
namespace DAO;
use PDO;
include_once("config.php");

class Connect{

    public $con;

    public function __construct()
    {
        if(empty($this->con) )
        {
            try {
                $this->con = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . ";port=" . PORT, USER, PASSWORD);
            } catch (\PDOException $th) {
                die("Erro de Conexão: " . $th->getMessage());
            }
            
        }
        
    }

    public function getInstance()
    {
        return $this->con;
    }
}