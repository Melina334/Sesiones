<?php
session_start();
if(isset($_SESSION['nombre'])&& $_SESSION['rolUsuario']==3){
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
<div>

      <div>
      
       <h1>Bienvenido a la pagina de profesor</h1>
       <?php
      echo "Bienvenido ".$nombreApellido." !!!";
     
      

    ?>
    </div>
    
      <div>
      <h3>¿Que programa desea ver?</h3>

      
      <a href="ej1.php"><button class=bt >Programa 1</button></a>
      <a href="ej2.php"><button class=bt>Programa 2</button></a>
      <a href="ej3.php"><button class=bt>Programa 2</button></a>
</div>

     
 

       
       
    


</body>
</html>