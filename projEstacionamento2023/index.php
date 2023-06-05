<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8" />
        <title>Estacionamento</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script  src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Carter+One" />
        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/acesso.js"></script>
    </head>
    <body>
                      
       

        <div id="login">
            <h3 class="text-center text-white  pt-5">Login form</h3>
            <div class="container">
    
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
    
    
                            <form id= "formularioLogin" class="form">
    
                                <div class="row justify-content-center align-items-center ">
    
                                    <img src="imgs/car_icon_145832.png">
                                    <h2>Estacione Aqui!</h2>
    
                                </div>
    
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <label class="text-info">Email:</label><br>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-info">Senha:</label><br>
                                    <input type="password" name="senha" id="senha" class="form-control">
                                </div>
                          
    
                                <button id="btnEntrar">Entrar</button>
    
                                        <div id="mensagem"></div>
                              
    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>

