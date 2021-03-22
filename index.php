




<!DOCTYPE html>
<html>
    <head>
    
        <?php
        include_once "plantillas/head_declaration.inc.php";
        ?>
        
        </head>
  
   <body>   

    

    

    
  
        <header>
        
           <?php 
            include_once "plantillas/navbar.inc.php";
            ?>
            
        </header>

        <section class="carrusel-div">

            <div>

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
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="caja-titulo-productos"> <h2>NUESTROS PRODUCTOS</h2></div>
        <br>
        <br>
        <br>
        <br>
       
        <br>
        <br>
        <br>
       

       

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



        <div class="container-logos" >
            REDES SOCIALES
         
        
          <div class="" >
            <a href="#"><img src="images/social_facebook_fb_35.png"  width="50px" height="25px" alt="facebook"></a>
            <a href="#"><img src="images/" alt="youtube"></a>
            <a href="#"><img src="img/linkedin.png" alt="linkedin"></a>
            <a href="#"><img src="img/instagram.png" alt="instagram"></a>
          </div>
        </div>
  

          

        

          <div class="container-logos-2" >
            <p>
              CONTACTA CON NOSOTROS
            </p>
          
            <p> 
              zapatillasmolonas@gmail.com
            </p>
            
          





        </section>
        
        







        <footer>
<br>
<br>
<br>

        <a class="link-preguntas" href="preguntas.html">PREGUNTAS FRECUENTES</a>

        <br>
        <br>
        <br>
         
            <p>
          
                
          
               <span class="titulo-colonia">
                2021 - Página web desarrollada por Samuel Fernández Roca
          
               </span>
          
                   </p>
          
                   

                   
          
                   
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