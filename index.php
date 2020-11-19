<?php

require_once 'Vista/login.php';
$login = new Login;
$login -> mostrarLogin();
/*

require_once 'Controlador/controlproducto.php';

$aeamano = new ControlProducto;
$aeamano -> ListarProductosC();


require_once 'Controlador/controlproducto.php';

$aeamano = new ControlProducto;
print_r($aeamano->ActualizarProductoC("Core i5", "200", "1000",1));*/
?>