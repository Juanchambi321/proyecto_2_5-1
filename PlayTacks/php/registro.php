<?php
include("coneccion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1) {
        $name = trim($_POST['nombre']);
        $usuario = trim($_POST['usuario']);
        $email = trim($_POST['correo']);
        $password = trim($_POST['password']);
        
        $consulta = "INSERT INTO Usuarios (Nombre, Usuario, Gmail, Contraseña) VALUES ('$name', '$usuario', '$email', '$password')";
        $resultado = mysqli_query($conex, $consulta);
        

    }
}
?>
