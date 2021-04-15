<?php 
session_start();
include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioEntradas.inc.php";
include_once "app/RepositorioUsuarios.inc.php";
include_once "app/ControlSesion.inc.php";
include_once "app/Entrada.inc.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>

    <?php include_once "plantillas/head_declaration.inc.php"; ?>

    <title>Carrito</title>
</head>
<body class="body-carro">
    <header>

        <?php include_once "plantillas/navbar.inc.php"; ?>


    </header>

    <div class="h1-carro">

    <h1>Tu carrito tiene estos artículos:</h1>

    </div>

    <?php
    
        
        $entradas_carrito=RepositorioEntradas::obtener_entradas_carrito(Conexion::obtener_conexion(),$_SESSION["id_usuario"]);

        if(count($entradas_carrito)) {

            for($i=0;$i<count($entradas_carrito);$i++) {

                $id_entrada_obtenida=$entradas_carrito[$i];
                
                $entrada_obtenida=RepositorioEntradas::obtener_entrada_por_id(Conexion::obtener_conexion(),$id_entrada_obtenida);

                ?>

                <div class="container">
                
                    <div class="row dejar-espacio-entrada2">
                    
                        <div class="col-md-12">

                            <div>
                                
                                <div class="section2">
                                <div class="titulo-entrada-producto2">

                                    <h3>
                                        <strong> <?php echo $entrada_obtenida->obtener_titulo(); ?></strong>
                                    </h3>

                                </div>
                                    <div class="cuerpo-entrada-producto">

                                        <div class="imagen-producto">
                                    
                                            <img class="imagen-entrada-producto2" src="<?php echo $entrada_obtenida->obtener_url();?>" alt="alt">
                                
                                        </div>


                                    </div>

                                    <div class="descripcion-producto">

                                    <?php echo nl2br($entrada_obtenida->obtener_descripcion()); ?>

                                    </div>

                                </div>

                                <div class="boton_carrito">

                                   <a href="<?php echo RUTA_QUITAR_CARRITO . "?id_entrada=" . $entrada_obtenida->obtener_id(); ?>">

                                       <button class="btn btn-dark">Quitar producto</button>

                                    </a>

                                </div>


                            </div>

                        </div>

                    </div>
                
                </div>




                <?php 
            }

            ?>

           
<div class="forma-de-pago">
        
        <h3>Forma de pago: contra reembolso</h3>

        <h3>Envío: de 7 a 20 días</h3>
    <br>
        <h4>El pedido se enviará a la dirección que nos facilitaste en el formulario de registro</h4>
        
        </div>
<div class="boton-pedido">
            <a href="<?php echo RUTA_REALIZAR_PEDIDO ?>">
                
            
             <button class="btn btn-warning btn-lg">Realizar pedido</button>
        
            </a>

            </div>


            

            

           
            <?php

        }else {

            ?>

            <div class="carrito-vacio">

                <p>

                    Tu carrito está vacío
                
                </p>


            </div>

            <?php

            
        }
    
            ?>
            
           

    

   

    <?php include_once "plantillas/footer.inc.php"; ?>

</body>
</html>