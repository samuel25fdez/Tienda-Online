<?php

include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioUsuarios.inc.php";
include_once "app/Redirecciones.inc.php";


if(isset($_GET["nombre"]) && !empty($_GET["nombre"])) {

    $nombre=$_GET["nombre"];


} else {

    Redirecciones::redirigir(SERVIDOR);

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
                  <a class="navbar-brand" href="#"> <img src="images/logo_large.png" alt="alt" class="img-logo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="inicio-sesion.php">Iniciar sesión</a> 
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
      


        <div class="titulo-registro">

        <p>Gracias por registrarte <?php echo $nombre ?></p>
        <p><a href="<?php echo RUTA_LOGIN ?>">Inicie sesión</a> para usar su cuenta!</p>


        </div>

        <?php 
        
          include_once "plantillas/footer.inc.php";
        
        ?>


    </body>



</html>
        
   

