<?php

class Mensaje
{
    public $idEnvia;
    public $idRecibe;
    public $contenido;
    public $fechaEnvio;
    public $fechaLeido;
    
    public function __construct($idEnvia, $idRecibe, $contenido, $fechaEnvio, $fechaLeido) {
        $this->idEnvia = $idEnvia;
        $this->idRecibe = $idRecibe;
        $this->contenido = $contenido;
        $this->fechaEnvio = $fechaEnvio;
        $this->fechaLeido = $fechaLeido;
    }

    public function getIdEnvia() {
        return $this->idEnvia;
    }
    public function getIdRecibe() {
        return $this->idRecibe;
    }
    public function getContenido() {
        return $this->contenido;
    }
    public function getFechaEnvio() {
        return $this->fechaEnvio;
    }
    public function getFechaLeido() {
        return $this->fechaLeido;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}
