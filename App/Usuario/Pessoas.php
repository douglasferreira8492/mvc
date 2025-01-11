<?php
use Core\BaseController;
use Model\PessoasModel;
use Model\EstadoModel;
use DAO\Connect;

class Pessoas extends BaseController{

    public function getPessoas()
    {
        $db = new Connect();
        $instance = $db->getInstance();
        $sql = "SELECT * FROM person WHERE idperson = 2";
        $stmt = $instance->query($sql);
        $pessoas = $stmt->fetchAll();
        
        $pessoasModel = new PessoasModel();

        $pessoasModel->setData($pessoas);
        echo $pessoasModel->getidperson();

    }

    public function Pessoas()
    {
        $instance = new PessoasModel();
        $pessoas = $instance->getPessoasAll();

        $estado = new EstadoModel();
        $estados = $estado->getEstadoAll();
        $this->view('PessoasView',[array("pessoas"=>$pessoas),array("estados" => $estados),array('cidade' => 'Uruguaina')]);
    }
    
}