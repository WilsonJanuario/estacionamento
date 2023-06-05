<h5>Listar Tarifas</h5>

<?php
include '../dao/config.php'; 

$sql = "SELECT * FROM tarifas";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
       // print "<th>ID</th>";
        print "<th>Tarifa</th>";
        print "<th>Datas Modificações</th>";
        //print "<Usuário</th>";
       // print "<th>Telefone</th>";
        //print "<th>Saldo</th>";
       
        
        print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
       // print "<td>".$row->id."</td>";
        print  "<td>".$row->tarifa."</td>";
        $datass = $row->datas;
        $datas = (new DateTime($datass))->format('d/m/Y H:i:s');
                   print  "<td>".$datas."</td>";
        
        //print  "<td>".$row->datas."</td>";
        //print  "<td>".$row->usuario."</td>";
        //print  "<td>".$row->telefone."</td>";
        //print  "<td>".$row->saldo."</td>";
        print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\"
                     class='btn btn-success'>Editar</button>
                     
                    <button onclick=\"if(confirm ('Tem certeza que deseja excluir?')){
                        location.href='?page=salvar&acao=excluir&id=".$row->id."';
                    }else{false}\"
                    class='btn btn-danger'>Excluir</button>

                </td>";


        print "</tr>";
    } 
    print "</table>";

    }else{
        print "<p class= 'alert alert-danger'>Não foi encontrado resultados!</p>";
    }





?>