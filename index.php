
<?php

  include_once "app/Conexion.inc.php";
  include_once "app/EscritorEntradas.inc.php";

?>



<!DOCTYPE html>
<html>
    <head>
      <title>
              Zapatillas molonas
      </title>
    
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
                  
      

       
            <div>
            
              <?php 
              
                EscritorEntradas::escribir_entradas();
              
              ?>
            
            </div>
      

       

        <section class="container-section">
            ZAPATILLAS MOLONAS <br> <br>
            Desde el equipo de zapatillas molonas nos comprometemos con el cliente para garantizar productos de máxima calidad con tiempos de entrega muy competitivos y sin gastos de envío añadidos.<br> <br>
            
            
            Ofrecemos las mejores marcas de zapatillas del mercado a precios LOW COST con envíos GRATIS a domicilio en todo el mundo (periodos de entrega de entre 7-20 días habiles). <br><br>
            
            A lo largo del Catálogo Online de nuestra Web encontrarás los más de 400 modelos exclusivos que disponemos. <br><br>
            
            Servicio de Atención al Cliente 24/7 vía Instagram @zapatillasmolonas, o via web! <br><br>
        </section>

        <?php 
        
          include_once "plantillas/footer.inc.php";
        
        ?>
          
          </body>
          </html>