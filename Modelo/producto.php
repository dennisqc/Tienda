<?php

require_once '../bd/conexion.php';
class producto extends conexiones
{

    private $id_producto;
    private $producto;
    private $precio;
    private $cantidad;
    private $conexion;
    //  private $ ;
    //  private $ ;
    //  private $ ;
    public function __construct()
    {
        $this->conexion = parent::conexion();
    }
        
    public function __set($name, $value)
    {
        $this->$name=$value;
    }
    public function __get($name)
    {
      return  $this->$name;
    }
    /*
    public function getId_producto()
    {
        return $this->id_producto;
    }
    public function setId_producto($id_producto)
    {
        $this->id_producto = $id_producto;
    }

    public function getProducto()
    {
        return $this->producto;
    }

    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
*/
    public function  ListarProductos()
    {
        $consulta = $this->conexion->prepare("SELECT * FROM  producto");
        $consulta->execute();
        return $consulta;
    }

    public function Nuevoproducto()
    {
        $consulta = $this->conexion->prepare("INSERT INTO  producto  (producto ,precio , cantidad )  values (?,?,?)");
        $consulta->execute(array($this->producto, $this->precio, $this->cantidad));
        return $consulta;
    }
    public function ActualizarProducto()
    {
        $consulta = $this->conexion->prepare("UPDATE producto SET producto=?, precio=? , cantidad=? WHERE id_producto=? ");
        //$consulta->execute(array($this->producto, $this->precio, $this->cantidad, $this->id_producto));
        $consulta->execute(array($this->producto, $this->precio, $this->cantidad, $this->id_producto));
        return $consulta;
    }
    public function ListarProducto($id_producto)
    {
        $consulta = $this->conexion->prepare("SELECT * FROM producto where id_producto=?");
        $consulta->execute(array($id_producto));

        return $consulta;
    }
    public function EliminarProducto($id_producto)
    {
        $consulta = $this->conexion->prepare("DELETE FROM producto where id_producto=?");
        $consulta->execute(array($id_producto));
        return $consulta;
    }
}
