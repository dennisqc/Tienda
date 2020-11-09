<?php

require_once '../Controlador/controlproducto.php';

$arrayP = new ControlProducto;
print_r( $arrayP->ListarProductoC(2));
