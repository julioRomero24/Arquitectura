<?php

    require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
    require_once (__DIR__."/../entidad/Tema.php");

class TemaDAO {
    public function idPorNombre($nombreTema){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT nombre FROM Tema WHERE nombre = :nombreTema", array(':nombreTema'=>$nombreTema));

        $tema=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el usuario en la base de datos
        if(count($data_table)==1){
            $tema = new Tema(
                $data_table[0]["idtema"],
                $data_table[0]["nombre"],
                $data_table[0]["idmateria"]
            );
            return $tema->getIdTema();
        }
        return "Error al momento de obtener el nombre por id del tema";
    }
}