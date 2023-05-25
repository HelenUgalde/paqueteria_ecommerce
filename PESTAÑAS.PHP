

<!DOCTYPE html>
<html>
<head>
  <link href="css/styles1_p.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<title>Paqueteria</title>
</head>
<style>
    .cancel-button {
    display: inline-block;
    background-color: #014513;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    text-align: center;
    cursor: pointer;
  }
  .detalle-button,  .actua-button {
    display: inline-block;
    background-color: #014513;
    border: 70%;
    text-align: center;
    cursor: pointer;
    width: 80px;
    height: 25px;
  }
  .cancel-icon {
    line-height: 20px;
    color: #fff;
    font-weight: bold;
    font-size: 20px;
  }
</style>
<?php
include 'ESTANDAR/header.blade.php'
?>
<body style="text-align: center;">

   

<div class="tabs">
    <div class="tab-container">
    <div id="tab4" class="tab"> 
        <a href="#tab4">Inventario</a>
        <div class="tab-content">
        <?php 
        include 'T_INVENTARIOS.PHP'
        ?>
        </div>
      </div>
      <div id="tab3" class="tab"> 
        <a href="#tab3">Devoluciones</a>
        <div class="tab-content">
        <?php 
        include 'T_DEVOLUCIONES.PHP'
        ?>
        </div>
      </div> 
      <div id="tab2" class="tab">
        <a href="#tab2">Orden sin envio
        </a>
        <div class="tab-content">
          <?php
            include 'T_COMSFD_ENVIO.PHP'
            ?>
        </div>
      </div> 
      <div id="tab1" class="tab">
        <a href="#tab1">Orden en cancelacion</a>
        <?php require 'DATABASE.PHP';?>
        <div class="tab-content">
            <?php
            include 'T_OrdSinENVIO.php'
            ?>
        </div> 
      </div> 
    </div>
  </div>
  <?php
  include 'ESTANDAR/footer.blade.php'
  ?>