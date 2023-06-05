<?php
include('teste.php');

$saida = date("Y-m-d H:i:s");

$sql = "UPDATE horarios SET

saida='{$saida}'
WHERE
id=".$_REQUEST["id"];

$res = $conn->query($sql);






$sql = "UPDATE loja SET

saldo='{$saldo}'
WHERE
idLoja=".$_REQUEST["idLoja"];

$res = $conn->query($sql);


if($res==true){
print "<script>alert('Saída registrada com sucesso');</script>";
print "<script> location.href='?page=saida';</script>";            
}else{
print "<script>alert('Saída não realizada');</script>";
print "<script> location.href='?page=saida';</script>";
}











