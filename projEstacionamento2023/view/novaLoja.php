<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->
    <title>Document</title>
</head>





<body>

    
    <h2> Cadastro de loja </h2>
    <hr>

    <div class="container">
        <form action = "?page=salvar" method="POST">
        <input type = "hidden" name = "acao" value = "cadastrar">
    <div class = "mb-3">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nome do Estabelecimento</label>
                    <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Nome do estabelecimento">
                </div>
                <div class="form-group col-md-4">
                    <label>CNPJ</label>
                    <input type="text"  name="cnpj" class="form-control" id="inputEmail4" placeholder="CNPJ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Email</label>
                    <input type="email"  name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Telefone</label>
                    <input type="text"  name="telefone"class="form-control" id="telefone" placeholder="Telefone">
                </div>
            </div>


           

            <div class="form-group">
                <label class="col-md-2 control-label" for="Cadastrar"></label>
                <div class="col-md-8">
                    <button id="cadastrar" name="cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                    <button id="cancelar" name="cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                </div>
            </div>

        </form>



        <!-- Button (Double) -->

    </div>







    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

</body>

</html>