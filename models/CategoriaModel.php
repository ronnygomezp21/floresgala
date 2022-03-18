<?php
require_once 'config/Conexion.php';
class Categorias
{
    private $con;
    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function consultar()
    {
        $sql = "select * from categoria where estado = 'A' order by Descripcion";
        $sentencia = $this->con->prepare($sql);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
}
