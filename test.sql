-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2022 a las 10:22:53
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `idCalificacion` int(100) NOT NULL,
  `puntaje` int(100) NOT NULL,
  `fechaCalificacion` datetime NOT NULL,
  `comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(100) NOT NULL,
  `contenido` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `idPublicacion` int(100) NOT NULL,
  `idComentador` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `idcontrato` int(10) NOT NULL,
  `fechaContrato` date NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `codigoMonitor` int(10) NOT NULL,
  `codigoEstudiante` int(10) NOT NULL,
  `idEstado` int(100) DEFAULT NULL,
  `idCalificacion` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(100) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `codigoEstudiante` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`codigoEstudiante`) VALUES
(888),
(101010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `idMateria` int(100) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idMateria`, `nombre`) VALUES
(1, 'Matematicas'),
(8, 'Programing'),
(9, 'Calculo'),
(10, 'Economia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiaimpartida`
--

CREATE TABLE `materiaimpartida` (
  `codigoMonitor` int(10) NOT NULL,
  `idMateria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiaimpartida`
--

INSERT INTO `materiaimpartida` (`codigoMonitor`, `idMateria`) VALUES
(777, 1),
(777, 8),
(777, 10),
(456456, 9),
(456456, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `idEnvia` int(10) NOT NULL,
  `idRecibe` int(10) NOT NULL,
  `contenido` varchar(255) NOT NULL,
  `fechaEnvio` datetime NOT NULL,
  `fechaLeido` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitor`
--

CREATE TABLE `monitor` (
  `codigoMonitor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `monitor`
--

INSERT INTO `monitor` (`codigoMonitor`) VALUES
(777),
(456456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `idPublicacion` int(100) NOT NULL,
  `contenido` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `codigoEstudiante` int(10) NOT NULL,
  `idTema` int(100) NOT NULL,
  `idMateria` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`idPublicacion`, `contenido`, `fecha`, `codigoEstudiante`, `idTema`, `idMateria`) VALUES
(1, 'hola, esto es una prueba', '2022-02-12 00:00:00', 888, 1, 1),
(2, 'hola, esto es la segunda prueba', '2022-04-12 00:00:00', 888, 1, 1),
(6, 'idea', '0000-00-00 00:00:00', 888, 8, 8),
(7, 'Publicacion online', '0000-00-00 00:00:00', 888, 9, 9),
(8, 'Nesecito ayuda', '0000-00-00 00:00:00', 888, 10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `idTema` int(100) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `idMateria` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`idTema`, `nombre`, `idMateria`) VALUES
(1, 'Derivadas', 1),
(8, 'Variables', 8),
(9, 'Integrales', 9),
(10, 'Sumas', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `nombre`, `apellido`, `fechaNacimiento`, `correo`, `contrasena`, `rol`) VALUES
(1, 'Santiago', 'Diazgranados', '0000-00-00', 'Santiago@mail.com', '123', 'Admin'),
(777, 'pedro', 'perz', '2022-12-31', 'pedro@mail.com', '123', 'Monitor'),
(888, 'Sergio', 'solo', '1900-01-01', 'sergi@mail.com', '123', 'Estudiante'),
(999, 'Augusto', 'Ospino', '1500-12-01', 'augusto@ospino.com', '123', 'Estudiante'),
(5620, 'Julio', 'Perez', '0000-00-00', 'jul@mail.com', '13', 'Monitor'),
(12345, 'Juan', 'Perez', '2022-12-01', 'juan@mail.com', '123', 'Estudiante'),
(101010, 'Leonel', 'Messi', '2004-07-31', 'leo@messi.com', '10', 'Estudiante'),
(456456, 'sergi', 'Roberto', '2000-07-31', 'rober@lewandowski.com', '123', 'Monitor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`idCalificacion`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `Comentario_fk0` (`idPublicacion`),
  ADD KEY `Comentario_fk1` (`idComentador`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`idcontrato`),
  ADD KEY `Contrato_fk0` (`codigoMonitor`),
  ADD KEY `Contrato_fk1` (`codigoEstudiante`),
  ADD KEY `Contrato_fk2` (`idEstado`),
  ADD KEY `Contrato_fk3` (`idCalificacion`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codigoEstudiante`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idMateria`);

--
-- Indices de la tabla `materiaimpartida`
--
ALTER TABLE `materiaimpartida`
  ADD PRIMARY KEY (`codigoMonitor`,`idMateria`),
  ADD KEY `MateriaImpartida_fk1` (`idMateria`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`idEnvia`,`idRecibe`),
  ADD KEY `Mensaje_fk1` (`idRecibe`);

--
-- Indices de la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`codigoMonitor`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`idPublicacion`),
  ADD KEY `Publicacion_fk0` (`codigoEstudiante`),
  ADD KEY `Publicacion_fk1` (`idTema`),
  ADD KEY `Publicacion_fk2` (`idMateria`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`idTema`),
  ADD KEY `Tema_fk0` (`idMateria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `idCalificacion` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `idcontrato` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `idMateria` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `idPublicacion` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `idTema` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `Comentario_fk0` FOREIGN KEY (`idPublicacion`) REFERENCES `publicacion` (`idPublicacion`),
  ADD CONSTRAINT `Comentario_fk1` FOREIGN KEY (`idComentador`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `Contrato_fk0` FOREIGN KEY (`codigoMonitor`) REFERENCES `monitor` (`codigoMonitor`),
  ADD CONSTRAINT `Contrato_fk1` FOREIGN KEY (`codigoEstudiante`) REFERENCES `estudiante` (`codigoEstudiante`),
  ADD CONSTRAINT `Contrato_fk2` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`),
  ADD CONSTRAINT `Contrato_fk3` FOREIGN KEY (`idCalificacion`) REFERENCES `calificacion` (`idCalificacion`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `Estudiante_fk0` FOREIGN KEY (`codigoEstudiante`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `materiaimpartida`
--
ALTER TABLE `materiaimpartida`
  ADD CONSTRAINT `MateriaImpartida_fk0` FOREIGN KEY (`codigoMonitor`) REFERENCES `monitor` (`codigoMonitor`),
  ADD CONSTRAINT `MateriaImpartida_fk1` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`);

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `Mensaje_fk0` FOREIGN KEY (`idEnvia`) REFERENCES `usuario` (`codigo`),
  ADD CONSTRAINT `Mensaje_fk1` FOREIGN KEY (`idRecibe`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `Monitor_fk0` FOREIGN KEY (`codigoMonitor`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `Publicacion_fk0` FOREIGN KEY (`codigoEstudiante`) REFERENCES `estudiante` (`codigoEstudiante`),
  ADD CONSTRAINT `Publicacion_fk1` FOREIGN KEY (`idTema`) REFERENCES `tema` (`idTema`),
  ADD CONSTRAINT `Publicacion_fk2` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`);

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `Tema_fk0` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
