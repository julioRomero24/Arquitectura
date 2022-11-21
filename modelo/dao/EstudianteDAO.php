<?php

require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Estudiante.php");

class EstudianteDAO {
    public function registrarEstudiante($codigoUsuario){
        $data_source = new DataSource();
        $stmt1 = "INSERT INTO Estudiante VALUES (:Codigo)";
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':Codigo' => $codigoUsuario
            )
        );
        return $resultado;
    }
}
