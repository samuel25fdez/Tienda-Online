<?php

include_once "app/config.inc.php";
include_once "app/Redirecciones.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/Entrada.inc.php";
include_once "app/RepositorioEntradas.inc.php";

Conexion::abrir_conexion();

if(isset($_GET["url"]) && !empty($_GET["url"])) {

    $url_entrada=$_GET["url"];

} else {

    Redirecciones::redirigir(SERVIDOR); 

}

$entrada=RepositorioEntradas::obtener_entrada_por_url(Conexion::obtener_conexion(),$url_entrada);

$id_entrada=$entrada->obtener_id();

Conexion::cerrar_conexion();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada <?php echo $id_entrada ?></title>
</head>
<body>
    
</body>
</html>