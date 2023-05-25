<?php 
//require 'DATABASE.PHP';
$conn =mysqli_connect('localhost','root','','porogramacion_web');
?>
<style>
.action-button {
  background-color: transparent;
  border: none;
  cursor: pointer;
  padding: 0;
  font-size: 24px;
}

.action-button i {
  color: #333;
}

.action-button:hover i {
  color: #777;
}
</style>
<h1>Orden Sin Fecha Entrega</h1>
            <table>
              
                <tr>
                  <th>ID</th>
                  <th>Número de orden</th>
                  <th>Destinatario</th>
                  <th>Estado</th>
                 
                </tr>
                <?php 
                  $sql="SELECT * from orden_sin_envio";
                  $resultado=mysqli_query($conn,$sql);

                  while($mostrar =mysqli_fetch_array($resultado))
                  {
                    ?>
                    <tr>
                        <td><?php echo $mostrar[0]?></td>
                        <td><?php echo $mostrar[1]?></td>
                        <td><?php echo $mostrar[2]?></td>
                        <td><?php echo $mostrar[3]?></td>
                        
                
                    
                        
                    </tr>
                    <?php 
                  }
                  ?>

                  
            </table>

            </body>
                </html>