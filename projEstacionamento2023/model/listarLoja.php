<h5>Listar Lojas Conveniadas</h5>

<?php
include '../dao/config.php'; 

$sql = "SELECT * FROM loja";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>CNPJ</th>";
        print "<th>E-mail</th>";
        print "<th>Telefone</th>";
        print "<th>Saldo</th>";
       
        
        print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->idLoja."</td>";
        print  "<td>".$row->nome."</td>";
        print  "<td>".$row->cnpj."</td>";
        print  "<td>".$row->email."</td>";
        print  "<td>".$row->telefone."</td>";
        print  "<td>".$row->saldo."</td>";
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