CREATE TABLE `Usuario` (
	`codigo` INT(10) NOT NULL,
	`nombre` varchar(255) NOT NULL,
	`apellido` varchar(255) NOT NULL,
	`fechaNacimiento` DATE NOT NULL,
	`correo` varchar(255) NOT NULL,
	`contrasena` varchar(255) NOT NULL,
	`rol` varchar(255) NOT NULL,
	PRIMARY KEY (`codigo`)
);

CREATE TABLE `Monitor` (
	`codigoMonitor` INT(10) NOT NULL,
	PRIMARY KEY (`codigoMonitor`)
);

CREATE TABLE `Estudiante` (
	`codigoEstudiante` INT(10) NOT NULL,
	PRIMARY KEY (`codigoEstudiante`)
);

CREATE TABLE `Mensaje` (
	`idEnvia` INT(10) NOT NULL,
	`idRecibe` INT(10) NOT NULL,
	`contenido` varchar(255) NOT NULL,
	`fechaEnvio` DATETIME NOT NULL,
	`fechaLeido` DATETIME,
	PRIMARY KEY (`idEnvia`,`idRecibe`)
);

CREATE TABLE `Contrato` (
	`idContrato` INT(100) NOT NULL AUTO_INCREMENT,
	`fechaContrato` DATE NOT NULL,
	`lugar` varchar(255) NOT NULL,
	`horaInicio` TIME NOT NULL,
	`horaFin` TIME NOT NULL,
	`precio` INT(100) NOT NULL,
	`descripcion` varchar(255) NOT NULL,
	`codigoMonitor` INT(10) NOT NULL,
	`codigoEstudiante` INT(10) NOT NULL,
	`idEstado` INT(100) NOT NULL,
	`idCalificacion` INT(100) NOT NULL,
	PRIMARY KEY (`idContrato`)
);

CREATE TABLE `Estado` (
	`idEstado` INT(100) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) NOT NULL,
	`descripcion` varchar(255) NOT NULL,
	PRIMARY KEY (`idEstado`)
);

CREATE TABLE `Calificacion` (
	`idCalificacion` INT(100) NOT NULL,
	`puntaje` INT(100) NOT NULL,
	`fechaCalificacion` DATETIME NOT NULL,
	`comentario` varchar(255) NOT NULL,
	PRIMARY KEY (`idCalificacion`)
);

CREATE TABLE `Materia` (
	`idMateria` INT(100) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) NOT NULL,
	PRIMARY KEY (`idMateria`)
);

CREATE TABLE `MateriaImpartida` (
	`codigoMonitor` INT(10) NOT NULL,
	`idMateria` INT(10) NOT NULL,
	PRIMARY KEY (`codigoMonitor`,`idMateria`)
);

CREATE TABLE `Publicacion` (
	`idPublicacion` INT(100) NOT NULL AUTO_INCREMENT,
	`contenido` varchar(255) NOT NULL,
	`fecha` DATETIME NOT NULL,
	`codigoEstudiante` INT(10) NOT NULL,
	`idTema` INT(100) NOT NULL,
	`idMateria` INT(100) NOT NULL,
	PRIMARY KEY (`idPublicacion`)
);

CREATE TABLE `Tema` (
	`idTema` INT(100) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) NOT NULL,
	`idMateria` INT(100) NOT NULL,
	PRIMARY KEY (`idTema`)
);

CREATE TABLE `Comentario` (
	`idComentario` INT(100) NOT NULL AUTO_INCREMENT,
	`contenido` varchar(255) NOT NULL,
	`fecha` DATETIME NOT NULL,
	`idPublicacion` INT(100) NOT NULL,
	`idComentador` INT(100) NOT NULL,
	PRIMARY KEY (`idComentario`)
);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla comentario
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `idcontrato` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `idPublicacion` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `idCalificacion` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `idTema` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `idMateria` int(100) NOT NULL AUTO_INCREMENT;



--

ALTER TABLE `Monitor` ADD CONSTRAINT `Monitor_fk0` FOREIGN KEY (`codigoMonitor`) REFERENCES `Usuario`(`codigo`);

ALTER TABLE `Estudiante` ADD CONSTRAINT `Estudiante_fk0` FOREIGN KEY (`codigoEstudiante`) REFERENCES `Usuario`(`codigo`);

ALTER TABLE `Mensaje` ADD CONSTRAINT `Mensaje_fk0` FOREIGN KEY (`idEnvia`) REFERENCES `Usuario`(`codigo`);

ALTER TABLE `Mensaje` ADD CONSTRAINT `Mensaje_fk1` FOREIGN KEY (`idRecibe`) REFERENCES `Usuario`(`codigo`);

ALTER TABLE `Contrato` ADD CONSTRAINT `Contrato_fk0` FOREIGN KEY (`codigoMonitor`) REFERENCES `Monitor`(`codigoMonitor`);

ALTER TABLE `Contrato` ADD CONSTRAINT `Contrato_fk1` FOREIGN KEY (`codigoEstudiante`) REFERENCES `Estudiante`(`codigoEstudiante`);

ALTER TABLE `Contrato` ADD CONSTRAINT `Contrato_fk2` FOREIGN KEY (`idEstado`) REFERENCES `Estado`(`idEstado`);

ALTER TABLE `Contrato` ADD CONSTRAINT `Contrato_fk3` FOREIGN KEY (`idCalificacion`) REFERENCES `Calificacion`(`idcalificacion`);

ALTER TABLE `MateriaImpartida` ADD CONSTRAINT `MateriaImpartida_fk0` FOREIGN KEY (`codigoMonitor`) REFERENCES `Monitor`(`codigoMonitor`);

ALTER TABLE `MateriaImpartida` ADD CONSTRAINT `MateriaImpartida_fk1` FOREIGN KEY (`idMateria`) REFERENCES `Materia`(`idMateria`);

ALTER TABLE `Publicacion` ADD CONSTRAINT `Publicacion_fk0` FOREIGN KEY (`codigoEstudiante`) REFERENCES `Estudiante`(`codigoEstudiante`);

ALTER TABLE `Publicacion` ADD CONSTRAINT `Publicacion_fk1` FOREIGN KEY (`idTema`) REFERENCES `Tema`(`idTema`);

ALTER TABLE `Publicacion` ADD CONSTRAINT `Publicacion_fk2` FOREIGN KEY (`idMateria`) REFERENCES `Materia`(`idMateria`);

ALTER TABLE `Tema` ADD CONSTRAINT `Tema_fk0` FOREIGN KEY (`idMateria`) REFERENCES `Materia`(`idMateria`);

ALTER TABLE `Comentario` ADD CONSTRAINT `Comentario_fk0` FOREIGN KEY (`idPublicacion`) REFERENCES `Publicacion`(`idPublicacion`);

ALTER TABLE `Comentario` ADD CONSTRAINT `Comentario_fk1` FOREIGN KEY (`idComentador`) REFERENCES `Usuario`(`codigo`);













