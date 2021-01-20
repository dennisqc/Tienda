<?php

/*

require_once 'controlusuario.php';
$aeamano =new ControlUsuario();
print_r($aeamano->ValidarLoginC($usuario,$pass));



require_once '../Controlador/controlproducto.php';

$aeamano = new ControlProducto;
print_r($aeamano->ActualizarProductoC("Core i5", "200", "1000",1));



*/

require_once 'controlusuario.php';
$aeamano = new ControlUsuario;
print_r($aeamano->ListarLoginC());
