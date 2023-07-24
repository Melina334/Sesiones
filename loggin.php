<?php
   $usuario=$_POST['usuario'];
   $pass=$_POST['pass'];

   require "conexion.php";

   $sql="select * from usuario1 where usuario='$usuario';";

   $resulset=mysqli_query($conexion, $sql);


   if(mysqli_affected_rows($conexion)>0){
       echo "usuario encontrado";
      $registro=mysqli_fetch_assoc($resulset);
      $nombre=$registro['nombre'];
      $contra=$registro['contra'];

      if($contra==$pass){
         echo "las contraseñas coinciden";
         session_start();
         $_SESSION['id']=$registro['id'];
         $_SESSION['usuario']=$registro['usuario'];
         $_SESSION['nombre']=$registro['nombre']." ".$registro['apellido'];
         $_SESSION['rolUsuario']=$registro['rolUsuario'];

           switch($registro['rolUsuario']){
             case 1:
               header("location: admin.php");
               break;
             case 2:
                  header("location: empleado.php");
                  break;
             case 3:
                     header("location: profesor.php");
                     break;




           }





      } else {
         echo "la contraseña es incorrecta";
       }

    
      }else{
              echo "usuario no encontrado".$usuario;
       }
       
       
       ?>


       