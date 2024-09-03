<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="estilos.css">
    <style>
        body{
    background-image: url(bg4.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
    </style>
    
</head>

<body>
    
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <?php
                        include "conexion.php";
                        include "controlador.php";
                        ?>
                        <input type="email" name="email" placeholder="Correo Electronico">
                        <input type="password" name="password"placeholder="Contraseña">


                        <input name="boton" class="nose" type="submit" value="INICIAR SESION">
                    </form>

                    <!--Register-->
                    <form method="post" class="formulario__register">
                        
                        <h2>Regístrarse</h2>
                        <input type="text" name="nombre" placeholder="Nombre completo">
                        <input type="email" nmae="correo" placeholder="Correo Electronico">
                        <input type="text" name="usuario" placeholder="Usuario">
                        <input type="password" name="password" placeholder="Contraseña">
                        <input class="button" type="submit" name="register" value="registrarse" required>
                    </form>
                </div>
                <?php
                        include("registro.php");
                ?>
            </div>

        </main>

        <script src="script.js"></script>
</body>
</html>