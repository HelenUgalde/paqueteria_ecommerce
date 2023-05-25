<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión</title>
</head>
<body>
    
<?php 
    $db_host="localhost";//direccion del servidor
    $db_nombre="porogramacion_web";
    $db_usuario="root";
    $db_contra="";

    $conn =mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    //consulta
    $query="SELECT * FROM orden_sin_envio";
    $resultado =mysqli_query($conn, $query);
    $row =mysqli_fetch_row($resultado);//agreglo que guarda la funcion
    echo "<td>".$row[0] . " " ."</td>";
    echo $row[1] . " ";
    echo $row[2] . " ";
    
    echo "<br>";
    //Segundo registro
    $row =mysqli_fetch_row($resultado);//agreglo que guarda la funcion
    echo "<td>".$row[0] . " " ."</td>";
    echo $row[1] . " ";
    echo $row[2] . " ";
    
?>
</body>
</html>