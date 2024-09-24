<?php 
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM usuarios";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
	    $email = $row['gmail'];
	    $contrasena = $row['contraseña'];
	    ?>
        <div>
			<hr>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php echo $id ?><br>
        		    <b>Email: </b> <?php echo $email ?><br>
        		    <b>contraseña: </b> <?php echo $contrasena ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>