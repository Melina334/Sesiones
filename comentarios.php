<?php
session_start();
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];


echo $asunto. " ".$mensaje;

$nombreDelUsuario=$_SESSION['nombre'];

$archivo= fopen("mensaje.txt", "a+");

$texto="<spam class=blue>Mensaje de $nombreDelUsuario</spam><br>Asunto: $asunto  <br>Mensaje: $mensaje"."<br>".date("y-m-a"). "<br><br>";

if(fwrite($archivo, $texto)){
fclose($archivo);
header("location: enviarComentarios.php?mensaje=ok");
} else {
    header("location: enviarComentarios.php?mensaje=error");
}
?>