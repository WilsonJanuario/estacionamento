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

    <header>
       
    </header>



    <h2> Cadastro do carro</h2>
    <hr>

    <form action = "../model/cadastrarEntrada.php"    method="POST" >

        <div class="container mt-6">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Placa</label>
                    <input type="text" name="placa" class="form-control" id="placa" placeholder="placa" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Cor</label>
                    <input type="text" class="form-control" name = "cor" id="cor" placeholder="Cor">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Modelo</label>
                    <input type="text" class="form-control" name = "modelo" id="modelo" placeholder="Modelo">
                </div>
            </div>


            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="">Marca</label>
                    <input type="text" class="form-control" name = "marca" id="marca" placeholder="marca">
                </div>


                


            </div>
           

            


                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="Cadastrar"></label>
                    <div class="col-md-8">
                        <button id="cadastrar" name="cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                        <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                    </div>
                </div>
    </form>








    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

</body>

</html>