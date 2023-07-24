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
     
       <h2>Ingrese la fecha</h2>

<form method=post>
    
<input type="number" name="dia" min="1" max="31" required>
<input type="number"  name="mes" min="1" max="12" required>
<input type="number"  name="anio" min="1999" max="2099" required>
     <input type=submit value="subir">

</form>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
if (checkdate($mes, $dia, $anio)) {
            
            $fechaActual = date_create();
            $fechaIngresada = date_create("$anio-$mes-$dia");

           
            $diferencia = date_diff($fechaActual, $fechaIngresada);
            $diasFaltantes = $diferencia->format("%a");

            
            if ($fechaActual > $fechaIngresada) {
                echo "<p>Desde la fecha ingresada han pasado $diasFaltantes días.</p>";
            } else {
                echo "<p>Faltan $diasFaltantes días para llegar a la fecha ingresada.</p>";
            }
        } else {
            echo "<p>La fecha ingresada es inválida. Por favor, inténtalo nuevamente.</p>";
        }
    }
    ?>
</div>
</body>
</html>
