<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>ALTAS PRODUCTOS</h1>
    <form class="formulario" method=post>
        
    descripcion: <input type=text name=desc maxlength=50 required><br><br>
    precio: <input type=number name=precio min=0.01 step=0.01 required><br><br>
            <input type=submit value="Cargar los Datos" class=bt>
            <a class=bt href="admin.php">VOLVER</a>
    </form>

    <?php
       if(isset($_POST['desc'])){

        $descripcion=$_POST['desc'];
        $precio=$_POST['precio'];
       

        
        
        $sql="insert into Productos(descripcion, precio) values 
        ('$descripcion', '$precio');";
        
        require "conexion.php";

       
        mysqli_query($conexion,$sql);
        
        if(mysqli_affected_rows($conexion)>0){
            echo "Los datos fueron cargados";
        }
        else{
            echo "No se cargaron los datos";
        }
        
        
        
        }
        
        
        ?>
        </div>
        
        </body>
        </html>