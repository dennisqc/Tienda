<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php require_once '../Controlador/controlproducto.php';

    $arrayP = new ControlProducto;
    $res = $arrayP->ListarProductoC($_GET['id']);

    ?>


    <form action="../Controlador/getproducto.php?opcion=guardar" method="POST">


        <input type="hidden" name="id" value="<?php echo $res->id_producto ?>">

        <label for="producto">Producto</label>
        <input type="text" name="producto" value="<?php echo $res->producto;  ?>" id="">
        <label for="Cantidad">Cantidad</label>
        <input type="text" name="cantidad" value="<?php echo $res->cantidad;  ?>" id="">
        <label for="Precio">Precio</label>
        <input type="text" name="precio" value="<?php echo $res->precio;  ?>" id="">
        <label for="Tipo">Tipo de Producto</label>




        <select name="categoria" id="">
            <option value="">---Elegir Categoria ----</option>
            <?php require_once '../Controlador/controlproducto.php';
            $array = new ControlProducto;
            $ListarCategoria = $array->ListarCategoriaC();
            foreach ($ListarCategoria as $tipo) :     ?>

                <option value="<?php echo $tipo->id_categoria ?>">
                    <?php echo $tipo->categoria  ?>
                </option>
            <?php
            endforeach;   //ACABANDO EL BUCLE
            ?>
        </select>

        <input type="submit" name="enviar" value="Guardar">
    </form>

</body>

</html>