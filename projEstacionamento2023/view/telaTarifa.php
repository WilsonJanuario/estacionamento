
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tarifas</title>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=nova">Cadastrar Tarifas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Tarifas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=voltar">ADM</a>
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
        case 'nova':
            include("novaTarifa.php");
            break;

            case 'listar':
                include("../model/listarTarifa.php");
                break;

            

             case 'editar':
                  include("editarTarifa.php");
                  break;  

             case 'voltar':
                    header("Location: ../view/telaUsuarioAdm.php");                   
                    break;  

                  case 'salvar':
                    include("../model/salvarTarifa.php");
                    break;  
  

              
        
        default:
            print "Bem vidos!!<H5>AQUI USUÁRIO COMUM<H5>";
            
    }

 ?>  
</div>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>