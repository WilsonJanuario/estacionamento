
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>ESTACIONAMENTO-TELA-USUÁRIO</title>
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
          <a class="nav-link" href="?page=novoUsuario">Cadastrar usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
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
        case 'novoUsuario':
            include("novo_usuario.php");
            break;

            case 'listar':
                include("../model/listar_usuario.php");
                break;

            

             case 'editar':
                  include("editar_usuario.php");
                  break;  

             case 'voltar':
                    header("Location: telaUsuarioAdm.php");                   
                    break;  

                  case 'salvar':
                    include("../model/salvar_usuario.php");
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