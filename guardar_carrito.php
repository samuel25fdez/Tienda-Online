<?php

include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/Redirecciones.inc.php";
include_once "app/RepositorioEntradas.inc.php";
include_once "plantillas/navbar.inc.php";

Conexion::abrir_conexion();

    $id_entrada=$_GET["id_entrada"];
    $id_usuario=$_SESSION["id_usuario"];
    
    $insertada=RepositorioEntradas::insertar_entrada_carrito(Conexion::obtener_conexion(),$id_usuario,$id_entrada);
    Redirecciones::redirigir(SERVIDOR);







Conexion::cerrar_conexion();