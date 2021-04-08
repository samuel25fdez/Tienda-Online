<?php

include_once "config.inc.php";
include_once "Conexion.inc.php";

class RepositorioEntradas {

    public static function insertar_entradas($conexion,$entrada) {

        $entrada_insertada=false;

        if(isset($conexion)) {

            try{

                $sql="insert into entradas(usuario_id, titulo, descripcion, url, fecha, url_img) values (:usuario_id, :titulo, :descripcion, :url, NOW(), :url_img)";

                $sentencia=$conexion->prepare($sql);
                
                $usu=$entrada->obtener_usuario_id();

                $titu=$entrada->obtener_titulo();

                $desc=$entrada->obtener_descripcion();

                $u=$entrada->obtener_url_entrada();

                $ur=$entrada->obtener_url();

                $sentencia->bindParam(":usuario_id",$usu, PDO::PARAM_STR);

                $sentencia->bindParam(":titulo",$titu, PDO::PARAM_STR);

                $sentencia->bindParam(":descripcion",$desc, PDO::PARAM_STR);

                $sentencia->bindParam(":url",$u, PDO::PARAM_STR);

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

                        $entradas[]=new Entrada($fila["id"],$fila["usuario_id"],$fila["titulo"],$fila["descripcion"],$fila["url"],$fila["fecha"],$fila["url_img"]);

                    }
                }




            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }


        }
        return $entradas;



    }
    public static function obtener_entrada_por_url($conexion, $url) {

        $entrada=null;

        if(isset($conexion)) {

            try{

                $sql="select * from entradas where url like :url";

                $sentencia=$conexion->prepare($sql);

                $sentencia->bindParam(":url",$url, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado=$sentencia->fetch();
                
                if(!empty($resultado)) {
                   
                    $entrada=new Entrada($resultado["id"],$resultado["usuario_id"],$resultado["titulo"],$resultado["descripcion"],$resultado["url"],$resultado["fecha"],$resultado["url_img"]);
                }


                
            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }

        }
        return $entrada;

    }
    public static function obtener_productos_azar($conexion,$limite) {

        $productos=[];

        if(isset($conexion)) {

            try{

                $sql="select * from entradas order by rand() limit $limite";

                $sentencia=$conexion->prepare($sql);

                $sentencia->execute();

                $resultado=$sentencia->fetchAll();

                if(!empty($resultado)) {

                    foreach($resultado as $fila) {

                       $productos[]=new Entrada($fila["id"],$fila["usuario_id"],$fila["titulo"],$fila["descripcion"],$fila["url"],$fila["fecha"],$fila["url_img"]);


                    } 

                }

            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }

            
        }

        return $productos;
    }

    public static function insertar_entrada_carrito ($conexion,$id_usuario,$id_entrada) {

        $insertada=false;
        
        if(isset($conexion)) {

            try{

                $sql="insert into entradas_favoritas(id_usuario,id_entrada) values(:id_usuario,:id_entrada)";
                $sentencia=$conexion->prepare($sql);
                $sentencia->bindParam(":id_usuario",$id_usuario, PDO::PARAM_STR);
                $sentencia->bindParam(":id_entrada",$id_entrada, PDO::PARAM_STR);
                $insertada=$sentencia->execute();



            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }
        }

        return $insertada;
    }

    public static function obtener_entradas_carrito($conexion,$id_usuario) {

        $entradas_carrito=[];

        if(isset($conexion)) {

            try{

                $sql="select * from entradas_favoritas where id_usuario=:id_usuario";
                $sentencia=$conexion->prepare($sql);
                $sentencia->bindParam(":id_usuario",$id_usuario, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado=$sentencia->fetchAll();

                if(count($resultado)) {

                    foreach($resultado as $fila){

                        $entradas_carrito[]=$fila["id_entrada"];
                    }
                }


            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }
        }
        return $entradas_carrito;
    }

    public static function obtener_entrada_por_id($conexion,$id) {

        $entrada=null;

        if(isset($conexion)) {

            try{
                include_once "Entrada.inc.php";

                $sql="select * from entradas where id=:id";
                $sentencia=$conexion->prepare($sql);
                $sentencia->bindParam(":id",$id,PDO::PARAM_STR);
                $sentencia->execute();
                $resultado=$sentencia->fetch();
                
                if(!empty($resultado)) {

                    $entrada=new Entrada($id,$resultado["usuario_id"],$resultado["titulo"],$resultado["descripcion"],$resultado["url"],$resultado["fecha"],$resultado["url_img"]);

                    
                }




            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }
        }
        return $entrada;
    }

    public static function quitar_entrada_carrito($conexion,$id_usuario,$id_entrada) {

        $quitada=false;

        if(isset($conexion)) {

            try{

                $sql="Delete from entradas_favoritas where id_usuario=:id_usuario and id_entrada=:id_entrada";
                $sentencia=$conexion->prepare($sql);
                $sentencia->bindParam(":id_usuario",$id_usuario,PDO::PARAM_STR);
                $sentencia->bindParam(":id_entrada",$id_entrada,PDO::PARAM_STR);
                $quitada=$sentencia->execute();
                


            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }
        }

        return $quitada;
    }

    public static function ver_todos_los_productos($conexion) {

        $productos=[];

        if(isset($conexion)) {

            try{

                $sql="select * from entradas";
                $sentencia=$conexion->prepare($sql);
                $sentencia->execute();
                $resultado=$sentencia->fetchAll();

                if(!empty($resultado)){

                    foreach($resultado as $fila) {

                        $productos[]=new Entrada($fila["id"],$fila["usuario_id"],$fila["titulo"],$fila["descripcion"],$fila["url"],$fila["fecha"],$fila["url_img"]);
                    }
                }

               


            }catch(PDOException $ex) {

                print "error: " . $ex->getMessage();

            }
        }

        return $productos;
    }

}