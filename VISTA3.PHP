<!DOCTYPE html>
<html>
<head>
  <link href="css/VISTA.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">
  <link href="css/detalle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<title>Vista</title>
</head>
<?php
include 'ESTANDAR/header.blade.php'
?>
<body>
<div class="info-rectangle">
  <h2>No de Orden</h2>
  <p>Contenido del rectángulo de información 1.</p>
</div>

<div class="info-rectangle">
  <h2>Detalle de la Orden</h2>
  <table>
            <tr>
              <th>Producto</th>
              <th>Cantidad</th>
            </tr>
            <tr>
              <td>traer de la bd</td>
              <td>traer de la bd</td>
            </tr>
          </table> 
</div>

<div class="info-rectangle">
  <h2>Direccion</h2>
  <p>Contenido del rectángulo de información 3.</p>
</div>

<div class="info-rectangle">
  <h2>Inf ASIGNADA</h2>
  <label for="paqueteria">Gu&iacute;a:</label>
  <label for="paqueteria">guia ASIGNADA LLAMAR</label><br>
  <label for="paqueteria">Paqueter&iacute;a:</label>
  <label for="paqueteria">paqueteria ASIGNADA LLAMAR</label><br>
  <label for="fecha">Fecha de Env&iacute;o:</label>
  <label for="envio">fecha ASIGNADA LLAMAR</label><br>
  <label for="fecha">Fecha de Entrega:</label>
  <label for="envio">fecha ASIGNADA LLAMAR</label><br><br>
</div>
<div class="info-rectangle">
  <h2>Devoluci&oacute;n en proceso</h2>
  <select>
                      <option>En proceso</option>
                      <option>aprobada</option>
                      <option>negada</option>
                    </select><br>
  <label for="comment">Comentario:</label><br>
  <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
  <br>
  <div>
<a href="PESTAÑAS.PHP" class="btn btn-primary">                    
<button id="ver" class="action-button">
Guardar
</button></a>
</div>
  </div>


<div>
<a href="PESTAÑAS.PHP" class="btn btn-primary">                    
<button id="ver" class="action-button">
Regresar
</button></a>
</div>
<?php
include 'ESTANDAR/footer.blade.php'
?>