<?php
session_start();
include_once "app/config.inc.php";
include_once "app/Conexion.inc.php";
include_once "app/RepositorioUsuarios.inc.php";
include_once "app/ControlSesion.inc.php";
include_once "app/Entrada.inc.php";
include_once "app/Redirecciones.inc.php";


?>


<!DOCTYPE html>
<html lang="es">
<head>

    <?php include_once "plantillas/head_declaration.inc.php"; ?>

    <title>Perfil</title>
</head>
<body class="body-carro">
    <header>

        <?php include_once "plantillas/navbar.inc.php"; ?>


    </header>

    <div class="h1-carro">

    <h1>Estos son tus datos de perfil:</h1>

    </div>

    <?php
    
        
    $perfil_usuario=RepositorioUsuarios::obtener_usuario_por_id(Conexion::obtener_conexion(),$_SESSION["id_usuario"]);

        if(!empty($perfil_usuario)) {

            
                
                
                ?>

                <div class="container">
                
                    <div class="row dejar-espacio-entrada2">
                    
                        <div class="col-md-12">

                            <div>
                                
                                <div class="section2">
                                <div class="titulo-entrada-perfil">

                                    <h5>

                                    Tu nombre de usuario:
                                        <strong> <?php echo $perfil_usuario->getNombreUsuario(); ?></strong>
                                    </h5>

                                   

                                </div>
                                    

                                    <div class="titulo-entrada-perfil">

                                    <h5>
                                    Tu correo electrónico:
                                   <strong> <?php echo nl2br($perfil_usuario->getEmail()); ?></strong>
                                
                                    </h5>

                                    </div>

                                </div>

                                


                            </div>

                        </div>

                    </div>
                
                </div>




                <?php 
            }

            ?>

            <br>
            <br>
            <br>



        

        

    <?php include_once "plantillas/footer.inc.php"; ?>

</body>
</html>