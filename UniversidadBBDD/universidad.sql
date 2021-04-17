-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Servidor: localhost
-- Tiempo de generación: 16-04-2021 a las 22:44:51
-- Versión del servidor: 10.3.27-MariaDB-0+deb10u1
-- Versión de PHP: 7.3.27-1~deb10u1
=======
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2021 a las 08:53:49
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1
>>>>>>> 54321e9022077762ffdf50cd89d24eabbf498b68

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `duracion` date NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pensum` varchar(56) NOT NULL,
  `id_facultad` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `cupos` int(30) NOT NULL,
  `estado` int(30) NOT NULL,
  `id_periodo` int(30) NOT NULL,
  `id_carrera` int(30) NOT NULL,
  `id_docente` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `estado` int(50) NOT NULL,
  `id_rol` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `carnet` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `genero` char(50) NOT NULL,
  `direccion` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_carrera` int(30) NOT NULL,
  `id_rol` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(102) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_estudiante` varchar(50) DEFAULT NULL,
  `id_curso` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finalizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_carreras_facultad` (`id_facultad`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cursos_periodo` (`id_periodo`),
  ADD KEY `fk_cursos_carreras` (`id_carrera`),
  ADD KEY `fk_cursos_docente` (`id_docente`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_docente_rol` (`id_rol`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`carnet`),
  ADD KEY `fk_estudiante_carrera` (`id_carrera`),
  ADD KEY `fk_estudiante_rol` (`id_rol`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_matricula_estudiante` (`id_estudiante`),
  ADD KEY `fk_matricula_curso` (`id_curso`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
<<<<<<< HEAD
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `fk_carreras_facultad` FOREIGN KEY (`id_facultad`) REFERENCES `facultad` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_cursos_carreras` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cursos_docente` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cursos_periodo` FOREIGN KEY (`id_periodo`) REFERENCES `periodo` (`id`) ON UPDATE CASCADE;
=======
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `docente` (`id`);
>>>>>>> 54321e9022077762ffdf50cd89d24eabbf498b68

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
<<<<<<< HEAD
  ADD CONSTRAINT `fk_docente_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_estudiante_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_estudiante_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `fk_matricula_curso` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_matricula_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`carnet`) ON UPDATE CASCADE;
=======
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`id`) REFERENCES `rol` (`id`);

--
-- Filtros para la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD CONSTRAINT `facultad_ibfk_1` FOREIGN KEY (`id`) REFERENCES `carreras` (`id`);

--
-- Filtros para la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD CONSTRAINT `periodo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cursos` (`id`);

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `rol_ibfk_1` FOREIGN KEY (`id`) REFERENCES `docente` (`id`);
>>>>>>> 54321e9022077762ffdf50cd89d24eabbf498b68
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
