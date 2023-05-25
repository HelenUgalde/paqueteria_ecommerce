<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/carrucel.css') }}" />
    <script src="https://kit.fontawesome.com/f9989d90a2.js" crossorigin="anonymous"></script>

    <title>Home</title>
</head>
<?php
include 'ESTANDAR/header.blade.php'
?>

<body>
    <div class="container">
        <div class="column">
          <img src="IMG/login.png" style="width: 200px; height: 200px;">
          <h2>Login</h2>
          <form action="PESTAÑAS.PHP">
            <label for="username">Usuario:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br><br>
        
            <button type="submit">Iniciar sesión</button>
          
          </form>
          <div class="underlay-photo"></div>
          <div class="underlay-black"></div>
        </div>
        <div class="column">
          <img src="IMG/home.jpg" alt="Imagen del bloque de contenido">
        </div>
      </div>   
<?php
include 'ESTANDAR/footer.blade.php';
?>