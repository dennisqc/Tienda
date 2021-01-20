<?php
require '../Modelo/usuario.php';

class ControlUsuario
{

    private $model;

    public function __construct()
    {
        $this->model = new usuario();
    }


    public function ValidarLoginC($usuario, $pass)
    {
        try {
            // $resultadoRespuesta = $objetoUsuario -> verificarUsuarioM($usuario, $clave);
            $validar = new usuario;
            $resultado = $validar->ValidarLogin();
            // o temabien se puede usar esto : $resultado = $this->model->ValidarLogin(); ya que la variable model se le dio el valor al incio
            //esto lo puse en modelo usuariopor las variables 
            //$resultado->bindValue(":usuario",$this->usuario);
            //  $resultado->execute(array($this->usuario, $this->pass));
            //$usuario = htmlentities(addslashes("supremotix"));
            //$pass = htmlentities(addslashes("12345678"));
            //   $usuario = htmlentities(addslashes($_POST["usuario"]));
            //   $pass = htmlentities(addslashes($_POST["pass"]));
            $resultado->bindValue(":usuario", $usuario);
            $resultado->bindValue(":pass", $pass);
            $resultado->execute();
            //  return $resultado->fetchAll(PDO::FETCH_OBJ);
            $numero_registro = $resultado->rowCount();
            if ($numero_registro != 0) {
                // echo "holi";
                header("Location: ../Vista/formproductos.php");
            } else {
                echo "fuera chupapinga ";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function ListarLoginC()
    {
        $Usuario = new usuario();
        $resultado = $Usuario->ListarLoginM();
        $arrayResultado = $resultado->fetchAll(pdo::FETCH_OBJ);
        return $arrayResultado;
    }
}
