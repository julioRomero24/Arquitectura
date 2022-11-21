<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbPublicacion.php');

    $codigoEstudiante=filter_input(INPUT_POST,'idCodigo');
    $fecha=date('d-m-Y');
    $contenido = filter_input(INPUT_POST,'contenido');
    $materia = filter_input(INPUT_POST,'materia');
    $tema = filter_input(INPUT_POST,'tema');
    
    $publicacion=new Publicacion(NULL, $contenido, $fecha, $codigoEstudiante, $tema, $materia);
    $estado=0;
    $estado = registrarPublicacion($publicacion);
    if($estado!=0){
        echo 1;
    }
    else{
        echo 0;
    }
    /* $vector = [
        "codigo" => $codigoEstudiante,
        "fecha" => $fecha,
        "contenido" => $contenido,
        "materia" => $materia,
        "tema" => $tema
    ];
    echo json_encode($vector);*/
        