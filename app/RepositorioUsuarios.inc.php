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

    public static function insertar_usuario($conexion, $usuario) {

        $usuario_insertado= false;

        if(isset($conexion)) {

            try{

                $sql="insert into usuarios(nombre_usuario, email, password, fecha_registro) values(:nombre,:email,:password, NOW())";

                $sentencia=$conexion->prepare($sql);

                $usuario_nombre=$usuario->getNombreUsuario();
                $email_usuario=$usuario->getEmail();
                $password_usuario=$usuario->getPassword();


                $sentencia->bindParam(":nombre",$usuario_nombre,PDO::PARAM_STR);
                $sentencia->bindParam(":email",$email_usuario,PDO::PARAM_STR);
                $sentencia->bindParam(":password",$password_usuario,PDO::PARAM_STR);

                $sentencia->execute();

                $usuario_insertado= true;



            }catch(PDOException $ex){

                print "error" . $ex->getMessage();

            }
        }


        return $usuario_insertado;

    }

    public static function nombre_existe($conexion, $nombre) {

        $existe= true;

        if(isset($conexion)) {


            try{

                $sql="select * from usuarios where nombre_usuario= :nombre";

                $sentencia=$conexion->prepare($sql);

                $sentencia->bindParam(":nombre", $nombre,PDO::PARAM_STR);

                $sentencia->execute();

                $resultado=$sentencia->fetchAll();

                if(count($resultado)) {

                    $existe= true;


                }else {

                    $existe= false;
                }


            }catch(PDOException $ex){

                print "error" . $ex->getMessage(); 

            }
        } 
        return $existe; 
    } 


    public static function email_existe($conexion, $email) {

        $existe= true;

        if(isset($conexion)) {


            try{

                $sql="select * from usuarios where email= :email";

                $sentencia=$conexion->prepare($sql);

                $sentencia->bindParam(":email", $email,PDO::PARAM_STR);

                $sentencia->execute();

                $resultado=$sentencia->fetchAll();

                if(count($resultado)) {

                    $existe= true;


                }else {

                    $existe= false;
                }


            }catch(PDOException $ex){

                print "error" . $ex->getMessage(); 

            }
        } 
        return $existe; 
    }


    public static function obtener_usuario_por_email($conexion, $email) {

        $usuario=null;

        if(isset($conexion)) {

            try{
                include_once "Usuario.inc.php";

                $sql="select * from usuarios where email=:email";

                $sentencia=$conexion->prepare($sql);

                $sentencia->bindParam(":email",$email,PDO::PARAM_STR);

                $sentencia->execute();

                $resultado=$sentencia->fetch();

                if(!empty($resultado)) {

                    $usuario=new Usuario($resultado["id"],$resultado["nombre_usuario"],$email,$resultado["password"],$resultado["fecha_registro"]);
                    
                }






            }catch(PDOException $ex){

                print "error" . $ex->getMessage(); 

            }




        }

        return $usuario;


    }

    public static function obtener_usuario_por_id($conexion, $id) {

        $usuario=null;

        if(isset($conexion)) {

            try{

                include_once "Usuario.inc.php";

                $sql="select * from usuarios where id= :id";

                $sentencia=$conexion->prepare($sql);

                $sentencia->bindParam(":id", $id, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado=$sentencia->fetch();

                if(!empty($resultado)) {

                    $usuario=new Usuario($resultado["id"],$resultado["nombre_usuario"],$resultado["email"],$resultado["password"],$resultado["fecha_registro"]);

                }

            }catch(PDOException $ex){

                print "error" . $ex->getMessage();
            }

        }
        return $usuario;

    }

    

    

    


}
