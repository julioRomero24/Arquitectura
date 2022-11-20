<?php

class Monitor
{
    public $codigoMonitor;
    
    public function __construct($codigoMonitor) {
        $this->codigoMonitor = $codigoMonitor;
    }

    public function getCodigoMonitor() {
        return $this->codigoMonitor;
    }
    ////////////////////////////////////////////////
    /*public function setCodigoMonitor($codigoMonitor): void {
        $this->codigoMonitor = $codigoMonitor;
    }*/
}