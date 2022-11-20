<?php

require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Monitor.php");
require_once ("MateriaDAO.php");

class MonitorDAO {
    /*public function monitorTema($idTema){
        $data_source = new DataSource();
        $tema=new TemaDAO();
        $idTema=$tema->idPorNombre();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Usuario WHERE rol=Monitor and nombre="+$nombreTema, NULL);

        $tema=null;
        $temas=array();

        foreach($data_table as $indice => $valor){
            $monitor = new Tema(
                $data_table[$indice]["idTema"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["idMateria"]
            );
            array_push($temas,$tema);
        }
        
    return $temas;
    }*/
    public function registrarMonitor($codigoUsuario){
        $data_source = new DataSource();
        $stmt1 = "INSERT INTO Monitor VALUES (:Codigo)";
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':Codigo' => $codigoUsuario
            )
        );
        return $resultado;
    }

    public function monitorMateria($nombreMateria){
        $data_source = new DataSource();
        $materia=new materiaDAO();
        $idMateria=$materia->idPorNombre($nombreMateria);
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM MateriaImpartida WHERE idMateria="+$idMateria, NULL);

        $materiaImpartida=null;
        $materiaImpartidas=array();
        foreach($data_table as $indice => $valor){
            $materiaImpartida = new materiaImpartida(
                $data_table[$indice]["codigoMonitor"],
                $data_table[$indice]["idMateria"]
            );
            array_push($materiaImpartidas,$materiaImpartida);
        }
        return $materiaImpartidas;
    }
}