<?php
   //error_reporting(E_ALL);

   //ini_set('display_errors', '1');

    session_start();
    
    require_once (__DIR__."/../../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../../modelo/entidad/Usuario.php");

        $codigo=$_POST['codigo'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fechanacimiento = $_POST['fechanacimiento'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $rol = $_POST['rol'];
        
 
        /*if(isset($_POST['administrador'])) {
            $usuario = new Usuario(NULL, $nombre, $correo, $password, $telefono, $fechanac, $sexo, $peso, $administrador);
            registrarUsuario($usuario);
            header("Location: ../../vista/administradorUsuarios.php");
        }else{*/
            $user = new Usuario($codigo, $nombre, $apellido, $fechanacimiento,$correo, $contrasena, $rol);
            $registro = registrarUsuario($user);
            
            if($registro!=0)
                header("Location: ../../../vista/loguin.html?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../../vista/loguin.html?msg="+$registro);
        //}

        
        
