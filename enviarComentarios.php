<?php
session_start();

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

  <div>
   <h4>Enviar un mensaje al administrador</h4>
     <form method=post action="comentarios.php">
      <select name="asunto">
        <option value=info>Informacion</option> <br>
        <option value=Modificaciones>Modificaciones</opcion> <br>
        <option value=otros>Otros</option> <br>
</select>
<br>
       <textarea name="mensaje" rows=15 cols=30>

</textarea>
<br>
       <input type=submit value="enviar" class=bt>
       <a href="empleado.php" class="bt">Volver</a><br>
</from>

<?php
if(isset($_GET['mensaje'])){
          if($_GET['mensaje']=="ok"){
              echo "Mensaje enviado correctamente";
          }
          if($_GET['mensaje']=="error"){
              echo "No se pudo enviar el mensaje";
          }
}

?>
</div>
</body>
</html>