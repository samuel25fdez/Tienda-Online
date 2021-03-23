<?php 

class Entrada {

    private $id;
    private $usuario_id;
    private $titulo;
    private $descripcion;
    private $fecha;
    private $url_img;

    public function __construct($id,$usuario_id,$titulo,$descripcion,$fecha,$url_img) {

        $this->id=$id;
        $this->usuario_id=$usuario_id;
        $this->titulo=$titulo;
        $this->descripcion=$descripcion;
        $this->fecha=$fecha;
        $this->url_img=$url_img;

    }

    public function obtener_id() {

        return $this->id;
    }
    public function obtener_usuario_id() {

        return $this->usuario_id;
    }
    public function obtener_titulo() {

        return $this->titulo;
    }
    public function obtener_descripcion() {

        return $this->descripcion;
    }
    public function obtener_fecha() {

        return $this->fecha;
    }
    public function obtener_url() {

        return $this->url_img;
    }

    public function cambiar_titulo($nuevo_titulo) {

        $this->titulo=$nuevo_titulo;

    }
    public function cambiar_url($nuevo_url) {

        $this->url_img=$nuevo_url;

    }
    public function cambiar_descripcion($nueva_desc) {

        $this->descripcion=$nueva_desc;

    }


}
