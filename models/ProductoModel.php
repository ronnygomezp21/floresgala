<?php
require_once 'config/Conexion.php';
class Productos
{
    private $con;
    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }
    public function consultar()
    {
        $sql = "SELECT pr.FechaRegistro fecha,idProducto, NombreEmpresa, Nombre, pr.Descripcion DescripcionProducto, Precio,Cantidad, c.Descripcion categoria FROM producto pr inner join proveedor p on pr.FProvedor= p.idProveedor inner join categoria c on  c.idcategoria = pr.FCategoria where pr.Estado='A'";
        $sentencia = $this->con->prepare($sql);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }
    public function buscarxCategoria($categoria)
    {
        $sql = "select * from producto p inner join categoria c on p.FCategoria = c.idcategoria where p.Estado = 'A' and FCategoria = :categoria order by p.Nombre";
        $stmt = $this->con->prepare($sql);
        $data = ['categoria' => $categoria];
        $stmt->execute($data);
        $producto = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $producto;
    }
}
