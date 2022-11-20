<?php

class Comentario
{
    public $idComentario;
    public $contenido;
    public $fecha;
    public $idPublicacion;
    public $idComentador;

    
    public function __construct($idComentario, $contenido, $fecha, $idPublicacion, $idComentador) {
        $this->idComentario = $idComentario;
        $this->contenido = $contenido;
        $this->fecha = $fecha;
        $this->idPublicacion = $idPublicacion;
        $this->idComentador = $idComentador;
    }

    public function getIdComentario() {
        return $this->idComentario;
    }
    public function getContenido() {
        return $this->contenido;
    }
    public function getFecha() {
        return $this->fecha;
    }
    public function getIdPublicacion() {
        return $this->idPublicacion;
    }
    public function getIdComentador() {
        return $this->idComentador;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}