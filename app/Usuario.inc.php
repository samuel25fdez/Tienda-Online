<?php

class Usuario {

    private $id;
    private $nombre_usuario;
    private $email;
    private $password;
    private $fecha_registro;

    public function __construct($id,$nombre_usuario,$email,$password,$fecha_registro) {

        $this->id=$id;
        $this->nombre_usuario=$nombre_usuario;
        $this->email=$email;
        $this->password=$password;
        $this->fecha_registro=$fecha_registro;
        
    }

    public function getId() {

        return $this->id;


    }

    public function getNombreUsuario() {

        return $this->nombre_usuario;


    }

    public function getEmail() {

        return $this->email;


    }

    public function getPassword() {

        return $this->password;


    }

    public function getFecha() {

        return $this->fecha_registro;


    }

    public function setNombreUsuario($nuevo_nombre) {

        $this->nombre_usuario=$nuevo_nombre;


    }

    public function setEmail($nuevo_email) {

        $this->email=$nuevo_email;


    }

    public function setPassword($nuevo_password) {

        $this->password=$nuevo_password;


    }

    




}