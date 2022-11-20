<?php
require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos

require_once(__DIR__."/../../modelo/dao/PublicacionDAO.php");

function registrarPublicacion($Publicaicion){
    $dao=new PublicacionDAO();
    $publi = $dao->registrarPublicacion($Publicaicion);
    return $publi;
}
function eliminarPublicacion($idPublicacion){
    $dao=new PublicacionDAO();
    $dao->eliminarPublicacion($idPublicacion);
}
function verPublicaciones(){
    $dao=new PublicacionDAO();
    $publis=$dao->verPublicaciones();
    return $publis;
}