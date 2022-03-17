<?php
require_once 'models/LoginModel.php';

class LoginController
{
    private $model;
    public function __construct()
    {
        $this->model = new Sesions();
    }
    public function index()
    {
        //$resultado_consulta = $this->model->consultar();
        require_once 'views/Login/LoginView.php';
    }

    public function login()
    {
        $cedula = htmlentities($_POST['cedula']);
        $password = htmlentities($_POST['password']);

        $exito = $this->model->login($cedula, $password);
        if ($exito->id_rol == 1 && $exito->estado == 1) {
            session_start();
            $_SESSION['id_rol'] = $exito->id_rol;
            header('location:index.php?c=usuario&a=index');
            exit();
        }
        if($exito->id_rol == 2 && $exito->estado == 1){
            session_start();
            $_SESSION['nombres'] = $exito->nombres;
            $_SESSION['id_rol'] = $exito->id_rol;
            header('location:index.php?c=cliente&a=index');
            exit();
        }else{
            header('location:index.php');
        }

    }
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php');
    }
    public function registro()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cedula = htmlentities($_POST['cedula']);
            $nombre = htmlentities($_POST['nombre']);
            $apellido = htmlentities($_POST['apellido']);
            $correo = htmlentities($_POST['correo']);
            $password = htmlentities($_POST['password']);
            $fecha_nac = htmlentities($_POST['fecha_nac']);
            $sexo = htmlentities($_POST['sexo']);

            $this->model->insertarCliente($cedula, $nombre, $apellido, $correo, $password, $fecha_nac, $sexo);

            header('Location: index.php');
        } else {
            require_once 'views/Login/RegistrarView.php';
        }
    }
}
