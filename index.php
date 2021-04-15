<?php
session_start();
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

       <br>
       <br>
       <br>
       <br>
      
      
      
          <section class="primer-parrafo">
                  
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <div class="caja-titulo-productos"> <h2>PRODUCTOS DESTACADOS</h2></div>
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
            Desde el equipo de Zapatillas Molonas nos comprometemos con el cliente para garantizar productos de máxima calidad con tiempos de entrega muy competitivos y sin gastos de envío añadidos.<br> <br>
            
            
            Ofrecemos las mejores marcas de zapatillas del mercado a precios LOW COST con envíos GRATIS a domicilio en todo el mundo (periodos de entrega de entre 7-20 días habiles). <br><br>
            
            En la pestaña "PRODUCTOS" encontrarás el catálogo completo de los modelos que disponemos. <br><br>
            
            Servicio de Atención al Cliente vía gmail zapatillasmolonasinfo@gmail.com <br><br>

            ¡No olvides seguirnos en nuestras Redes Sociales!
        </section>

        <?php 
        
          include_once "plantillas/footer.inc.php";
        
        ?>
          
          </body>
          </html>