<?php



class Comentario {

    private $id;
    private $usuario_id;
    private $entrada_id;
    private $titulo;
    private $texto;
    private $fecha;
    

    public function __construct($id,$usuario_id,$entrada_id,$titulo,$texto,$fecha) {

        $this->id=$id;
        $this->usuario_id=$usuario_id;
        $this->entrada_id=$entrada_id;
        $this->titulo=$titulo;
        $this->texto=$texto;
        $this->fecha=$fecha;
        

    }

    public function obtener_id() {

        return $this->id;
    }
    public function obtener_usuario_id() {

        return $this->usuario_id;
    }
    public function obtener_entrada_id(){

        return $this->entrada_id;
    }
    public function obtener_titulo() {

        return $this->titulo;
    }
    public function obtener_texto() {

        return $this->texto;
    }
    public function obtener_fecha() {

        return $this->fecha;
    }
    public function cambiar_titulo($nuevo_titulo) {

        $this->titulo=$nuevo_titulo;

    }
    public function cambiar_texto($nuevo_texto) {

        $this->texto=$nuevo_texto;

    }


}
