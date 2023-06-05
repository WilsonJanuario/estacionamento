<?php
include '../dao/config.php'; 

    switch($_REQUEST["acao"]) {
        case 'cadastrar';
        $nome = $_POST["nome"];
        $cnpj = $_POST["cnpj"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        //$saldo = $_POST["saldo"];

        $sql = "INSERT INTO loja (nome, cnpj, email, telefone) VALUES ( '{$nome}',  '{$cnpj}', '{$email}',  '{$telefone}')";

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
            $nome = $_POST["nome"];
            $cnpj = $_POST["cnpj"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            //$saldo = $_POST["saldo"];

        $sql = "UPDATE loja SET
                nome='{$nome}',
                cnpj='{$cnpj}',
                email='{$email}',
                telefone='{$telefone}',
                saldo='{$saldo}'
            WHERE
                idLoja=".$_REQUEST["idLoja"];

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
             $sql = "DELETE FROM loja WHERE idLoja=".$_REQUEST["idLoja"]; 

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