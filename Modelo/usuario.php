<?php
require_once '../bd/conexion.php';

class usuario extends conexiones
{
    private $id_usuario;
    private $usuario;
    private $pass;
    private $dni;
    private $estado;
    private $conexion;

    public function __construct()
    {
        $this->conexion = parent::conexion();
    }

    /*  public function ValidarLogin()
    {
        try {
            $consulta = $this->conexion->prepare("SELECT * FROM  usuario ");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }*/

    public function ValidarLogin()
    {
        try {


            $consulta = $this->conexion->prepare("SELECT usuario,pass  FROM  usuario WHERE usuario=:usuario and pass=:pass ");
            // $consulta->execute(array($this->usuario, $this->pass));

           return $consulta;
            //   return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function ModificarLogin()
    {
    }

    public function SuspenderLogin()
    {
    }
}
