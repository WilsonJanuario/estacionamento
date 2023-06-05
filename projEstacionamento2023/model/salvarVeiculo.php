

<?php
include '../dao/config.php'; 
//include 'ticketVeiculo.php'; 




     switch($_REQUEST["acao"]) {
        // case 'cadastrar';
        // $nome = $_POST["nome"];
        // $email = $_POST["email"];
        // $senha = md5($_POST["senha"]);
        // $data_nasc = $_POST["data_nasc"];

        // $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ( '{$nome}',  '{$email}',  '{$senha}',  '{$data_nasc}')";

        // $res = $conexao->query($sql);

        // if($res==true){
        //     print "<script>alert('cadastro realizado com sucesso');</script>";
        //     print "<script> location.href='?page=listar';</script>";            
        // }else{
        //     print "<script>alert('cadastro não realizado com sucesso');</script>";
        //     print "<script> location.href='?page=listar';</script>";
        // }
        // break;

        case 'editar':
        $placa = $_POST["placa"];
        $cor = $_POST["cor"];
        $modelo = $_POST["modelo"];
        $marca = $_POST["marca"];

        $sql = "UPDATE horarios SET
                placa='{$placa}',
                cor='{$cor}',
                modelo='{$modelo}',
                marca='{$marca}'
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
             $sql = "DELETE FROM horarios WHERE id=".$_REQUEST["id"]; 

             $res = $conn->query($sql);

             if($res==true){
                 print "<script>alert('Saída realizada com sucesso');</script>";
                 print "<script> location.href='?page=listar';</script>";            
             }else{
                 print "<script>alert('Não foi possível realizar a saída ');</script>";
                 print "<script> location.href='?page=listar';</script>";
             }
     
             break;


             

             case 'ticket':
                include 'ticketVeiculo.php';
              // include 'teste.php';
             //  include 'editarTeste.php';
               
               
              
        
                break;

                case 'ticketConv':
                    // include 'ticketVeiculo.php';
                    include 'teste.php';
                  //  include 'editarTeste.php';
                    
                    
                   
             
                     break;

                case 'ticketConsulta':
                   
                    
                   include("ticketVeiculoConsulta.php");
                   break;


                   case 'saidaConv':
                   
                    
                    include("saidaVeiculoConv.php");
                    break;
 
                     

                    
                case 'saida':


                

$saida = date("Y-m-d H:i:s");

$sql = "UPDATE horarios SET

saida='{$saida}'
WHERE
id=".$_REQUEST["id"];

$res = $conn->query($sql);
    }