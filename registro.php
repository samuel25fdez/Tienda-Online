<?php

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
            Zapatillas molonas
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css?v=<?php echo time(); ?>" />
        <link href="images/logo_small_icon_only_inverted.png" rel="icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
            
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php"> <img src="images/logo_large.png" alt="alt" class="img-logo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="inicio-sesion.html">Iniciar sesión</a> 
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="registro.php">Registrarse</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Marcas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="adidas.html">Adidas</a></li>
                          <li><a class="dropdown-item" href="nike.html">Nike</a></li>
                          <li><a class="dropdown-item" href="vans.html">Vans</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            
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





          <footer>

        

<div class="col-md-12">
  <p class="contacto">
    CONTACTA CON NOSOTROS
  </p>

  <p class="titulo-contacto">
    zapatillasmolonas@gmail.com
  </p>

  <p>

      

     <span class="titulo-colonia">
     2021 - Página web desarrollada por Samuel Fernández Roca

     </span>

         </p>

         <a class="nquestion-link" href="preguntas.html">PREGUNTAS FRECUENTES</a>


         
       </div>
    </div>
</div>
</div>





</div>







</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>