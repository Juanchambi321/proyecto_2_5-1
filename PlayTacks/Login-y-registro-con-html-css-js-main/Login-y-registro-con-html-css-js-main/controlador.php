<?php
    if(!empty($_POST["boton"])){
        if (empty($_POST["email"]) and empty($_POST["password"])) {
            echo "<div class='alert alert-danger'>  los campos estan vacios</div>";
        } else {
            $Gmail=$_POST["email"];
            $Contraseña=$_POST["password"];
            
            $sql =$conexion->query("SELECT * FROM usuarios where Gmail = '$Gmail' and Contraseña = '$Contraseña' ");
            echo $sql;
        
            if ($datos=$sql->fetch_object()) {
                header("Location:inicio.php");
                
            } else {
                echo "<div class='alert alert-danger'>  ingresa bien rus datos!</div>";

            }
            

        }

        
    }
?>