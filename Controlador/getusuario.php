<?php

switch ($_GET['opcion']) {
    case 'ValidarLoginC':
        $usuario = htmlentities(addslashes($_POST["usuario"]));
        $pass = htmlentities(addslashes($_POST["pass"]));

        require_once 'controlusuario.php';
        $usuariocontrolador = new ControlUsuario;
        $usuariocontrolador->ValidarLoginC($usuario,$pass);
        break;


}
