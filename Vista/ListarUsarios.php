<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>Listar Usuarios</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="tablas">
        <h1 class="titulo">Listar Usuarios</h1>
        <a class="nuevo" href="FormNuevoUsuario.php">Nuevo Usuario</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Distrito</th>
                    <th scope="col">Cargo</th>
                    <th colspan="2" scope="col">Opciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../Controlador/controlusuario.php';

                $arrayP = new ControlUsuario;
                $arrayResultado = $arrayP->ListarLoginC();
                foreach ($arrayResultado as $usuario) :
                ?>
                    <tr>
                        <td><?php echo  $usuario->usuario  ?></td>
                        <td><?php echo  $usuario->pass  ?></td>
                        <td><?php echo  $usuario->Apemat  ?></td>
                        <td><?php echo  $usuario->dni  ?></td>
                        <td><?php echo  $usuario->correo  ?></td>
                        <td><?php echo  $usuario->telefono  ?></td>
                        <td><?php echo  $usuario->Direccion  ?></td>
                        <td><?php echo  $usuario->cargo  ?></td>
                        <td>Estado <?php echo $usuario->id_cargo  ?> </td>
                        <td>Editar <?php echo $usuario->id_usuario  ?> </td>
                        <td>


                            <form action="" method="post">

                                <input type="hidden" name="id_usuario" id="" class="BtnAc" value="<?php echo $usuario->id_usuario ?>">
                                <input type="hidden" name="estado" id="" class="BtnNA" value="">

                                <?php if ($usuario->estado == 1) { ?>
                                    <input type="button" value="Activo">
                                <?php } else {
                                ?>
                                    <input type="button" value="No Activo">
                                <?php } ?>
                            </form>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>