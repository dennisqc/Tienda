<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Tienda</title>
</head>

<body>
    <?php
    include("header.php");
    ?>

    <h1>Lista de productos</h1>
    <a href="../Controlador/getproducto.php?opcion=editar&id=<?php echo $producto->id_producto  ?>">Nuevo producto</a>
    <section>
        <table class="table">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">editar </th>
                    <th scope="col">eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../Controlador/controlproducto.php';

                $arrayP = new ControlProducto;
                $arrayResultado = $arrayP->ListarProductosC();

                foreach ($arrayResultado as $producto) : ?>
                    <tr>
                        <td><?php echo $producto->producto    ?></td>
                        <td><?php echo $producto->precio    ?></td>
                        <td><?php echo $producto->cantidad    ?></td>
                        <td><?php echo $producto->categoria    ?></td>
                        <td><a href="../Controlador/getproducto.php?opcion=editar&id=<?php echo $producto->id_producto  ?>">editar</a></td>
                        <td><a href="../Controlador/getproducto.php?opcion=eliminar&id=<?php echo $producto->id_producto  ?>">eliminar</a></td>
                    </tr>
                <?php
                endforeach;   //ACABANDO EL BUCLE
                ?>
            </tbody>
        </table>
    </section>
</body>

</html>