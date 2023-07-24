<?php 


       
        $servidor="localhost";
        $usuarioBD="root";
        $passBD="";
        $baseDeDatos="MelinaDaversa2";
        
        $conexion=mysqli_connect($servidor, $usuarioBD, $passBD, $baseDeDatos) or die("No se puede conectar a la BD");
         return $conexion;


?>