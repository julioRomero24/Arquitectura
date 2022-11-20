<?php
class Estado
{
    public $idEstado;
    public $nombre;
    public $descripcion;

    public function __construct($idEstado, $nombre, $descripcion) {
        $this->codigoEstudiante = $idEstado;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function getIdEstado() {
        return $this->idEstado;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}