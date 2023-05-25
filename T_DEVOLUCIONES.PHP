<?php 
//require 'DATABASE.PHP';
$conn =mysqli_connect('localhost','root','','porogramacion_web');
?>
<h1>Devoluciones</h1>
          <table>
            
              <tr>
                <th>No.</th>
                <th>N&uacute;mero de orden</th>
                <th>Fecha de env&iacute;o</th>
                <th>Compa&nacute;ia de env&iacute;o</th>
                <th>Costo de env&iacute;o</th>
                
                <th>Estado de la Devoluci&iacute;n </th>
                
              </tr>
              <?php 
                  $sql="SELECT * from devoluciones";
                  $resultado=mysqli_query($conn,$sql);

                  while($mostrar =mysqli_fetch_array($resultado))
                  {
                    ?>
                    <tr>
                        <td><?php echo $mostrar[0]?></td>
                        <td><?php echo $mostrar[1]?></td>
                        <td><?php echo $mostrar[2]?></td>
                        <td><?php echo $mostrar[3]?></td>
                        <td><?php echo $mostrar[4]?></td>
                        <td><?php echo $mostrar[5]?></td>
                        
                    
                        
                    </tr>
                    <?php 
                  }
                  ?>
            
              
                </td>
                  
              </td>
              </tr>
            
          </table>
          </body>
                </html>
