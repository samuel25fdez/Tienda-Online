<?php 

include_once "RepositorioUsuarios.inc.php";

class ValidadorLogin {

    private $usuario;
    
    private $error;

    public function __construct($email, $password, $conexion) {

        $this->error="";

        if(!$this->variable_iniciada($email) || !$this->variable_iniciada($password)) {

            $this->error="Tienes que introducir tu email y contraseña para iniciar sesión.";

            $this->usuario=null;

        }else {

            $this->usuario= RepositorioUsuarios::obtener_usuario_por_email($conexion, $email);

            if(is_null($this->usuario) || !password_verify($password, $this->usuario->getPassword())) {

                $this->error="Datos incorrectos.";
            }

           
        }




    }

    public function variable_iniciada($var) {

        if(isset($var) && !empty($var)) {

            return true;
        }else {

            return false;
        }
    }

    public function obtener_usuario() {

        return $this->usuario;
    }

    public function obtener_error() {

        return $this->error;
    }

    public function mostrar_error() {

        if($this->error!=="") {

            echo "<br> <div class=\"alert alert-danger\" role=\"alert\">";

            echo $this->error; 
            
            echo "</div> <br>";
        }
    }




}

