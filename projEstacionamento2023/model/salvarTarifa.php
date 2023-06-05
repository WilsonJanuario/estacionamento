<?php
include '../dao/config.php'; 

    switch($_REQUEST["acao"]) {
        case 'cadastrar';
        $tarifa = $_POST["tarifa"];
        $datas = $_POST["datas"];
       
        

        $sql = "INSERT INTO tarifas (tarifa, datas) VALUES ( '{$tarifa}',  '{$datas}')";

        $res = $conexao->query($sql);

        if($res==true){
            print "<script>alert('cadastro realizado com sucesso');</script>";
            print "<script> location.href='?page=listar';</script>";            
        }else{
            print "<script>alert('cadastro não realizado com sucesso');</script>";
            print "<script> location.href='?page=listar';</script>";
        }
        break;

        case 'editar':
            $tarifa = $_POST["tarifa"];
            $datas = $_POST["datas"];
            
            
        $sql = "UPDATE tarifas SET
                tarifa='{$tarifa}',
                datas='{$datas}'
              
               
                WHERE
                id=".$_REQUEST["id"];
                $res = $conn->query($sql);

        

        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";
            print "<script> location.href='?page=listar';</script>";            
        }else{
            print "<script>alert('Não foi possível editar');</script>";
            print "<script> location.href='?page=listar';</script>";
        }

        break;

        case 'excluir':
             $sql = "DELETE FROM tarifas WHERE id=".$_REQUEST["id"]; 

             $res = $conn->query($sql);

             if($res==true){
                 print "<script>alert('Ecluido com sucesso');</script>";
                 print "<script> location.href='?page=listar';</script>";            
             }else{
                 print "<script>alert('Não foi possível excluir');</script>";
                 print "<script> location.href='?page=listar';</script>";
             }
     
             break;
    }