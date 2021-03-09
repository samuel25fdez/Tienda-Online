




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
        
   <body>   

    

    

    </head>
  
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

        <section class="carrusel-div">

            

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/adidas3.jpg" width="700px" height="350px" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/nike2.jpg" width="700px" height="350px" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/zapatillas-vans1.jpg" width="700px" height="350px" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
    
            
          </section>

          <?php


include_once "app/Conexion.inc.php";

include_once "app/RepositorioUsuarios.inc.php";

Conexion::abrir_conexion();

$usuarios=RepositorioUsuarios::obtener_numero_usuarios(Conexion::obtener_conexion());

echo $usuarios;

Conexion::cerrar_conexion();



?>




        

          
       

        
        <section class="primer-parrafo">
           <h2>NUESTROS PRODUCTOS</h2>
        </section>
        
      

       

      

       

        <section class="container-section">
            ZAPATILLAS MOLONAS <br> <br>
            Desde el equipo de zapatillas molonas nos comprometemos con el cliente para garantizar productos de máxima calidad con tiempos de entrega muy competitivos y sin gastos de envío añadidos.<br> <br>
            
            
            Ofrecemos las mejores marcas de zapatillas del mercado a precios LOW COST con envíos GRATIS a domicilio en todo el mundo (periodos de entrega de entre 7-20 días habiles). <br><br>
            
            A lo largo del Catálogo Online de nuestra Web encontrarás los más de 400 modelos exclusivos que disponemos. <br><br>
            
            Servicio de Atención al Cliente 24/7 vía Instagram @zapatillasmolonas, o via web! <br><br>
            
            info@zapatillasmolonas.com

        </section>
        
        <section>

            <div class="widget-widget-blog-subscription">

            
           
                <p>Subscribete a nuestro newsletter para estar informado de nuestras promociones en todo momento.</p>
                <p>
                    <input type="text" name="email" style="" placeholder="Introduce tu dirección de correo electrónico" value="" id="subscribe-field">
                </p>
                <p>
                    <input type="submit" value="Subscribirse!">
                </p>
            </form>

        </div>
        </section>







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
                      2021 - Software Ecommerce desarrollado por Lawebdelaszapas

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