<?php
require_once 'config/Conexion.php';
class Clientes{
    private $con;
    public function __construct() {
        $this->con = Conexion::getConexion(); 
    }

    public function consultar()
    {
        $sql = "select * from producto where estado = 'A'";
        $sentencia = $this->con->prepare($sql);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
}