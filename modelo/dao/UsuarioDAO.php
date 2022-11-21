<?php

require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Usuario.php");
require_once ("MonitorDAO.php");
require_once ("EstudianteDAO.php");

class UsuarioDAO {
     
     
	 public function autenticarUsuario($codigo, $contrasena){
        
        $data_source = new DataSource();

        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE codigo =:codigo AND contrasena = :contrasena",array(':codigo'=>$codigo,':contrasena'=>$contrasena));

        $user=null;
        if(count($data_table)==1){
            
            foreach($data_table as $indice => $valor){
                
                $user = new Usuario(
                        $data_table[$indice]["codigo"],
                        $data_table[$indice]["nombre"],
                        $data_table[$indice]["apellido"],
                        $data_table[$indice]["fechanacimiento"],
                        $data_table[$indice]["correo"],
                        $data_table[$indice]["contrasena"],
                        $data_table[$indice]["rol"]
                        );
            }
        }
        
        return $user;
    }    

    public function registrarUsuario(Usuario $user){
        $data_source = new DataSource();
        $resultAux=0;
        $stmt1 = "INSERT INTO Usuario VALUES (:codigo,:nombre,:apellido,:fechanacimiento,:correo,:contrasena,:rol)";

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':codigo' => $user->getCodigo(),
            ':nombre' => $user->getNombre(),
            ':apellido'=> $user->getApellido(),
            ':fechanacimiento'=>$user->getFechaNacimiento(),
            ':correo' => $user->getCorreo(),
            ':contrasena' =>$user->getContrasena(),
            ':rol'=>$user->getRol()
            )
        ); 

        if ($user->getRol()=='Monitor'){
            $monitor=new monitorDAO();
            $resultAux=$monitor->registrarMonitor($user->getCodigo());

            /*$stmt1 = "INSERT INTO Monitor VALUES (:codigoMonitor)";
            $resultAux = $data_source->ejecutarActualizacion($stmt1, array(
                ':codigoMonitor' => $user->getCodigo()
                )
            );*/ 
        }
        else{            
            $estudiante=new estudianteDAO();
            $resultAux=$estudiante->registrarEstudiante($user->getCodigo());
            /*$stmt1 = "INSERT INTO Estudiante VALUES (:codigoEstudiante)";
            $resulAux = $data_source->ejecutarActualizacion($stmt1, array(
                ':codigoEstudiante' => $user->getCodigo()
                )
            );*/ 
        }
        if($resultAux>0){
            return $resultado;
        }
        else{
            return "Error al momento de insertar en la tabla estudiante o monitor";
        }
        
    }

    

    public function verUsuarios(){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Usuario", NULL);

        $usuario=null;
        $usuarios=array();

        foreach($data_table as $indice => $valor){
            $usuario = new Usuario(
                $data_table[$indice]["codigo"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["apellido"],
                $data_table[$indice]["fechanacimiento"],
                $data_table[$indice]["correo"],
                $data_table[$indice]["contrasena"],
                $data_table[$indice]["rol"]
            );
            array_push($usuarios,$usuario);
        }
        
        return $usuarios;
    }

    public function eliminarUsuario($codigo){
        $data_source = new DataSource();
        
        $stmt1 = "DELETE FROM Usuario WHERE codigo = :codigo"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':codigo' => $codigo
            )
        ); 

      return $resultado;
    }
    
    public function obtenerMonitoresPorMateria($nombreMateria){
        $data_source = new DataSource();
        
        $monitor=new MonitorDAO();
        $materiaImpartidas=$monitor->monitorMateria($nombreMateria);
        $usuario=NULL;
        $usuarios=array();
        foreach($materiaImpartidas as $indice => $valor){
            $data_table =$data_source->ejecutarConsulta("SELECT * FROM Usuario WHERE codigo=:codigoMonitor", array(':codigoMonitor'=>$valor->getCodigoMonitor()));
            //Si $data_table retornó una fila, quiere decir que se encontro el usuario en la base de datos
            if(count($data_table)==1){
                $usuario = new Usuario(
                    $data_table[0]["codigo"],
                    $data_table[0]["nombre"],
                    $data_table[0]["apellido"],
                    $data_table[0]["fechanacimiento"],
                    $data_table[0]["correo"],
                    $data_table[0]["contrasena"],
                    $data_table[0]["rol"]
                );
                array_push($usuarios,$usuario);
            }
        }
        return $usuarios;
    }
    /*public function verUsuarioPorId($idUsuario){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Usuario WHERE idusuario = :idUsuario", array(':idUsuario'=>$idUsuario));

        $usuario=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el usula base de datos
        if(count($data_table)==1){ario en 
            $usuario = new Usuario(
                $data_table[0]["idusuario"],
                $data_table[0]["foto"],
                $data_table[0]["nombre"],
                $data_table[0]["apellido"],
                $data_table[0]["fechanacimiento"],
                $data_table[0]["rol"],
                $data_table[0]["correo"],
                $data_table[0]["usuario"],
                $data_table[0]["contrasena"],
                $data_table[0]["sexo"]
            );
        }

        
    return $usuario;
    }*/

    /*public function editarUsuario($usuario){
        $data_source = new DataSource();
        
        $stmt1 = "UPDATE Usuario SET nombre = :nombre, apellido=:apellido, fechanacimiento = :fechanacimiento, rol = :rol  correo = :correo, usuario=:usuario, contrasena = :contrasena, sexo = :sexo  WHERE id = :idUsuario"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $usuario->getNombre(),
            ':apellido'=> $usuario->getUsuario(),
            ':fechanacimiento'=>$usuario->getFechaNacimiento(),
            ':rol'=>$usuario->getRol(),
            ':correo' => $usuario->getCorreo(),
            ':usuario'=>$usuario->getUsuario(),
            ':contrasena' => $usuario->getContrasena(),
            ':sexo'=>$usuario->getSexo(),
            ':idUsuario' => $usuario->getIdusuario()
            )
        ); 

      return $resultado;
    }*/
    /*public function editarUsuario($usuario){
        $data_source = new DataSource();
        
        $stmt1 = "UPDATE Usuario SET nombre = :nombre, apellido=:apellido, correo = :correo, usuario=:usuario, contrasena = :contrasena, sexo = :sexo  WHERE idusuario = :idUsuario"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $usuario->getNombre(),
            ':apellido'=> $usuario->getApellido(),
            ':correo' => $usuario->getCorreo(),
            ':usuario'=>$usuario->getUsuario(),
            ':contrasena' => $usuario->getContrasena(),
            ':sexo'=>$usuario->getSexo(),
            ':idUsuario' => $usuario->getIdusuario()
            )
        ); 

      return $resultado;
    }*/
}



