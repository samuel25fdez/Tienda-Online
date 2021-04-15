<?php
session_start();
include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/Entrada.inc.php";
include_once "app/Redirecciones.inc.php";
include_once "app/RepositorioEntradas.inc.php";

include_once "plantillas/navbar.inc.php";

$id_entrada=$_GET["id_entrada"];

RepositorioEntradas::quitar_entrada_carrito(Conexion::obtener_conexion(),$_SESSION["id_usuario"],$id_entrada);
Redirecciones::redirigir(RUTA_CARRITO);