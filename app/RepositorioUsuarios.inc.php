<?php

class RepositorioUsuarios {

    public static function obtener_todos($conexion){

        $usuarios=array();

        if(isset($conexion)){

            try{

                include_once "Usuario.inc.php";

                $sql="select * from usuarios";


            } catch(PDOException $ex){


            }

            
        }
    }
}