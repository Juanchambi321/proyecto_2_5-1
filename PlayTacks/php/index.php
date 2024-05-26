<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <button type="button"><a href="../pages/inicio_sesion.html">Atras</a></button>
    </nav>
    <header>
    </header>
    <form method="post">
        <section class="form-register">
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre completo" required>
            <input class="controls" type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario" required>
            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
            <input class="controls" type="password" name="password" id="contrasena" placeholder="Ingrese su Contraseña" required>
            <input class="button"  type="submit" name="register" placeholder="resgistrar" required>
            <p><a href="../pages/inicio_sesion.html">¿Ya tengo Cuenta?</a></p>
        </section>
    </form>
    <?php
    include("registro.php");
    ?>
    
</body>
</html>