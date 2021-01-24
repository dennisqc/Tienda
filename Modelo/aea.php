<?php 
/*
require_once 'usuario.php';

$usuario = new usuario();
print_r($usuario->ValidarLogin());

require_once 'producto.php';
$producto= new producto();
print_r($producto->ActualizarProducto());

require_once 'producto.php';
$producto= new producto();
print_r($producto->ListarCategoria());


require_once 'usuario.php';

$usuario = new usuario();
print_r($usuario->ListarLoginM());


 */

 require_once '../Modelo/usuario.php';
$cambio = new usuario();

$cambio->ActivarLoginM(1);
?>