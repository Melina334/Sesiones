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
<div>

<?php
require "conexion.php";

$productoBuscado=$_POST['id'];

echo "Usted busco el producto " .$productoBuscado;

$sql="select * from Productos where id=$productoBuscado;";

$busqueda=mysqli_query($conexion, $sql);

if(mysqli_affected_rows($conexion)>0){
    ?>


    <table>
        <tr>
        <th>ID</th>
        <th>Descripcion</th>
        <th>precio</th>
  </tr>
    <?php
       while($registro=mysqli_fetch_assoc($busqueda)){
        ?>

<form>

    id: <?php echo $registro['id']; ?><br>
    
</form>


       <tr>
        <td><?php echo $registro ['id']; ?></td>
        <td><?php echo $registro ['descripcion']; ?></td>
        <td><?php echo $registro ['precio']; ?></td>
       </tr>


  <?php      
       }

    ?>
          
  </table>




<?php

    }else{
      echo "No se encontro ningun producto con el id ".$productoBuscado;
  }
?>
</div>
</body>
</html>