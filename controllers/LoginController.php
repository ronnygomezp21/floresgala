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
        require_once 'views/Login/LoginView.php';
    }

    public function login()
    {
        $cedula = filter_var(htmlentities($_POST['cedula']), FILTER_SANITIZE_NUMBER_INT);
        $password = htmlentities($_POST['password']);

        $exito = $this->model->login($cedula);

        if ($exito) {
            if (password_verify($password, $exito->password) && $exito->id_rol == 1 && $exito->estado == 1) {
                session_start();
                $_SESSION['id_rol'] = $exito->id_rol;
                $_SESSION['id_usuario'] = $exito->id_usuario;
                header('location:index.php?c=usuario&a=index');
                exit();
            } else {
                //echo '<script>alert("Contraseña incorrecta");window.location.href = "index.php?c=login&a=index";</script>';
                header('location:index.php?c=login&a=index');
                //exit();
            }
        } else {
            //echo '<script>alert("Usuario no registrado");window.location.href = "index.php?c=login&a=index";</script>';
            //exit();
            header('location:index.php?c=login&a=index');
        }if (password_verify($password, $exito->password) && $exito->id_rol == 2 && $exito->estado == 1) {
            session_start();
            $_SESSION['id_rol'] = $exito->id_rol;
            $_SESSION['id_usuario'] = $exito->id_usuario;
            header('location:index.php?c=cliente&a=index');
            exit();
        } else {
            header('location:index.php?c=login&a=index');
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
            $cedula = filter_var(htmlentities($_POST['cedula']), FILTER_SANITIZE_NUMBER_INT);
            $nombre = filter_var(htmlentities($_POST['nombre']), FILTER_SANITIZE_STRING);
            $apellido = filter_var(htmlentities($_POST['apellido']), FILTER_SANITIZE_STRING);
            $correo = filter_var(htmlentities($_POST['correo']), FILTER_SANITIZE_EMAIL);
            $password = htmlentities($_POST['password']);
            $fecha_nac = htmlentities($_POST['fecha_nac']);
            $sexo = htmlentities($_POST['sexo']);

            $password = password_hash($password, PASSWORD_DEFAULT);

            $this->model->insertarCliente($cedula, $nombre, $apellido, $correo, $password, $fecha_nac, $sexo);

            header('Location: index.php');
        } else {
            require_once 'views/Login/RegistrarView.php';
        }
    }
}
