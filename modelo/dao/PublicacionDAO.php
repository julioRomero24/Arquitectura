<?php

require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Publicacion.php");
require_once (__DIR__."/../entidad/Materia.php");
require_once (__DIR__."/../entidad/Tema.php");

class PublicacionDAO{
    public function registrarPublicacion(Publicacion $publicacion){
        $data_source = new DataSource();
        
        $idMateria=registrarMateria($publicacion->getIdMateria());
        $idTema=registrarTema($publicacion->getIdTema(),$idMateria);
        //Obtener resultado y validar que este bueno para seguir para id tema id materia
        //Si el primero esta bueno el que sigue puede que este malo, pero el primero ya habra ejecutado la consulta
        if($idMateria!=0 and $idTema!=0){
            $stmt1 = "INSERT INTO Publicacion VALUES (NULL,:Contenido,:fecha,:codigoEstudiante,:idTema,:idMateria)";

            $resultado = $data_source->ejecutarActualizacion($stmt1, array(
                ':Contenido' => $publicacion->getContenido(),
                ':fecha'=> $publicacion->getFecha(),
                ':codigoEstudiante'=>$publicacion->getCodigoEstudiante(),
                ':idTema' => $idTema,
                ':idMateria'=> $idMateria
                )
            );
            return $resultado;
        }
        else{
            return "Error al momento de registrar la materia o tema";
        }
        
    }

    public function eliminarPublicacion($idPublicacion){
        $data_source = new DataSource();
        
        $stmt1 = "DELETE FROM Publicacion WHERE idPublicacion = :idPublicacion"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idPublicacion' => $idPublicacion
            )
        ); 

      return $resultado;
    }

    public function verPublicaciones(){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Publicacion", NULL);

        $publicacion=null;
        $publicaciones=array();

        foreach($data_table as $indice => $valor){
            $publicacion = new Publicacion(
                $data_table[$indice]["idPublicacion"],
                $data_table[$indice]["contenido"],
                $data_table[$indice]["fecha"],
                $data_table[$indice]["codigoEstudiante"],
                $data_table[$indice]["idTema"],
                $data_table[$indice]["idMateria"]
            );
            array_push($publicaciones,$publicacion);
        }
        
        return $publicaciones;
    }
    
}
function registrarMateria($nombreMateria){
    $data_source = new DataSource();
    $stmt1="INSERT INTO Materia VALUES (NULL, :nombreMateria)";
    $resultado = $data_source->ejecutarActualizacionAux($stmt1, array(
        ':nombreMateria' => $nombreMateria
        )
    );
    return $resultado;
}
function registrarTema($nombreTema, $idMate){
    $data_source = new DataSource();
    $stmt1="INSERT INTO Tema VALUES (NULL, :nombreTema, :idMateria)";
    $resultado = $data_source->ejecutarActualizacionAux($stmt1, array(
        ':nombreTema' => $nombreTema,
        ':idMateria' => $idMate
        )
    );
    return $resultado;
}