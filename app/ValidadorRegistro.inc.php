<?php

include_once "RepositorioUsuarios.inc.php";

class ValidadorRegistro {

    private $aviso_inicio;
    private $aviso_cierre;

    private $email;
    private $nombre;
    private $password;

    private $error_email;
    private $error_nombre;
    private $error_password;
    private $error_password2;

    public function __construct($email, $nombre, $password, $password2, $conexion) {

        $this->nombre="";

        $this->error_nombre=$this->validar_nombre($conexion, $nombre);

        $this->email="";

        $this->error_email=$this->validar_email($conexion, $email);

        $this->password="";

        $this->error_password=$this->validar_password($password);

        $this->error_password2=$this->validar_password2($password, $password2);

        $this->aviso_inicio="<br> <div class=\"alert alert-danger\" role=\"alert\">";

        $this->aviso_cierre="</div>";

        if($this->error_password==="" && $this->error_password2==="") {

            $this->password=$password;
        }


    }

    public function variable_iniciada($var) {

        if(isset($var) && !empty($var)) {

            return true;
        }else {

            return false;
        }
    }

    public function validar_nombre($conexion, $nombre) {

        if($this->variable_iniciada($nombre)) {

            $this->nombre=$nombre;
        }else {

            return "Debes escribir un nombre de usuario.";
        }

        if(strlen($nombre)<6) {

            return "El nombre debe contener como mínimo 6 caracteres.";
        }
        if(strlen($nombre)>20) {

            return "El nombre de usuario debe contener 20 caracteres como máximo.";
        }
        if(RepositorioUsuarios::nombre_existe($conexion,$nombre)==true) {

            return "Este nombre de usuario ya existe, pruebe con otro.";
        }
        

        return "";
    } 

    public function validar_email($conexion, $email) {

        if($this->variable_iniciada($email)) {

            $this->email=$email;
        }else {

            return "Debes introducir un email.";
        }


        if(strlen($email)>40) {

            return "El email debe contener 40 caracteres como máximo.";
        }
        if(RepositorioUsuarios::email_existe($conexion,$email)==true) {

            return "Este email ya se encuentra registrado. Por favor introduzca otro email o intente <a href=\"#\"> recuperar su contraseña.</a>";
        }

        return "";
        
    }

    public function validar_password($password) {

        if($this->variable_iniciada($password)) {

           
        }else {

            return "Debes introducir una contraseña.";
        }

        if(strlen($password)<8) {

            return "La contraseña debe contener mínimo 8 caracteres.";
        }

        if(strlen($password)>20) {

            return "La contraseña debe contener 20 caracteres como máximo.";
        }

        return "";

        
    }

    public function validar_password2($password2, $password) {

        if($this->variable_iniciada($password2)) {

            

        }else {
            return "Debes repetir la contraseña.";
        }

        if(!$this->variable_iniciada($password)) {

            return "Debes introducir una contraseña.";
        }

        if($password!=$password2) {

            return "Las contraseñas deben ser iguales.";
        }
        return "";
    }


    public function obtener_nombre() {


        return $this->nombre;
    }

    public function obtener_email() {


        return $this->email;
    }

    public function obtener_password() {


        return $this->password;
    }

    public function obtener_error_nombre() {

        return $this->error_nombre;
    }

    public function obtener_error_email() {

        return $this->error_email;
    }

    public function obtener_error_password() {

        return $this->error_password;


    }

    public function obtener_error_password2() {

        return $this->error_password2;


    }
    public function mostrar_nombre()  {

        if($this->nombre!==""){

            echo "value=\"" . $this->nombre . "\"";
        }
    }

    public function mostrar_email() {

        if($this->email!=="") {

            echo "value=\"" . $this->email . "\"";
        }
    }

    

    public function mostrar_error_nombre() {

        if($this->error_nombre!=="") {

            echo $this->aviso_inicio . $this->error_nombre . $this->aviso_cierre;
        }
    }

    public function mostrar_error_email() {

        if($this->error_email!=="") {

            echo $this->aviso_inicio . $this->error_email . $this->aviso_cierre;
        }
    }

    public function mostrar_error_password() {

        if($this->error_password!=="") {

            echo $this->aviso_inicio . $this->error_password . $this->aviso_cierre;
        }
    }

    public function mostrar_error_password2() {

        if($this->error_password2!=="") {

            echo $this->aviso_inicio . $this->error_password2 . $this->aviso_cierre;
        }
    }

    public function registro_valido() {

        if($this->error_nombre==="" && $this->error_email==="" && $this->error_password==="" && $this->error_password2==="") {

            return true;

        }else {

            return false;
        }



    }
 
    
   

}