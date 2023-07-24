<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <?php 

  require "conexion.php";

  $sql="select * from Productos;";

  $resultado=mysqli_query($conexion, $sql);

  if(mysqli_affected_rows($conexion)>0){
?>
<div>
    <table>
        <tr>
        <th>ID</th>
        <th>Descripcion</th>
        <th>precio</th>
  </tr>
    <?php
       while($registro=mysqli_fetch_assoc($resultado)){
        ?>

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
}
else{
    echo "No hay datos en la tabla productos";
}

?>

</div>

</body>
</html>