<?php

require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Contrato.php");

class ContratoDAO {
    public function registrarContrato(Contrato $contrato){
        $data_source = new DataSource();

        $stmt1 = "INSERT INTO Contrato VALUES (NULL, :fechacontrato, :lugar, :horainicio, :horafin, :precio, :descripcion, :codigomonitor, :codigoestudiante, :NULL, :NULL)";
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':fechacontrato' => $contrato->getFechaContrato(),
            ':lugar' => $contrato->getLugar(),
            ':horainicio' => $contrato->getHoraInicio(),
            ':horafin' => $contrato->getHoraFin(),
            ':precio' => $contrato->getPrecio(),
            ':descripcion' => $contrato->getDescripcion(),
            ':codigomonitor' => $contrato->getCodigoMonitor(),
            ':codigoestudiante' => $contrato->getCodigoEstudiante()
            )
        );
        return $resultado;
    }
}
