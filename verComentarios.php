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
$archivo=fopen("mensaje.txt", "r");
$tamanio=filesize("mensaje.txt");
echo fread($archivo, $tamanio);
fclose($archivo);

?>
<a href="admin.php" class=bt>Volver</a>
</div>
    </body>
    </html>