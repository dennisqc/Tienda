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
        //obj te da un stdClass Object 
        //assoc te da un array 
        return $arrayResultado;
    }

    public function ActualizarProductoC()
    {
        /* $resultado = new producto();
        $res = $resultado->ActualizarProducto();
        $lol=$res->fetch(pdo::FETCH_OBJ);
        return $lol;*/
        $resultado = new producto();
        $res = $resultado->ActualizarProducto()->fetch(pdo::FETCH_OBJ);
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
        $arrayResultado = $resultado->fetch(pdo::FETCH_OBJ);
        return $arrayResultado;
    }

    public function ListarCategoriaC()
    {
        //referencia en ActualizarProductoC
        $resultado = new producto();
        $res = $resultado->ListarCategoria();
        $ArrayResultado = $res->fetchAll(pdo::FETCH_OBJ);
        return $ArrayResultado;
        //el pdo::FETCH_OBJ los convierte en objeto sino se usa nos da un array 
        /* $resultado = $this->model->ListarCategoria();
        $arrayResultado = $resultado->fetchAll(pdo::FETCH_OBJ);      
        return $arrayResultado;*/
    }
}
