<?php

include_once "config.inc.php";
include_once "Conexion.inc.php";

class RepositorioComentarios {

    public static function insertar_comentarios($conexion,$comentario) {

        $comentario_insertado=false;

        if(isset($conexion)) {

            try{

                $sql="insert into comentarios(usuario_id, entrada_id, titulo, texto, fecha) values (:usuario_id, :entrada_id, :titulo, :texto, NOW())";

                $sentencia=$conexion->prepare($sql);
                
                $usu=$comentario->obtener_usuario_id();

                $entr=$comentario->obtener_entrada_id();

                $titu=$comentario->obtener_titulo();

                $text=$comentario->obtener_texto();

                

                $sentencia->bindParam(":usuario_id",$usu, PDO::PARAM_STR);

                $sentencia->bindParam(":entrada_id",$entr, PDO::PARAM_STR);

                $sentencia->bindParam(":titulo",$titu, PDO::PARAM_STR);

                $sentencia->bindParam(":texto",$text, PDO::PARAM_STR);

                $comentario_insertado=$sentencia->execute();

                

                


            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }
        }
        return $comentario_insertado;


    }
}