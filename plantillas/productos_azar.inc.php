<?php

include_once "app/Conexion.inc.php";
include_once "app/RepositorioEntradas.inc.php";
include_once "app/EscritorEntradas.inc.php";
include_once "app/config.inc.php";

$productos_azar=RepositorioEntradas::obtener_productos_azar(Conexion::obtener_conexion(),3);



?>

<div class="row">

    <div class="col-md-12">

        <br>
        <hr style="height:10px" color="white">
        <div class="h3-titulo">
        <h3>PRODUCTOS RECOMENDADOS</h3>
        </div>
        <br>

    </div>



    <?php 
    
        for($i=0; $i<count($productos_azar); $i++) {

            $producto_azar=$productos_azar[$i];

            ?>

                <div class="col-md-4">

                    <div>

                        <div class="titulo-entrada-recomendados">

                            <?php echo $producto_azar->obtener_titulo(); ?>

                        </div>

                        <div class="cuerpo-entrada-recomendados">

                            <div>
                        
                                <p>

                                    <?php 
                                    
                                        echo nl2br(EscritorEntradas::resumir_texto($producto_azar->obtener_descripcion()));
                                        
                                    ?>

                                </p>     


                            </div>

                            <div>
                        
                                <img class="imagen-longitud-recomendados" src="<?php echo $producto_azar->obtener_url();?>" alt="alt">
                    
                            </div>

                            <br>

                            <div class="boton-recomendados">

                                <?php  $url_entrada=$producto_azar->obtener_url_entrada(); ?>

                                <a class="btn btn-dark" role="button" href="<?php echo RUTA_ENTRADA . "?url=" . $url_entrada ?>">Ver producto</a>

                            </div>

                        </div>

                    </div>

                </div>

            <?php



        }
    
    
    ?>



</div>