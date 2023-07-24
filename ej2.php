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
     
       <h2>Ingrese la fecha para saber que estacion es</h2>

<form method=post>
    
  Ingrese la fecha y el mes: <input type=date name=mes required>
     <input type=submit value="subir">

</form>




<?php
if(isset($_POST['mes'])){
$fechaIngresada=$_POST['mes']; 


$fecha = new DateTime($fechaIngresada);


$mes = $fecha->format('n');
$dia = $fecha->format('j');


$estacion = determinarEstacion($mes, $dia);


echo "La fecha ingresada corresponde a la estación: " . $estacion;


function determinarEstacion($mes, $dia)
{
    if (($mes == 3 && $dia >= 21) || $mes > 3 && $mes < 6 || ($mes == 6 && $dia < 21)) {
        return "Otoño";
    } elseif (($mes == 6 && $dia >= 21) || $mes > 6 && $mes < 9 || ($mes == 9 && $dia < 23)) {
        return "Invierno";
    } elseif (($mes == 9 && $dia >= 23) || $mes > 9 && $mes < 12 || ($mes == 12 && $dia < 21)) {
        return "Primavera";
    } else {
        return "Verano";
    }
}
}
?>


</div>
</body>
</html>



