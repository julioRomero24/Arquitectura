<?php

class Materia
{
    public $idMateria;
    public $nombre;
    
    public function __construct($idMateria, $nombre) {
        $this->idMateria = $idMateria;
        $this->nombre = $nombre;
    }

    public function getIdMateria() {
        return $this->idMateria;
    }
    public function getNombre() {
        return $this->nombre;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}
