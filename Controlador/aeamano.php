<?php

$usuario = htmlentities(addslashes($_POST["usuario"]));
$pass = htmlentities(addslashes($_POST["pass"]));


echo "usuario " . $usuario . "pass " . $pass;
