<?php
require_once 'models/ProductoModel.php';
class ProductoController{
    private $model;
    public function __construct() {
        $this->model = new Productos(); 
    }
    public function index(){
        $resultado_consulta = $this->model->consultar();
        require_once 'views/Producto/listarproductoView.php';
    }
}