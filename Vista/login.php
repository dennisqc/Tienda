<?php


class Login
{
    public function mostrarLogin()
    {

?>



        <!DOCTYPE html>

        <html lang="en">

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Tienda</title>
            <link rel="stylesheet" href="css/styles-login.css" />
        </head>

        <body>
            <div class="login-box">
                <!--../Controlador/controlusuario.php?option=ValidarLoginC-->
                <img class="avatar" src="imagenes/Captura.jpg" alt="logo" />
                <h1>Registrate</h1>
                <form action="Controlador/getusuario.php?opcion=ValidarLoginC" method="POST">
                    <!--usuario-->
                    <label for="Username">Usuario</label>
                    <input type="text" name="usuario" placeholder="Usuario" required id="" />
                    <!--Contraseña-->
                    <label for="password">Contraseña</label>
                    <input type="password" name="pass" placeholder="Contraseña" id="">
                    <input type="submit" name="enviar" value="Log in">
                    <a href="">Perdiste tu Contraseña?</a><br>
                    <a href="">No tienes una cuenta</a>
                </form>
            </div>
        </body>
        </html>
<?php
    }  //FIN DE LA FUNCION MOSTRARLOGIN
}   //FIN DE LA CLASE
