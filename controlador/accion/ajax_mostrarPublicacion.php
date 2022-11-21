<?php
   session_start();
   
   require_once (__DIR__.'/../mdb/mdbPublicacion.php');
    
   $pensiones = verPublicaciones();
   
   echo json_encode($pensiones);  
   //echo 1;