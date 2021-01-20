<?php require_once '../Controlador/controlproducto.php';
        $categoria = new ControlProducto;
        $ListarCategoria = $categoria->ListarCategoriaC();
        foreach ($ListarCategoria as $tipo) :     ?>

                <?php echo $tipo->id_categoria ?>
                    <?php echo $tipo->categoria  ?>
              

            </select>
        <?php
        endforeach;   //ACABANDO EL BUCLE
        ?>