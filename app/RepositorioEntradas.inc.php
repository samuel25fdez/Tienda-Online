<?php

include_once "config.inc.php";
include_once "Conexion.inc.php";

class RepositorioEntradas {

    public static function insertar_entradas($conexion,$entrada) {

        $entrada_insertada=false;

        if(isset($conexion)) {

            try{

                $sql="insert into entradas(usuario_id, titulo, descripcion, fecha, url_img) values (:usuario_id, :titulo, :descripcion, NOW(), :url_img)";

                $sentencia=$conexion->prepare($sql);
                
                $usu=$entrada->obtener_usuario_id();

                $titu=$entrada->obtener_titulo();

                $desc=$entrada->obtener_descripcion();

                $ur=$entrada->obtener_url();

                $sentencia->bindParam(":usuario_id",$usu, PDO::PARAM_STR);

                $sentencia->bindParam(":titulo",$titu, PDO::PARAM_STR);

                $sentencia->bindParam(":descripcion",$desc, PDO::PARAM_STR);

                $sentencia->bindParam(":url_img",$ur, PDO::PARAM_STR);

                $entrada_insertada=$sentencia->execute();

                

                


            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }
        }


    }
    public static function obtener_entradas_mas_nuevas($conexion) {

        $entradas=[];

        if(isset($conexion)) {

            try{

                $sql="select * from entradas order by fecha desc limit 10";

                $sentencia=$conexion->prepare($sql);

                $sentencia->execute();

                $resultado=$sentencia->fetchAll();

                if(count($resultado)) {

                    foreach($resultado as $fila) {

                        $entradas[]=new Entrada($fila["id"],$fila["usuario_id"],$fila["titulo"],$fila["descripcion"],$fila["fecha"],$fila["url_img"]);

                    }
                }




            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }


        }
        return $entradas;



    }

}