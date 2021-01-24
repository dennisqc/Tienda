<?php

switch ($_GET['opcion']) {
    case 'ValidarLoginC':
        $usuario = htmlentities(addslashes($_POST["usuario"]));
        $pass = htmlentities(addslashes($_POST["pass"]));

        require_once 'controlusuario.php';
        $usuariocontrolador = new ControlUsuario;
        $usuariocontrolador->ValidarLoginC($usuario, $pass);
        break;


    case 'editar':
        # code...


    case 'estado':

        $idusuario = $_POST['id_usuario'];
        $estado = $_POST['estado'];
        // echo $usuario . "<br>";
        // echo $estado;

        if ($estado == 1) {
            require_once '../Modelo/usuario.php';
            $cambio = new usuario();
            $cambio->DesactivarLoginM($_POST['id_usuario']);
            header("Location: ../vista/ListarUsuarios.php");
        } 
        if($estado == 0) {
            require_once '../Modelo/usuario.php';
            $cambio = new usuario();
            $cambio->ActivarLoginM($_POST['id_usuario']);
            header("Location: ../vista/ListarUsuarios.php");
        }
        break;
}
