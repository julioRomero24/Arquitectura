<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();

    //Con require_once se incluye el archivo mdbUsuario.php
    require_once (__DIR__."/../../mdb/mdbUsuario.php");
        
        //Se obtiene el correo y password del formulario del login,
        //los datos son recibidos por el método POST
        $codigo = $_POST['codigo'];
        $contrasena = $_POST['contrasena'];

        //Se llama a la funcion autenticarUsuario() que esta en mdbUsuario.php
        $user = autenticarUsuario($codigo, $contrasena);
        
        if($user != null){
            //Si el usuario fue encontrado, se guarda su ID en una sesión con $_SESSION
            
            $_SESSION['CODIGO'] = $user->getCodigo();
            $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();
            //linea nueva
            
            /*if($user->esAdministrador() == 1){
                header("Location: ../../../vista/administrarUsuario.php");                
            }else{
                header("Location: ../../../vista/index.php");
            }*/
            header("Location: ../../../vista/principalUsuario.php");
        }else{
            //Si el usuario no existe se vuelve a mostrar el login
            header("Location: ../../../vista/login.html");
        }