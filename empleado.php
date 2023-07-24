<?php
session_start();
if(isset($_SESSION['nombre'])&& $_SESSION['rolUsuario']==2){
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
<?php
    echo "sesion iniciada como ".$nombreUsuario;
   ?>
        <a href="loggout.php"><button>Cerrar sesion</button></a>
</div>
  <div>

       <h1>Bienvenido a la pagina de empleado</h1>
       <?php
      echo "Bienvenido ".$nombreApellido." !!!";

    ?>

      <h3>Que desea hacer?</h3>

      <a href="enviarComentarios.php" class="bt">Eneviar un comentario al admin</a><br><br>
       <a href="mostrar.php" class="bt">Ver los productos</a><br><br>
    <form action= "buscarE.php" method=post>
      Producto a buscar<input type=number name=id required>
        <input type=submit value="Buscar por id">
</from>
</div>
  
</body>
</html>