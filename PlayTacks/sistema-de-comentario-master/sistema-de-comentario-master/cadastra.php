<?php
    $conn = mysqli_connect("localhost","root","","playstick");
    mysqli_set_charset($conn, "utf8mb4");
?>

<?php


    $nome = $_POST['nome_post'];
    $sms =  $_POST['sms_post'];
    $data = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `comentario`( `nome`, `mensagem`,`hora`) VALUES ('$nome','$sms','$data')";
    $query = mysqli_query($conn,$sql);
    if($query){
?>
            <div id ="formulario">
            <form  method="post" id="form" class="form">
            <div class="input">
            Sno seee:<label for="nome"></label> 
            <br>
            <input type="text" name="nome" id="nome">
            <br>
            Seu comentario: 
            <br>
            <textarea name="sms" id="sms" cols="30" rows="10"></textarea>
            <br>
            </div>
<?php
    }else{
        echo "<script>alert('Erro ao tentar Comentar')</script>";
    }
?>