<?php

class Contrato
{
    public $idContrato;
    public $fechaContrato;
    public $lugar;
    public $horaInicio;
    public $horaFin;
    public $precio;
    public $descripcion;
    public $codigoMonitor;
    public $codigoEstudiante;
    public $idEstado;
    public $idCalificacion;
    
    public function __construct($idContrato, $fechaContrato, $lugar, $horaInicio, $precio, $descripcion, $codigoMonitor, $codigoEstudiante, $idEstado, $idCalificacion) {
        $this->idContrato = $idContrato;
        $this->fechaContrato = $fechaContrato;
        $this->lugar = $lugar;
        $this->horaInicio = $horaInicio;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->codigoMonitor = $codigoMonitor;
        $this->codigoEstudiante = $codigoEstudiante;
        $this->idEstado = $idEstado;
        $this->idCalificacion = $idCalificacion;
    }

    public function getIdContrato() {
        return $this->idContrato;
    }
    public function getFechaContrato() {
        return $this->fechaContrato;
    }
    public function getLugar() {
        return $this->lugar;
    }
    public function getHoraInicio() {
        return $this->horaInicio;
    }
    public function getHoraFin() {
        return $this->horaFin;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }
    public function getCodigoMonitor() {
        return $this->codigoMonitor;
    }
    public function getCodigoEstudiante() {
        return $this->codigoEstudiante;
    }
    public function getIdEstado() {
        return $this->idEstado;
    }
    public function getidCalificacion() {
        return $this->idCalificacion;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoEstudiante($codigoEstudiante): void {
        $this->codigoEstudiante = $codigoEstudiante;
    }*/
}