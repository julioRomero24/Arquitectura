<?php
   session_start();
   
   require_once (__DIR__.'/../mdb/mdbUsuario.php');
    
   $materia=filter_input(INPUT_POST,'materia');

   $monitores = obtenerMonitoresPorMateria($materia);
   
   /*$vector=["materia" => $materia];
   echo json_encode($vector);*/

   echo json_encode($monitores);  
   //echo 1;