<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1) {
        $name = trim($_POST['nombre']);
        $usuario = trim($_POST['usuario']);
        $email = trim($_POST['correo']);
        $password = trim($_POST['password']);

        echo "dasdsadasdasdasdsadasda";
        
        $consulta = "INSERT INTO usuarios (Nombre, Usuario, Gmail, Contraseña) VALUES ('$name', '$usuario', '$email', '$password')";
        echo $consulta ;
        header("Location: http://localhost/proyecto_2_5-1-main/PlayTacks/clove/");
        $resultado = mysqli_query($conexion, $consulta);
        

    }
}
?>
