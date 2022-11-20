<?php
class Publicacion
{
    public $idPublicacion;
    public $contenido;
    public $fecha;
    public $codigoEstudiante;
    public $idTema;
    public $idMateria;

    public function __construct($idPublicacion, $contenido, $fecha, $codigoEstudiante, $idTema, $idMateria) {
        $this->idPublicacion = $idPublicacion;
        $this->contenido = $contenido;
        $this->fecha = $fecha;
        $this->codigoEstudiante = $codigoEstudiante;
        $this->idTema = $idTema;
        $this->idMateria = $idMateria;
    }

    public function getIdPublicacion() {
        return $this->idPublicacion;
    }
    public function getContenido() {
        return $this->contenido;
    }
    public function getFecha() {
        return $this->fecha;
    }
    public function getCodigoEstudiante() {
        return $this->codigoEstudiante;
    }
    public function getIdTema() {
        return $this->idTema;
    }
    public function getIdMateria() {
        return $this->idMateria;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}