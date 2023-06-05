<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("../dao/conexao.php");

        $adm  = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
    }else{
        echo "<script>window.location = 'index.html'</script>";
    }
?>
<html>
    <head>
        <title>Dashboard - <?php echo $nome; ?></title>
    </head>
    <body>
        <?php if($adm){
            echo "sou adm";
            header("Location: ../view/telaAdm.php");       
            
        }else{
            
            echo "não sou adm";
            header("Location: ../view/telaUsuario.php");

            
        


        
                            
        
        }?> 
        
       
    </body>
</html>