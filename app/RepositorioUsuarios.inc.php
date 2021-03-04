<?php

class RepositorioUsuarios {

    public static function obtener_todos($conexion){

        $usuarios=array();

        if(isset($conexion)){

            try{

                include_once "Usuario.inc.php";

                $sql="select * from usuarios";

                $sentencia=$conexion->prepare($sql);

                $sentencia->execute();

                $resultado=$sentencia->fetchAll();

                if (count($resultado)) {

                    foreach ($resultado as $fila) {

                        $usuarios[]=new Usuario($fila["id"],$fila["nombre_usuario"],$fila["email"],$fila["password"],$fila["fecha_registro"]);
                    }


                }else {

                    print "no hay usuarios";
                }
                


            } catch(PDOException $ex){

                print "error:" . $ex->getMessage();

            }

            
        }
        
        return $usuarios;
    }

    public static function obtener_numero_usuarios($conexion) {

        $total_usuarios=null;

        if (isset($conexion)){

            try{

                $sql="select count(*) as total from usuarios";

                $sentencia=$conexion->prepare($sql);

                $sentencia->execute();

                $resultado=$sentencia->fetch();

                $total_usuarios=$resultado["total"];

                
            }catch(PDOException $ex){

                print "error" . $ex->getMessage();

                

                

            }
        }
        
        return $total_usuarios;
    }


}