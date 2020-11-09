<?php


switch ($_GET['opcion']) {
    case 'editar':

        $id_producto = $_GET['id'];


        header("Location: ../Vista/formProductoEditar.php?id=$id_producto");
        break;
        /* 
        if (isset($_GET['id'])) {
            
            $producto = new producto();
            $producto ->ListarProducto($_GET['id']);

            require_once "../Vista/formProductoRegistar.php";
         */







    case 'eliminar':

        // recibi el id del formulario lo podia mandar a control producto pero decidi mandarlo directo
        //una vez acabado lo redirigi al al form productos , aun no inclui mensajes
        $id_producto = $_GET['id'];
        require_once '../Modelo/producto.php';
        $eliminar = new producto;
        $eliminar->EliminarProducto($id_producto);
        header("Location: ../vista/formproductos.php");




        break;

    case 'guardar':
        require_once '../Modelo/producto.php';
        // require_once 'controlproducto.php';
        $producto = new Producto;
        $producto->producto = $_POST['producto'];

        $producto->cantidad = $_POST['cantidad'];
        $producto->precio = $_POST['precio'];
        $producto->id_producto = $_POST['id'];
        // echo "$producto->idproducto";
        
        $producto->id_producto > 0 ? $producto->ActualizarProducto() :$producto->Nuevoproducto();
        //  $producto = new ControlProducto;


        header("Location: ../vista/formproductos.php");











        break;
}
