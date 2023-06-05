<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>ESTACIONAMENTO</title>
<?php include ("../dao/conexao.php");
      //include ("proj/config.php");?>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="proj/index11111111.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=usuarios">Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=tarifas">Tarifas</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=loja">Loja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=estacionamento">Estacionamento</a>
        </li>

       
        
        
 
      
        
        
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
        include("../dao/conexao.php");
    switch (@$_REQUEST["page"]) {
       
             case 'tarifas':
                header("Location: telaTarifa.php");
                 break;  
             case 'usuarios':
                header("Location: tela_Usuario.php");
                break;  

                case 'loja':
                  header("Location: telaLoja.php");
                  break;  
                
            case 'estacionamento':                 
                  header("Location: telaUsuarioAdm.php");                  
                  break;  


          
        
        default:
            print "Bem vindos!! <H7>AQUI USUÁRIO ADM<H7>";
                      
    }

 ?>  
</div>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>