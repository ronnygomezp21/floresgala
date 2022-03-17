<?php
require_once 'models/ClienteModel.php';
class ClienteController{
    private $model;
    public function __construct() {
        $this->model = new Clientes(); 
    }
    public function index(){
        //$resultado_consulta = $this->model->consultar();
        require_once 'views/Cliente/HomeView.php';
    }

    public function editar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->model->editar();
        }
        else
        {
            require_once 'views/Cliente/EditarView.php';
        }
    }

    public function producto(){
        $resultado_consulta = $this->model->consultar();
        require_once 'views/Cliente/ProductoView.php';
    }
}