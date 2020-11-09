<?php




require_once '../Controlador/controlproducto.php';




$arrayP = new ControlProducto;
print_r($arrayResultado = $arrayP->ListarProductosC());
//$arrayResultado = $arrayP->ListarProductoC(2);

 //echo $arrayResultado->producto;
    

