
    
    <?php

  //   $rota = explode("/", $GET['url'] ?? 'index');

  // if (file_exists("view/{$rota[0]}.php")){
  //       include "{$rota[0]}.php";        
  //   }


  $routes = [
    "GET" => [
       "/"=> "view",
      "/view" => "cadastrarNovoVeiculo",
    ],

    "POST" => [
      "/view"=> "cadastrarNovoVeiculo",
    ],
  ];