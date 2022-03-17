<?php
require_once 'config/Conexion.php';
class Roles
{
    private $con;
    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function consultar()
    {
        $sql = "select * from rol order by nombre";
        $sentencia = $this->con->prepare($sql);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultados;
    }
}