<?php
require_once 'config/Conexion.php';
class Clientes
{
    private $con;
    public function __construct()
    {
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

    public function editar($nombre, $apellido, $id_usuario)
    {
        $sql = "update usuario set nombres=:nombre, apellidos=:apellido WHERE id_usuario=:id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            ':id' => $id_usuario,
            ':nombre' => $nombre,
            ':apellido' => $apellido,
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }
    public function cambiarPassword($password, $id_usuario)
    {
        $sql = "update usuario set password=:password WHERE id_usuario=:id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            ':id' => $id_usuario,
            ':password' => $password,
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }
    public function buscarId($id)
    {
        $sql = "select * from usuario where id_usuario = :id";
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        $stmt->execute($data);
        $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

        return $cliente;
    }
}
