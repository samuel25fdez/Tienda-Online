<?php

include_once "RepositorioEntradas.inc.php";
include_once "Entrada.inc.php";



class EscritorEntradas {

    public static function escribir_entradas() {

        $entradas=RepositorioEntradas::obtener_entradas_mas_nuevas(Conexion::obtener_conexion());

        if(count($entradas)) {

            foreach($entradas as $entrada) {

                self::escribir_entrada($entrada);

            }

        }

    }

    public static function escribir_entrada($entrada) {

        if(!isset($entrada)) {

            return;

        }

        ?>

        <div class="row entrada-cuerpo">

            <div class="col-md-12">


                <div class="titulo-entrada"> 

                    <?php 
                    
                        echo $entrada->obtener_titulo();

                    ?>
                
                </div>

                <div class="cuerpo-entrada">                 

                    <div>
                    
                        <p>

                            <?php 
                            
                                echo nl2br(self::resumir_texto($entrada->obtener_descripcion()));
                                 
                            ?>

                        </p>     


                    </div>

                    <div>
                    
                        <img class="imagen-longitud" src="<?php echo $entrada->obtener_url();?>" alt="alt">
                    
                    </div>

                    <br>

                    <div>

                        <?php 
                        
                            $url_entrada=$entrada->obtener_url_entrada();
                        
                        ?>

                        <a href="<?php echo RUTA_ENTRADA . "?url=" . $url_entrada ?>" role="button" class="btn btn-dark">Ver producto</a>
                    
                    </div>
                
                </div>

                
            

            
            </div>
        

        
        </div>

        <?php
    }

    public static function resumir_texto($texto) {

        $longitud_maxima=50;
        $resultado="";

        if(strlen($texto)>$longitud_maxima) {

            $resultado=substr($texto,0,$longitud_maxima);

            $resultado .= "...";

            


        }else{

            $resultado=$texto;
        }

        return $resultado;

    }

}