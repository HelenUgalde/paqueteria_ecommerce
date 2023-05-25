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
  <h2>Actualizar inf</h2>
  <label for="paqueteria">Asignar Gu&iacute;a:</label>
      <select id="paqueteria" name="paqueteria">
        <option value="fedex">Gu&iacute;a de env&iacute;o</option>
        <option value="dhl">Gu&iacute;a devoluci&oacute;n</option>
        <option value="estafeta">Gu&iacute;a seguimiento</option>
        <option value="PaqueteExpress">Gu&iacute;a entrega</option>
      </select><br><br>
  <label for="paqueteria">Asignar Paqueter&iacute;a:</label>
      <select id="paqueteria" name="paqueteria">
        <option value="fedex">FEDEX</option>
        <option value="dhl">DCL</option>
        <option value="estafeta">ESTAFETA</option>
        <option value="PaqueteExpress">PaqueteExpress</option>
      </select><br><br>
      <label for="fecha">Fecha de Env&iacute;o:</label>
      <input type="date" id="fecha" name="fecha"><br><br>
      <button>Guardar</button>
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