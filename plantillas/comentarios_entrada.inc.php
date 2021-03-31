<?php

include_once "app/Conexion.inc.php";
include_once "app/RepositorioEntradas.inc.php";
include_once "app/EscritorEntradas.inc.php";
include_once "app/RepositorioUsuarios.inc.php";

?>

<div class="row">

    <div class="col-md-12">
    
    <button type="button" role="button" class="btn btn-dark form-control" data-bs-toggle="collapse" data-bs-target="#comentarios" aria-expanded="false">
      <?php
        echo "Ver comentarios(" . count($comentarios) . ")";
      ?>
    </button>

        <br>
        <br>

        <div class="collapse" id="comentarios">
        
            <?php 
            
                for($i=0; $i<count($comentarios); $i++) {

                    $comentario=$comentarios[$i]; 

                    ?>

                    <div class="row">
                    
                        <div class="col-md-12">
                        
                            <div class="titulo-comentario">
                            
                                <?php 
                                
                                    echo $comentario->obtener_titulo();                                                              
                                
                                ?>
                            
                            </div>
                            
                            
                            
                            <div class="cuerpo-comentario">

                                 <div class="col-md-2">

                                    <strong>

                                        <u>
                                    
                                            <?php 
                                            
                                            $usuario=RepositorioUsuarios::obtener_usuario_por_id(Conexion::obtener_conexion(), $comentario->obtener_usuario_id()); 

                                                echo $usuario->getNombreUsuario();
                                            
                                            
                                            ?>

                                        </u>

                                    </strong> 

                                </div>

                                <div class="col-md-10">
                                
                                    <?php
                                    
                                        echo nl2br($comentario->obtener_texto());
                                    
                                    ?>
                                
                                
                                </div>

                                 
                            
                            </div>
                        
                        </div>
                    
                    </div>



                    <?php


                }
            
            
            
            ?>
        
        </div>
    
    </div>

</div>