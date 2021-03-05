<?php

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

    public function __construct($email, $nombre, $password, $error_password2, $conexion) {

        $this->nombre="";

        $this->error_nombre=$this->validar_nombre($conexion, $nombre);

        $this->email="";

        $this->error_email=$this->validar_email($conexion, $email);


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
        
    }

   

}