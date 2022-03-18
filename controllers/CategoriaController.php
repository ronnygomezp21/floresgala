<?php
require_once 'models/CategoriaModel.php';
class CategoriaController
{
    private $model;
    public function __construct()
    {
        $this->model = new Categorias();
    }
    public function index()
    {
        //$resultado_consulta = $this->model->consultar();
        //require_once 'views/Cliente/HomeView.php';
    }
}
