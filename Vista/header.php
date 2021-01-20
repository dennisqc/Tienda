<?php
?>
<header>
    <div class="header">
        <a href="Principal.php">
            <h1>Tienda</h1>
        </a>
        <div class="header2">
            <p>
                <?php date_default_timezone_set("America/Lima");
                echo date("j") . " / " . date("n") . " / " . date("Y");
                ?>
            </p>
        </div>
    </div>
    <nav>
        <a href="ListarUsarios.php">Listar Usuarios</a>
        <a href="formproductos.php">Listar Productos</a>
        <a href="">Listar categorias</a>
        <a href="">Proforma</a>
    </nav>
</header>