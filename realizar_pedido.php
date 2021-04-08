<?php

include_once "app/RepositorioUsuarios.inc.php";
include_once "app/Usuario.inc.php";
include_once "app/Conexion.inc.php";
include_once "plantillas/navbar.inc.php";
include_once "app/Redirecciones.inc.php";


$usuario=RepositorioUsuarios::obtener_usuario_por_id(Conexion::obtener_conexion(),$_SESSION["id_usuario"]);

$destinatario=$usuario->getEmail();

$nombre=$usuario->getNombreUsuario();

$asunto="Confirmación de pedido ZapatillasMolonas.";

$mensaje="Gracias " . $nombre . "\nTu pedido se ha realizado correctamente, gracias por confiar en ZapatillasMolonas.";

$header="From zapasmolonas@gmail.com";

mail($destinatario,$asunto,$mensaje,$header);

Redirecciones::redirigir(SERVIDOR);

include_once "plantillas/footer.inc.php";