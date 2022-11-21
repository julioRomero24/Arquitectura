<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form method="post" action="../controlador/accion/accUsuario/act_login.php" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Codigo" name="codigo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button><br><br>
                    <h5 id="btn__olvido">¿Has olvidado tu contraseña?</h5><br>
                </form>

                <form action="" class="formulario__olvido">
                    <br>
                    <h2>Recuperar Contraseña</h2>
                    <p>Ingresa tu emali y le llegará un enlace para poder cambiar a una nueva contraseña</p>
                    <input type="email" placeholder="Correo Electronico" name="correo">
                    <!--Faltaria un mensaje de alerta avisando de que ya se le envio el enlace-->
                    <button>Enviar</button> <br><br>
                </form>

                <!--Register-->
                <form method="post" action="../controlador/accion/accUsuario/act_registrarUsuario.php" class="formulario__register">
                    <h2 class="titulo_register">Regístrarse</h2>
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="Apellido" name="apellido">
                    <input type="date" id="colorDate" placeholder="Fecha de Nacimiento" name="fechanacimiento">
                    <select class="Rol" name="rol">
                      <option disabled selected="">Seleccione un rol</option>
                      <option>Estudiante</option>
                      <option>Monitor</option>
                    </select>
                    <input type="email" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Codigo" name="codigo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="js/login.js"></script>

</body>
</html>