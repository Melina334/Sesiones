<?php
session_start();
$nombre=$_SESSION['nombre'];

echo "Hasta pronto ".$nombre;
session_destroy();

echo " sesion cerrada";

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
<br><br><a href="index.php" class=bt>Volver a la pagina de inicio</a>
</body>
</html>