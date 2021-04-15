<?php
session_start();
include_once "app/Conexion.inc.php";

include_once "app/ValidadorRegistro.inc.php";

include_once "app/RepositorioUsuarios.inc.php";

include_once "app/Usuario.inc.php";

include_once "app/config.inc.php";

include_once "app/Redirecciones.inc.php";



if(isset($_POST["enviar"])) {

  Conexion::abrir_conexion();

  

  $validador=new ValidadorRegistro($_POST["email"], $_POST["nombre"], $_POST["password"], $_POST["password2"], Conexion::obtener_conexion());



  if($validador->registro_valido()==true) {

    $usuario=new Usuario("",$validador->obtener_nombre(),$validador->obtener_email(),password_hash($validador->obtener_password(),PASSWORD_DEFAULT),"");
   

    $usuario_insertado=RepositorioUsuarios::insertar_usuario(Conexion::obtener_conexion(),$usuario);
   

    if($usuario_insertado==true ) {
     
      $cadena=$usuario->getNombreUsuario();
      Redirecciones::redirigir(RUTA_REGISTRO_CORRECTO . "?nombre=" . $cadena);
      
      
    }

  }


  Conexion::cerrar_conexion();


}

?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Registrarse
        </title>
        <?php include_once "plantillas/head_declaration.inc.php" ?>
        
            
    </head>
    <body>
        <header>
        <?php 
            include_once "plantillas/navbar.inc.php";
            ?>
            
        </header>

        <div class="main-registro">

        <form class="row g-3" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">         
                
                <?php

                  if(isset($_POST["enviar"])) {

                    include_once "plantillas/registro_validado.inc.php";

                  }else {

                    include_once "plantillas/registro_vacio.inc.php";

                  }

                ?>

            </form>

          </div>

          <?php 
        
          include_once "plantillas/footer.inc.php";
        
        ?>

</body>
</html>