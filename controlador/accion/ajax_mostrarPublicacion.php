<?php
   session_start();
   
   require_once (__DIR__.'/../mdb/mdbPublicacion.php');
    
   $publicaciones = verPublicaciones();
   
   echo json_encode($publicaciones);  
   //echo 1;