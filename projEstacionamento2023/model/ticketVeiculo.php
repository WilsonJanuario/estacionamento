
<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro</title>
		<meta charset="utf-8">
	</head>
	</body>
		<form method="POST" action="">
			
			Lojas Conveniadas
            <select name="loja">
					<option>Selecione</option>
					<?php
						$query= "SELECT * FROM loja";
						$resultado_loja = mysqli_query($conn, $query);
						while($row_result_loja = mysqli_fetch_assoc($resultado_loja)){ ?>
							<option value="<?php echo $row_result_loja['nome']; ?>"><?php echo $row_result_loja['nome']; ?></option> <?php											  
						}		
						
                        
					?>
				</select><br><br>
				<input type="submit" value="Loja Conveniada">
                    </form>
				

<?php

  
  


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


$entradas = $row->entrada;
$entrada = (new DateTime($entradas))->format('d/m/Y H:i:s');

$saidas = date("Y-m-d H:i:s");
$saida = (new DateTime($saidas))->format('d/m/Y H:i:s');

$permanencia = ((strtotime($saidas) - strtotime($entradas))/3600).'<br>';
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
echo "Valora à pagar :R$ $valor";

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














