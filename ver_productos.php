<?php
session_start();
include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioEntradas.inc.php";
include_once "app/ControlSesion.inc.php";
include_once "app/Entrada.inc.php";
include_once "app/Redirecciones.inc.php";


?>

<!DOCTYPE html>
<html lang="es">
    <head>

        <?php include_once "plantillas/head_declaration.inc.php"; ?>

        
        <title>Productos</title>
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
                  <div class="caja-titulo-productos"> <h2>TODOS LOS PRODUCTOS</h2></div>
                  <br>
                  <br>
                  <br>
                  <br>
                
                  <br>
                  <br>
                  <br>

          </section>
        <?php 
        
            $productos=RepositorioEntradas::ver_todos_los_productos(Conexion::obtener_conexion()); 

            for($i=0;$i<count($productos);$i++) {

                $producto=$productos[$i];

                ?>
                <br>
                <br>
                <br>
                <br>
                <br>

                
                
                        <section class="section-productos">
                        <div class="row dejar-espacio-entrada2">
                
                    <div class="col-md-12">
                    
                        <div class="titulo-entrada-producto">
                        
                            <h3>
                            
                                <strong>
                                
                                    <?php echo $producto->obtener_titulo() ?>

                                </strong>
                            
                            </h3>
                        
                        </div>

                        <div class="cuerpo-entrada-producto">
                        

                            <div class="imagen-producto">
                            
                                <img class="imagen-entrada-producto" src="<?php echo $producto->obtener_url();?>" alt="alt">
                            
                            </div>

                            <div class="descripcion-producto">

                                <?php echo nl2br($producto->obtener_descripcion()); ?>

                            </div>

                            <div class="boton-carrito2">
                                
                                 <a href="<?php echo RUTA_INSERTAR_FAVORITOS . "?id_entrada=" . $producto->obtener_id(); ?>">

                                    <button type="button" class="btn btn-warning">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                        </svg> 

                                        Añadir al carrito

                                    </button>
                                </a>

                            

                            </div>

                        </div>
                    
                    </div>
                
                </div>

                </section>
                



                <?php

            }



        ?>



        <?php include_once "plantillas/footer.inc.php"; ?>
    </body>
</html>




