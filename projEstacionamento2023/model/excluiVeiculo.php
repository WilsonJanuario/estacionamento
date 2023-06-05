<?php

$sql = "DELETE FROM horarios WHERE id=".$_REQUEST["id"]; 

$res = $conn->query($sql);

if($res==true){
    print "<script>alert('Ecluido com sucesso');</script>";
    print "<script> location.href='?page=listar';</script>";            
}else{
    print "<script>alert('Não foi possível excluir');</script>";
    print "<script> location.href='?page=listar';</script>";
}
?>