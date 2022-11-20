<?php

class Estudiante
{
    public $codigoEstudiante;
    
    public function __construct($codigoEstudiante) {
        $this->codigoEstudiante = $codigoEstudiante;
    }

    public function getCodigoEstudiante() {
        return $this->codigoEstudiante;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}