<?php 
//require 'DATABASE.PHP';
$conn =mysqli_connect('localhost','root','','porogramacion_web');
?><h1>Inventario</h1>
          <table>
           
              <tr>
                <th>No.</th>
                <th>Nombre del producto</th>
                <th>C&oacute;digo del Producto</th>
                <th>Categor&iacute;a</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Proveedor</th>
              </tr>

              <?php 
                  $sql="SELECT * from inventario";
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
                        <td><?php echo $mostrar[6]?></td>
                        
                    
                        
                    </tr>
                    <?php 
                  }
                  ?>
            
              
              
            
          </table>
          </body>
                </html>