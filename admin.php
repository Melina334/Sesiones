<?php
session_start();
if(isset($_SESSION['nombre'])&& $_SESSION['rolUsuario']==1){
$nombreUsuario=$_SESSION['usuario'];
$nombreApellido=$_SESSION['nombre'];
} else {
    echo "Acceso no autoridado debe iniciar sesion";
    exit();
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
<div class=inline-buttons>
     <a href="loggout.php"><button class=out>Cerrar sesion</button></a>
      
   <?php
    echo "sesion iniciada como ".$nombreUsuario;
   ?>
     </div>
     <div>
       <h1>Bienvenido a la pagina de administrador</h1>
       <?php
      echo "Bienvenido ".$nombreApellido." !!!";

    ?>
   
    
      <br><br> <a href="altas.php" class="bt" >Alta productos</a>
       <a href="mostrar.php" class="bt">Mostrar</a><br><br>
    <form action= "buscar.php" method=post>
      Producto a buscar<input type=number name=id required>
        <input type=submit value="Buscar por id"><br>
</from>
   <div> <br>  


<a href="verComentarios.php" class="bt" >Ver comentarios</a>

</body>
</html>