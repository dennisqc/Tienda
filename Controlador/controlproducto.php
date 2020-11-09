<?php
require_once "../Modelo/producto.php";

class ControlProducto
{
    private $model;

    public function __construct()
    {
        $this->model = new producto();
    }

    public function ListarProductosC()
    {

        $validar = new producto();
        $resultado = $validar->ListarProductos();
        //$resultado=$this->model->ListarProductos();      
        $arrayResultado = $resultado->fetchAll(pdo::FETCH_OBJ);
        return $arrayResultado;
    }

    public function ActualizarProductoC(){
        $resultado = new producto();
        $res = $resultado->ActualizarProducto();
        $res ->fetch();
        return $res;
    }
    /*public function Guardar2()
    {
        $producto = new producto();
        $producto->id_prducto = $_REQUEST['id_producto'];
        $producto->producto = $_REQUEST['producto'];
        $producto->cantidad = $_REQUEST['cantidad'];
        $producto->precio = $_REQUEST['precio'];
        $producto->id_producto > 0  ? $producto->ActualizarProducto()  : $producto->Nuevoproducto();
        header('Location: formproductos.php');
    }*/
    public function ListarProductoC($id_producto)
    {
        $resultado = $this->model->ListarProducto($id_producto);
        $arrayResultado = $resultado->fetch(pdo::FETCH_OBJ );
        return $arrayResultado;
    }
}
