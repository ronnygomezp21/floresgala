<?php
require_once 'config/config.php';
class FrontControllers
{
    public function Ruteo()
    {
        $cont = isset($_REQUEST['c']) ? htmlentities($_REQUEST['c']) : CONTROLADOR_PRINCIPAL;
        $cont = ucwords(strtolower($cont)) . "Controller";
        $accion = isset($_REQUEST['a']) ? htmlentities($_REQUEST['a']) : ACCION_PRINCIPAL;
        $urlFinal = 'controllers/' . $cont . '.php';
        require_once $urlFinal;
        $controller = new $cont();
        $controller->$accion();
    }
}
