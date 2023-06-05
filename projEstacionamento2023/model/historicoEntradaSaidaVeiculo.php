
<?php
   include_once '../dao/config.php'; 

   $sql = "SELECT * FROM horarios where saida is not null";
   
   $res = $conn->query($sql);
   
   $qtd = $res->num_rows;
   
   if($qtd > 0){
       print "<table class='table table-hover table-striped table-bordered'>";
       print "<tr>";
           //print "<th>ID</th>";
           print "<th>Placa</th>";
           print "<th>Cor</th>";
           print "<th>Modelo</th>";
           print "<th>Marca</th>";
           print "<th>Entrada</th>";
           print "<th>Saída</th>";
           print "<th>Ações</th>";
           
           print "</tr>";
       while($row = $res->fetch_object()){
           print "<tr>";
           //print "<td>".$row->id."</td>";
           print  "<td>".$row->placa."</td>";
           print  "<td>".$row->cor."</td>";
           print  "<td>".$row->modelo."</td>";
           print  "<td>".$row->marca."</td>";
           $entradas = $row->entrada;
           $entrada = (new DateTime($entradas))->format('d/m/Y H:i:s');
                      print  "<td>".$entrada."</td>";
           
           //print  "<td>".$row->entrada."</td>";
           $saidas = $row->saida;
           $saida = (new DateTime($saidas))->format('d/m/Y H:i:s');
                      print  "<td>".$saida."</td>";
           
           //print  "<td>".$row->saida."</td>";
           print "<td>
                       
                        
                       <button onclick=\"if(confirm ('Tem certeza que deseja excluir?')){
                           location.href='?page=salvar&acao=excluir&id=".$row->id."';
                       }else{false}\"
                       class='btn btn-danger'>Excluir</button>

                       
                       <button onclick=\"if(confirm ('Ticket do veículo!!')){
                        location.href='?page=salvar&acao=ticketConsulta&id=".$row->id."';
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
