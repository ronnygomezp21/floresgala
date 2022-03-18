<?php
include 'config/Conexion.php';
class Usuarios
{
    private $con;
    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function consultar()
    {
        $sql = "select u.id_usuario, u.cedula, u.apellidos, u.nombres, u.correo, u.fecha_nacimiento, u.estado, r.nombre from usuario u
      inner join rol r on u.id_rol = r.id_rol where u.estado = 1";
        $sentencia = $this->con->prepare($sql);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
    public function buscarId($id)
    {
        $sql = "select * from usuario u inner join rol r on u.id_rol = r.id_rol where id_usuario = :id";
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        $stmt->execute($data);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        return $usuario;
    }

    public function insertar($cedula, $nombre, $apellido, $correo, $password, $fecha_nac, $sexo, $rol)
    {
        $sql = "insert into usuario (cedula,nombres,apellidos,correo,password,fecha_nacimiento,sexo,id_rol) VALUES
        (:cedula, :nombre, :apellido, :correo, :pass, :fecha_nac, :sexo, :id_rol)";

        $sentencia = $this->con->prepare($sql);
        $data = [
            ':cedula' => $cedula,
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':correo' => $correo,
            ':pass' => $password,
            ':fecha_nac' => $fecha_nac,
            ':sexo' => $sexo,
            ':id_rol' => $rol,
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }

    public function editar($cedula, $nombre, $apellido, $correo, $password, $fecha_nac, $sexo, $rol, $id)
    {
        $sql = "update usuario set nombres=:nombre, apellidos=:apellido, correo=:correo, fecha_nacimiento=:fecha_nac, sexo=:sexo, id_rol=:rol WHERE id_usuario=:id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            ':id' => $id,
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':correo' => $correo,
            ':fecha_nac' => $fecha_nac,
            ':sexo' => $sexo,
            ':rol' => $rol,
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;

    }
    public function eliminar($id)
    {
        $sql = "update usuario set estado = 0 where id_usuario = :id";
        $sentencia = $this->con->prepare($sql);
        $data = [
            ':id' => $id,
        ];
        $sentencia->execute($data);
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }
    public function iniciarSesion($cedula, $password)
    {
        $sql = "select * from usuario where cedula=:cedula and password=:password";
        $sentencia = $this->con->prepare($sql);
        $data = [
            'cedula' => $cedula,
            'password' => $password,
        ];
        $sentencia->execute($data);
        $resultados = $sentencia->fetch(PDO::FETCH_OBJ);
        return $resultados;
    }

}
