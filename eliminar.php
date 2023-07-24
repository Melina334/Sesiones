<?php

$id=$_POST['id'];
$descripcion=$_POST['desc'];
$precio=$_POST['precio'];

require "conexion.php";

$sql="delete from Productos where id=$id;";

mysqli_query($conexion, $sql);

if(mysqli_affected_rows($conexion)>0){
  echo " se guardaron los cambios";
  
} else {
  echo " no se guardaron los cambios";
}

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css" />
    <title>Document</title>
</head>
<body>
<a href="admin.php" class=bt>Volver</a>
</body>
</html>