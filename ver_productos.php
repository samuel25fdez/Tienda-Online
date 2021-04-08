<?php

include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioEntradas.inc.php";
include_once "app/ControlSesion.inc.php";
include_once "app/Entrada.inc.php";
include_once "app/Redirecciones.inc.php";


?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <?php include_once "plantillas/head_declaration.inc.php"; ?>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Productos</title>
    </head>
    <body>
        <?php include_once "plantillas/navbar.inc.php"; ?>

        <?php 
        
            $productos=RepositorioEntradas::ver_todos_los_productos(Conexion::obtener_conexion()); 

            for($i=0;$i<count($productos);$i++) {

                

            }



        ?>



        <?php include_once "plantillas/footer.inc.php"; ?>
    </body>
</html>




