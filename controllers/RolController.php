<?php
require_once 'models/RolModel.php';

class RolController
{
    private $model;
    public function __construct()
    {
        $this->model = new Roles();
    }
    public function index()
    {
        $resultado_consulta = $this->model->consultar();
        //require_once 'views/Usuario/listarusuarioView.php';
    }
}