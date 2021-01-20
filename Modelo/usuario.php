<?php
require_once '../bd/conexion.php';

class usuario extends conexiones
{
    private $id_usuario;
    private $usuario;
    private $pass;
    private $dni;
    private $estado;
    private $id_Cargo;
    private $correo;
    private $telefono;
    private $Direccion;
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


    /*  */
    public function ListarLoginEditarM()
    {
        $consulta = $this->conexion->prepare("SELECT u.id_usuario, u.Nombre , u.Apepat , u.Apemat , u.dni ,u.correo , u.telefono , u.Direccion , u.estado, du.id_cargo, du.cargo FROM usuario u INNER JOIN detalle_usuario du on u.id_Cargo=du.id_Cargo ");
        $consulta->execute();
        return $consulta;
    }

    public function ListarLoginM()
    {
        $consulta = $this->conexion->prepare("SELECT u.id_usuario, u.usuario ,u.pass, u.Nombre , u.Apepat , u.Apemat  ,  u.dni ,u.correo , u.telefono , u.Direccion , u.estado, du.id_cargo, du.cargo 
        FROM usuario u 
        INNER JOIN detalle_usuario du on u.id_Cargo=du.id_Cargo ");
        $consulta->execute();
        return $consulta;
    }
    /*Editar login -> solo algunos datos */
    public function ModificarLogin()
    {
        $consulta = $this->conexion->prepare("UPDATE usuario set 	
        usuario = ?
        pass = ?
        id_Cargo =?
        correo=?
        telefono=?
        Direccion=?
        where id_usuario=?");
        $consulta->execute(array($this->usuario, $this->pass, $this->id_Cargo, $this->correo, $this->telefono, $this->Direccion, $this->id_usuario));
        return $consulta;
    }

    /*Activar Login */
    public function ActivarLogin()
    {
        $consulta = $this->conexion->prepare("UPDATE usuario  set estado = 1 where id_usuario =? ");
        $consulta->execute(array($this->id_usuario));
        return $consulta;
    }
    /*Desactivar Login */
    public function DesactivarLogin()
    {
        $consulta = $this->conexion->prepare("UPDATE usuario  set estado = 0 where id_usuario =? ");
        $consulta->execute(array($this->id_usuario));
        return $consulta;
    }


    public function EditarCargo()
    {

        
    }
}
