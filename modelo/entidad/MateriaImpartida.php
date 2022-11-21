<?php
class MateriaImpartida
{
    public $codigoMonitor;
    public $idMateria;

    public function __construct($codigoMonitor, $idMateria) {
        $this->codigoEstudiante = $codigoMonitor;
        $this->idMateria = $idMateria;
    }

    public function getCodigoMonitor() {
        return $this->codigoMonitor;
    }
    public function getIdMateria() {
        return $this->idMateria;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}