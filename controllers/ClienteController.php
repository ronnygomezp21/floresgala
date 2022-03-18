<?php
require_once 'models/ClienteModel.php';
class ClienteController
{
    private $model;
    public function __construct()
    {
        $this->model = new Clientes();
    }
    public function index()
    {
        //$resultado_consulta = $this->model->consultar();
        require_once 'views/Cliente/HomeView.php';
    }

    public function editar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id_usuario = filter_var(htmlentities($_POST['id_usuario']), FILTER_SANITIZE_NUMBER_INT);
            $nombre = filter_var(htmlentities($_POST['nombre']), FILTER_SANITIZE_STRING);
            $apellido = filter_var(htmlentities($_POST['apellido']), FILTER_SANITIZE_STRING);

            $this->model->editar($nombre, $apellido, $id_usuario);

            header('Location:index.php?c=cliente&a=index');

        } else {

            $id = $_REQUEST['id'];
            $cliente = $this->model->buscarId($id);
            require_once 'views/Cliente/EditarView.php';

        }
    }
    public function producto()
    {
        $resultado_consulta = $this->model->consultar();
        require_once 'models/CategoriaModel.php';
        $cate = new Categorias();
        $cat = $cate->consultar();
        require_once 'views/Cliente/ProductoView.php';
    }

    public function password()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id_usuario = filter_var(htmlentities($_POST['id_usuario']), FILTER_SANITIZE_NUMBER_INT);
            $password = filter_var(htmlentities($_POST['password']), FILTER_SANITIZE_STRING);
            $password = password_hash($password, PASSWORD_DEFAULT);

            $this->model->cambiarPassword($password, $id_usuario);

            header('Location:index.php?c=cliente&a=index');

        } else {

            $id = $_REQUEST['id'];
            $cliente = $this->model->buscarId($id);
            require_once 'views/Cliente/EditarPasswordView.php';

        }
    }
}
