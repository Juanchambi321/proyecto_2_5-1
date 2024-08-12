<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="http://localhost/PlayTacks/css/boss.css" crossorigin="">
      <link rel="stylesheet" href="http://localhost/PlayTacks/PlayTacks/css/inicio_sesion2.css">

      <title>Inicio Sesion</title>
   </head>
   <body>
      
      <div class="login">
         <img src="../img/fondo-oscuro-abstracto_1048-1920.avif" alt="image" class="login__bg">

         <form method="POST" action="" class="login__form">
            <h1 class="login__title">Iniciar Sesion</h1>
            <?php
            include "conexion.php";
            include "controlador.php";
            ?>
            <div class="login__inputs">
               <div class="login__box">
                  <input type="email" placeholder="Correo Electronico" required class="login__input" name="email">
                  <i class="ri-mail-fill"></i>
               </div>

               <div class="login__box">
                  <input type="password" placeholder="Contraseña" required class="login__input" name="password">
                  <i class="ri-lock-2-fill"></i>
               </div>
            </div>

            <div class="login__check">
               <div class="login__check-box">
                  <input type="checkbox" class="login__check-input" id="user-check">
                  <label for="user-check" class="login__check-label">Recordar siempre</label>
               </div>

               <a href="#" class="login__forgot">Olvidaste la contraseña?</a>
            </div>

            <input name="boton" class="nose" type="submit" value="INICIAR SESION">

            <div class="login__register">
               Don't have an account? <a href="registro.html">Registrarse</a><br>
               <a href ="terminos_condiciones.html">Terminos y Condiciones</a>
            </div>
         </form>
      </div>
   </body>
</html>