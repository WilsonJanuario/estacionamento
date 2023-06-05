<?php
    include_once '../dao/conexao.php';
    //requere("conexao.php");

    if(isset($_POST["email"]) && isset($_POST["senha"]) && $conexao != null){
        $query = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $query->execute(array($_POST["email"], md5($_POST["senha"])));

        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION["usuario"] = array($user["nome"], $user["adm"]);

            echo json_encode(array("erro" => 0));
        }else{
            //não achou o usuario
            echo json_encode(array("erro" => 1, "mensagem" => "Email ou senha estão incorretos!"));
        }
    }else{
        //sem post ou sem conexão
        echo json_encode(array("erro" => 1, "mensagem" => "Erro no servidor!!"));
    }
?>