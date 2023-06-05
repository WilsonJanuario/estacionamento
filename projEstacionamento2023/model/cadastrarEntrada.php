<?php
 date_default_timezone_set('America/Sao_Paulo');
include "../dao/config.php";
    $entrada =  date("Y-m-d H:i:s");
	$placa =  $_POST["placa"];
    $cor = $_POST['cor'];
    $modelo =  $_POST['modelo'];
	$marca =  $_POST['marca'];
	

	
	$query = "INSERT INTO horarios (entrada, placa, cor, modelo, marca) 
        VALUES ('$entrada','$placa','$cor', '$modelo', '$marca')";
	mysqli_query($conn,$query) or die(mysqli_error($conn));
    header("Location: ../view/telaUsuario.php");
	
?>
	<p class="text-center">
        <a class="btn btn-lg btn-block btn-default" id="logOutButton">
    </p>


   // SELECT placa, cor, modelo, marca, DATE_FORMAT(entrada, '%d/%m/%y %H:%i:s) AS data_modificada, entrada  FROM horarios where saida is null";