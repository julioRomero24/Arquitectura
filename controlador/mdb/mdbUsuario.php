<?php
//Con require_once se incluye el archivo UsuarioDAO.php
require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        
function autenticarUsuario($codigo, $contrasena){
        
        $dao=new UsuarioDAO();
        
        //Se llama al método autenticarUsuario que se encuentra en la clase
        //UsuarioDAO
        $user = $dao->autenticarUsuario($codigo, $contrasena);

        //Retorna el usuario si lo encontró, de lo contrario retorna null
        return $user;
    }

function registrarUsuario(Usuario $user){
    
    $dao=new UsuarioDAO();

    $user = $dao->registrarUsuario($user);

    return $user;
}

function verUsuarios(){
    $dao=new UsuarioDAO();

    $usuarios = $dao->verUsuarios();

    return $usuarios;
} 

function eliminarUsuario($idUsuario){
    $dao=new UsuarioDAO();
    $dao->eliminarUsuario($idUsuario);
}

function obtenerMonitoresPorMateria($nombreMateria){
    $dao=new UsuarioDAO();
    $Monitores=$dao->obtenerMonitoresPorMateria($nombreMateria);
    return $Monitores;
}
/*function verUsuarioPorId($idUsuario){
    $dao=new UsuarioDAO();
    $user = $dao->verUsuarioPorId($idUsuario);
    return $user;
}

function editarUsuario($usuario){
    $dao=new UsuarioDAO();
    $dao->editarUsuario($usuario);
}

function editarFotoUsuario($usuario){
    $dao=new UsuarioDAO();
    $dao->editarFotoUsuario($usuario);
}*/
