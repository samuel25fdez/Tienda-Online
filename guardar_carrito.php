<?php
session_start();
include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/Redirecciones.inc.php";
include_once "app/RepositorioEntradas.inc.php";


Conexion::abrir_conexion();

    

    include_once "app/ControlSesion.inc.php";

    if(ControlSesion::sesion_iniciada()){

        $id_entrada=$_GET["id_entrada"];
        $id_usuario=$_SESSION["id_usuario"];
        $insertada=RepositorioEntradas::insertar_entrada_carrito(Conexion::obtener_conexion(),$id_usuario,$id_entrada);
        Redirecciones::redirigir(RUTA_CARRITO);
    }else{
        Redirecciones::redirigir(RUTA_LOGIN);

    }
   







Conexion::cerrar_conexion();