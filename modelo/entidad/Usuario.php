<?php

class Usuario
{
    public $codigo;
    public $nombre;
    public $apellido;
    public $fechaNacimiento;
    public $correo;
    public $contrasena;
    public $rol;
    
    public function __construct($codigo, $nombre, $apellido, $fechaNacimiento, $correo, $contrasena, $rol) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->correo = $correo;
        $this->contrasena = $contrasena;        
        $this->rol = $rol;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }    

    public function getRol() {
        return $this->rol;
    }
    ////////////////////////////////////////////////
    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido): void {
        $this->apellido = $apellido;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }

    public function setFechaNacimiento($fechaNacimiento): void {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function setRol($rol): void {
        $this->rol = $rol;
    }
    //////////////////////////////////////////////
    public function esAdministrador(){
        if($this->idusuario==1)
            return true;
        return false;
    }
    public function esMonitor(){
        if($this->rol=="monitor")
            return true;
        return false;
    }
}