<!DOCTYPE html>
<html>
    <head>
        <title>
            Deportivas molonas
        </title>
        <link href="css/estilo.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
                        <a class="nav-link" href="#">Registrarse</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Marcas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Nike</a></li>
                          <li><a class="dropdown-item" href="#">Adidas</a></li>
                          <li><a class="dropdown-item" href="#">Vans</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            
        </header>

        <div class="main-registro">

            <form class="row g-3" action="<?php echo $_SERVER[`PHP_SELF`] ?>" method="POST">
                <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
                </div>
                <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="inputPassword4" name="nombre">
                </div>
                <div class="col-12">
                <label for="inputAddress" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="inputAddress" name="password">
                </div>
                <div class="col-12">
                <label for="inputAddress2" class="form-label">Repite Contraseña</label>
                <input type="password" class="form-control" id="inputAddress2" name="password2">
                </div>
                <div class="col-md-6">
                <label for="inputCity" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                <label for="inputState" class="form-label">País</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>España</option>
                    <option>Francia</option>
                    <option>Alemania</option>
                </select>
                </div>
                <div class="col-md-2">
                <label for="inputZip" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                <div class="form-check">
                    
                    
                </div>
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>


          </div>





        <footer>
            SUBSCRIBIRSE
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


    </body>
</html>