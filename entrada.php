<?php

include_once "app/config.inc.php";
include_once "app/Redirecciones.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/Entrada.inc.php";
include_once "app/RepositorioEntradas.inc.php";
include_once "app/RepositorioComentarios.inc.php";
include_once "app/Comentario.inc.php";
include_once "app/RepositorioUsuarios.inc.php";


Conexion::abrir_conexion();

if(isset($_GET["url"]) && !empty($_GET["url"])) {

    $url_entrada=$_GET["url"];

} else {

    Redirecciones::redirigir(SERVIDOR); 

}

$entrada=RepositorioEntradas::obtener_entrada_por_url(Conexion::obtener_conexion(),$url_entrada);



$id_entrada=$entrada->obtener_id();

Conexion::cerrar_conexion();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
           include_once "plantillas/head_declaration.inc.php";
        ?>

        <title>Entrada</title>

    </head>

    <body>
        <header>

        <?php 
            include_once "plantillas/navbar.inc.php";
            ?>
        </header>
        

        <div class="container">

            <div class="row dejar-espacio-entrada">

                <div class="col-md-12">

                    <div>
                        
                    
                        <div class="titulo-entrada-producto">

                            <h3>
                                <strong> <?php echo $entrada->obtener_titulo(); ?></strong>
                            </h3>

                        </div>
                    
                    <section>
                        <div class="cuerpo-entrada-producto">
                        
                            <div class="imagen-producto">
                            
                                <img class="imagen-entrada-producto" src="<?php echo $entrada->obtener_url();?>" alt="alt">
                            
                            </div>
                    
                            <div class="descripcion-producto">

                                <?php echo nl2br($entrada->obtener_descripcion()); ?>

                            </div>
                            </section>
                            <div class="boton-carrito">
                                
                                 <button type="button" class="btn btn-warning">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                </svg> 
                                    Añadir al carrito
                                </button>

                            

                            </div>

                        </div>

                    </div>
                
                </div>

            
            </div>
        
            <div class="comentarios-entrada">

                <?php 
                
                    $comentarios=RepositorioComentarios::obtener_comentarios(Conexion::obtener_conexion(),$id_entrada);

                    if(count($comentarios)) {

                        include_once "plantillas/comentarios_entrada.inc.php";

                    } else{

                        echo "<p>Todavía no hay comentarios de este producto.</p>";
                    }


                  

                ?>

            </div>


            <div class="productos-recomendados">
            
                    <?php
                        include_once "plantillas/productos_azar.inc.php";
                    ?>
            
            </div>


        </div>


         <?php 
        
          include_once "plantillas/footer.inc.php";
        
        ?>
        
    </body>
</html>