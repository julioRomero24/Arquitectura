<?php

class Calificacion
{
    public $idCalificacion;
    public $puntaje;
    public $fechaCalificacion;
    public $comentario;
    
    public function __construct($idCalificacion, $puntaje, $fechaCalificacion, $comentario) {
        $this->idCalificacion = $idCalificacion;
        $this->puntaje = $puntaje;
        $this->fechaCalificacion = $fechaCalificacion;
        $this->comentario = $comentario;
    }

    public function getIdCalificacion() {
        return $this->idCalificacion;
    }
    public function getPuntaje() {
        return $this->puntaje;
    }
    public function getFechaCalificacion() {
        return $this->fechaCalificacion;
    }
    public function getComentario() {
        return $this->comentario;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}