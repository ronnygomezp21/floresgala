<?php
require_once 'models/UsuarioModel.php';

class UsuarioController
{
    private $model;
    public function __construct()
    {
        $this->model = new Usuarios();
    }
    public function index()
    {
        $resultado_consulta = $this->model->consultar();
        require_once 'views/Usuario/listarusuarioView.php';
    }
    public function nuevo()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cedula = htmlentities($_POST['cedula']);
            $nombre = htmlentities($_POST['nombre']);
            $apellido = htmlentities($_POST['apellido']);
            $correo = htmlentities($_POST['correo']);
            $password = htmlentities($_POST['password']);
            $fecha_nac = htmlentities($_POST['fecha_nac']);
            $sexo = htmlentities($_POST['sexo']);
            $rol = htmlentities($_POST['rol']);

            $this->model->insertar($cedula, $nombre, $apellido, $correo, $password, $fecha_nac, $sexo, $rol);
            header('Location:index.php?c=Usuario&a=index');

        } else {
            require_once 'models/RolModel.php';
            $rol = new Roles();
            $roles = $rol->consultar();
            require_once 'views/Usuario/agregarusuarioView.php';
        }
    }

    public function eliminar()
    {
        $id = $_REQUEST['id'];
        $this->model->eliminar($id);

        header('Location:index.php?c=usuario&a=index');
    }

    public function editar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id_usuario = htmlentities($_POST['id_usuario']);
            $cedula = htmlentities($_POST['cedula']);
            $nombre = htmlentities($_POST['nombre']);
            $apellido = htmlentities($_POST['apellido']);
            $correo = htmlentities($_POST['correo']);
            $password = htmlentities($_POST['password']);
            $fecha_nac = htmlentities($_POST['fecha_nac']);
            $sexo = htmlentities($_POST['sexo']);
            $rol = htmlentities($_POST['rol']);

            $this->model->editar($cedula, $nombre, $apellido, $correo, $password, $fecha_nac, $sexo, $rol, $id_usuario);

            header('Location:index.php?c=usuario&a=index');

        } else {

            require_once 'models/RolModel.php';
            $rol = new Roles();
            $roles = $rol->consultar();

            $id = $_REQUEST['id'];
            $usuario = $this->model->buscarId($id);
            require_once 'views/Usuario/editarusuarioView.php';

        }
    }
    
}
