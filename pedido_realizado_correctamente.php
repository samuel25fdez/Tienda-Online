<?php 
session_start();
include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioEntradas.inc.php";
include_once "app/RepositorioUsuarios.inc.php";
include_once "app/ControlSesion.inc.php";
include_once "app/Entrada.inc.php";

?>

<!DOCTYPE html>
<html lang="es">
    <head>

        <?php include_once "plantillas/head_declaration.inc.php"; ?>


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pedido realizado</title>
    </head>
    <body>
        <header>
    <?php 
            include_once "plantillas/navbar.inc.php";
            ?>
            
        </header>
    <?php echo RUTA_PEDIDO_CORRECTO ?>


 
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        

        <section class="titulo-pedido-correcto">
                  
                  <br>
                  <div class="caja-titulo-productos2"> <h2>PEDIDO REALIZADO CORRECTAMENTE</h2><br><h3>Revise su correo electrónico</h3></div>
                  <br>
                  
                
                  <br>
                  <br>
                  <br>

          </section>
    <?php include_once "plantillas/footer.inc.php"; ?>
</body>
</html>