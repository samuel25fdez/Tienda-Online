<?php 

include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioEntradas.inc.php";
include_once "app/RepositorioUsuarios.inc.php";
include_once "app/ControlSesion.inc.php";
include_once "app/Entrada.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include_once "plantillas/head_declaration.inc.php"; ?>

    <title>Carrito</title>
</head>
<body>
    <header>

        <?php include_once "plantillas/navbar.inc.php"; ?>


    </header>

    <?php
    
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $entradas_carrito=RepositorioEntradas::obtener_entradas_carrito(Conexion::obtener_conexion(),$_SESSION["id_usuario"]);

        echo count($entradas_carrito);
    
    ?>



    <?php include_once "plantillas/footer.inc.php"; ?>

</body>
</html>