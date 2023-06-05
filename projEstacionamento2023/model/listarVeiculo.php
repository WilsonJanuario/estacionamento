
<?php
   include_once '../controller/config.php'; 

   $sql = "SELECT * FROM horarios";
   
   $res = $conn->query($sql);
   
   $qtd = $res->num_rows;
   
   if($qtd > 0){
       print "<table class='table table-hover table-striped table-bordered'>";
       print "<tr>";
           print "<th>ID</th>";
           print "<th>Placa</th>";
           print "<th>Cor</th>";
           print "<th>Modelo</th>";
           print "<th>Marca</th>";
           print "<th>Entrada</th>";
           print "<th>Ações</th>";
           
           print "</tr>";
       while($row = $res->fetch_object()){
           print "<tr>";
           print "<td>".$row->id."</td>";
           print  "<td>".$row->placa."</td>";
           print  "<td>".$row->cor."</td>";
           print  "<td>".$row->modelo."</td>";
           print  "<td>".$row->marca."</td>";
           print  "<td>".$row->entrada."</td>";
           print "<td>
                       <button onclick=\"location.href='?page=editar&id=".$row->id."';\"
                        class='btn btn-success'>Editar</button>
                        
                       <button onclick=\"if(confirm ('Tem certeza que deseja realizar a saída ?')){
                           location.href='?page=salvar&acao=saida&id=".$row->id."';
                       }else{false}\"
                       class='btn btn-primary'>Saída Veículo</button>

                       <button onclick=\"if(confirm ('Ticket do veículo!!')){
                        location.href='?page=salvar&acao=ticket&id=".$row->id."';
                    }else{false}\"
                    class='btn btn-warning'>Ticket</button>
   
                   </td>";
   
   
           print "</tr>";
       } 
       print "</table>";
   
       }else{
           print "<p class= 'alert alert-danger'>Não foi encontrado resultados!</p>";
       }
   
   
   
?>
