<?php
require_once 'config/Conexion.php';
class Sesions
{
    private $con;
    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function login($cedula)
    {
        $sql = "select * from usuario where cedula=:cedula";
        $sentencia = $this->con->prepare($sql);
        $data = [
            'cedula' => $cedula,
        ];
        $sentencia->execute($data);
        $resultados = $sentencia->fetch(PDO::FETCH_OBJ);
        return $resultados;
    }
    public function insertarCliente($cedula, $nombre, $apellido, $correo, $password, $fecha_nac, $sexo)
    {
        $sql = "insert into usuario(cedula,nombres,apellidos,correo,password,fecha_nacimiento,sexo,id_rol) values(:cedula,:nombres,:apellidos,:correo,:password,:fecha_nacimiento,:sexo,2)";
        $sentencia = $this->con->prepare($sql);
        $data = [
            'cedula' => $cedula,
            'nombres' => $nombre,
            'apellidos' => $apellido,
            'correo' => $correo,
            'password' => $password,
            'fecha_nacimiento' => $fecha_nac,
            'sexo' => $sexo,
        ];
        $sentencia->execute($data);
        $resultados = $sentencia->fetch(PDO::FETCH_OBJ);
        return $resultados;
    }
}
