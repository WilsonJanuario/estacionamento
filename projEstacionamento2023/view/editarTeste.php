<?php
 //date_default_timezone_set('America/Sao_Paulo');
include "../controller/config.php";
include "../controller/conexao.php";
//include "teste.php";
    //$entrada =  date("Y-m-d H:i:s");
	///$placa =  $_POST["placa"];
    //$cor = $_POST['cor'];
    //$modelo =  $_POST['modelo'];
	//$marca =  $_POST['marca'];
    $lojaConv = $_POST['lojaConv'];
	
    echo $lojaConv;
	
	$query = "INSERT INTO horarios (lojaConv) 
        VALUES ('$lojaConv')";
	//mysqli_query($conn,$query) or die(mysqli_error($conn));
   // header("Location: ../view/telaUsuario.php");
	

	

 

$sql = "SELECT * FROM tarifas";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){      
     
$row = $res->fetch_object();

//print  "$row->tarifa.<br>";    
 }


date_default_timezone_set('America/Sao_Paulo');

$sql = "SELECT * FROM horarios WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
// $qtd = $res->num_rows;

$row = $res->fetch_object();


$entrada = $row->entrada;
$saida = $row->saida;
$permanencia = ((strtotime($saida) - strtotime($entrada))/3600).'<br>';
echo "Horário entrada do veículo no estabelecimento :$entrada <br>";
echo "Horário saída do veículo no estabelecimento :$saida <br>";
$permanencia = intval($permanencia);
echo "Permanencia do veículo no estabelecimento :$permanencia horas <br>";

$sql = "SELECT tarifa FROM tarifas ORDER BY id DESC";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){      

$row = $res->fetch_object();

print  "O valor atual da tarifa é :$row->tarifa.<br>";    
}


				

$valorHora = $row->tarifa;
$valor = ($valorHora * $permanencia);
if($permanencia > 0){    

$valor = ($valorHora * ($permanencia * 0.5) + $valorHora);
echo "Valor à pagar :R$ $valor";

}else{
$valor = ($valorHora );
echo "Valora pago :R$ $valor";

}
//------------------------


// $saida = date("Y-m-d H:i:s");

// $sql = "UPDATE horarios SET

// saida='{$saida}'
// WHERE
// id=".$_REQUEST["id"];

// $res = $conn->query($sql);

// if($res==true){
// print "<script>alert('Ticket Emitido com sucesso');</script>";
// //print "<script> location.href='?page=saida';</script>";            
// }else{
//include('../controller/config.php');
// }











