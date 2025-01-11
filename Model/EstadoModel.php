<?php
namespace Model;
use DAO\Connect;

class EstadoModel
{
    private $name;

    public function __construct($name = null)
    {
        $this->name = null;
    }

    public function save()
    {
        $conn = new Connect();
        $instance = $conn->getInstance();
        $sql = "INSERT INTO `estado` VALUES (default,:name)";
        $stmt = $instance->prepare($sql);
        $stmt->execute(array(
            ":name" => $this->name
        ));
    }

    public function getEstadoAll()
    {
        $conn = new Connect();
        $instance = $conn->getInstance();
        $sql = "SELECT * FROM estado";
        $stmt = $instance->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getEstado()
    {
        return $this->name;
    }
    public function setEstado($name)
    {
        $this->name = $name;
    }
}