<?php
session_start();
include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioUsuarios.inc.php";
include_once "app/Redirecciones.inc.php";


if(isset($_GET["nombre"]) && !empty($_GET["nombre"])) {

    $nombre=$_GET["nombre"];


} else {

    Redirecciones::redirigir(SERVIDOR);

}





?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Zapatillas molonas
        </title>
        <?php
        include_once "plantillas/head_declaration.inc.php";
        ?>

    </head>
    <body>

    <header>
    <?php 
            include_once "plantillas/navbar.inc.php";
            ?>
            
        </header>
      


        <div class="titulo-registro">

        <p>Gracias por registrarte <?php echo $nombre ?></p>
        <p><a href="<?php echo RUTA_LOGIN ?>">Inicie sesión</a> para usar su cuenta!</p>


        </div>

        <?php 
        
          include_once "plantillas/footer.inc.php";
        
        ?>


    </body>



</html>
        
   

