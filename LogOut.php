<?php

include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/ControlSesion.inc.php";
include_once "app/Redirecciones.inc.php";

Conexion::abrir_conexion();

ControlSesion::cerrar_sesion();

Conexion::cerrar_conexion();

Redirecciones::redirigir(SERVIDOR);

