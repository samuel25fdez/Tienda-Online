<?php 

include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioUsuarios.inc.php";
include_once "app/ValidadorLogin.inc.php";
include_once "app/Redirecciones.inc.php";
include_once "app/ControlSesion.inc.php";

if(isset($_POST["login"])) {

  Conexion::abrir_conexion();

  $validador=new ValidadorLogin($_POST["email"], $_POST["password"],Conexion::obtener_conexion());

  if($validador->obtener_error()==="" && !is_null($validador->obtener_usuario())) {

    //iniciar sesion y redirigir a la pagina que queramos

    ControlSesion::iniciar_sesion($validador->obtener_usuario()->getId(), $validador->obtener_usuario()->getNombreUsuario());

    Redirecciones::redirigir(SERVIDOR);

    


  }

  Conexion::cerrar_conexion();




}






?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            iniciar sesion
        </title>
       
        <?php include_once "plantillas/head_declaration.inc.php" ?>
    </head>
    <body>
        <header>

        <?php 
            include_once "plantillas/navbar.inc.php";
            ?>
        </header>



        <div class="div-inicio">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" 

                  <?php 
                  
                  if(isset($_POST["login"]) && isset($_POST["email"]) && !empty($_POST["email"])) {

                    echo "value=\"" . $_POST["email"] . "\"";

                  }
                  
                  ?>
                  
                  required autofocus>


                  <div id="emailHelp" class="form-text">Nunca compartiremos tu correo con terceros.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label" >Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <div class="mb-3 form-check">



                <?php 
                
                if(isset($_POST["login"])) {

                  $validador->mostrar_error();

                }
                
        
                
                ?>
                  
                  
                </div>

                <button type="submit" class="btn btn-primary" name="login">Submit</button>
              </form>
        </div>

        <?php 
        
          include_once "plantillas/footer.inc.php";
        
        ?>

</body>
</html>