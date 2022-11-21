<?php

require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Materia.php");

class MateriaDAO {
    public function idPorNombre($nombreMateria){
        $data_source = new DataSource();

        $data_table= $data_source->ejecutarConsulta("SELECT * FROM Materia WHERE nombre =:nombreMateria", array(':nombreMateria'=>$nombreMateria));

        $materia=null;
        if(count($data_table)==1){ 
            $materia = new Materia(
                $data_table[0]["idMateria"],
                $data_table[0]["nombre"]
            );
            return $materia->getIdMateria();
        }
        return "Error al momento de obtener el nombre por materia";
    }
}