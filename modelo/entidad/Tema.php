<?php

class Tema
{
    public $idTema;
    public $Nombre;
    public $idMateria;
    
    public function __construct($idTema, $Nombre, $idMateria) {
        $this->idTema = $idTema;
        $this->Nombre = $Nombre;
        $this->idMateria = $idMateria;
    }

    public function getIdTema() {
        return $this->idTema;
    }
    public function getNombre() {
        return $this->Nombre;
    }
    public function getIdMateria() {
        return $this->idMateria;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}