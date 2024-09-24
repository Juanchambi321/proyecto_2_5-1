<?php
$conn = mysqli_connect("localhost","root","","playstick");
mysqli_set_charset($conn, "utf8mb4");
?>
<?php


  $id = $_GET['id'];
  $sql = "DELETE FROM comentario WHERE id = '$id'";
  if(mysqli_query($conn,$sql)){
  header("Location: index.php");

  }else{
      echo "ERRO ao tentar deletar";
  }

?>