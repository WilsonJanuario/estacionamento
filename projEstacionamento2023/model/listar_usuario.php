<h5>Listar usuário</h5>

<?php
include_once '../dao/config.php'; 

$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Senha</th>";
        print "<th>ADM</th>";
        print "<th>Ações</th>";
        
        print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print  "<td>".$row->nome."</td>";
        print  "<td>".$row->email."</td>";
        $data_nascs = $row->data_nasc;
        $data_nasc = (new DateTime($data_nascs))->format('d/m/Y H:i:s');
                   print  "<td>".$data_nasc."</td>";
        
        //print  "<td>".$row->data_nasc."</td>";
        print  "<td>".$row->senha."</td>";
        print  "<td>".$row->adm."</td>";
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