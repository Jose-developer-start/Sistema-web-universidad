-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2021 a las 20:27:34
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

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
  `duracion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pensum` varchar(56) NOT NULL,
  `id_facultad` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `duracion`, `nombre`, `pensum`, `id_facultad`) VALUES
(1, 5, 'Licenciatura en ciencias de la computacion1', '2021-2025', 1),
(2, 3, 'Tecnico en desarrollo de aplicaciones informaticas', '2021-2025', 1),
(3, 3, 'Licenciatura en trabajo social', '2021-2026', 1);

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

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `descripcion`, `cupos`, `estado`, `id_periodo`, `id_carrera`, `id_docente`) VALUES
(1, 'Algoritmo 1', 'Asignatura de algoritmo 1, donde se estudiaran las caracteristicas de un algoritmo', 30, 1, 1, 1, 1),
(2, 'Base de datos 2', 'fgfdgfdgfdg', 20, 1, 2, 2, 12),
(3, 'Tecnicas de ortografia y redacción', 'Aprenderas las reglas basicas para redactar', 56, 1, 3, 1, 13),
(4, 'Redes 1', 'Asignatura donde se enseñaran las base de la redes informaticas', 50, 1, 3, 1, 13),
(6, 'Técnicas de redaccion', 'Asignatura para aprender las bases de la escritura española', 30, 1, 1, 3, 12),
(7, 'Metodos de investigacion', 'Asignatura para estudiar las distintas tecnicas de investigacion y los paradigma ', 50, 1, 3, 3, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `estado` int(50) NOT NULL,
  `id_rol` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id`, `nombres`, `apellidos`, `email`, `clave`, `foto`, `estado`, `id_rol`) VALUES
(1, 'Admin', 'Sistema', 'administrador_sistema@admin', '$2y$10$QUV5a9kaATTGpWxLaA175eO4ARlRE9GXBN7Z43EG/6fsQ8Dg3qgDa', 'docente1.png', 1, 3),
(12, 'Alberto', 'Menjivar', 'josedeo@gma', '$2y$10$vLPaN.Md/mJAwNO6wuk/Sub1N0f5/njNs0qfBmTpeff614w3jX4d2', '127.0.0.1_5500_index.html.png', 1, 3),
(13, 'Alberto', 'Menjivar', 'alberto.profe@edu.sv', '$2y$10$93U/g8nh5dsL17MNEw0H8uAzK1xHhnuR0Gd1PXBaGuZPomyd7W/GK', 'M_gaseosacocacola3lt5185.png', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `carnet` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `genero` char(50) NOT NULL,
  `direccion` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_carrera` int(30) NOT NULL,
  `id_rol` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`carnet`, `nombres`, `apellidos`, `email`, `clave`, `genero`, `direccion`, `fecha_nacimiento`, `id_carrera`, `id_rol`) VALUES
('AJ17941', 'Anderson', 'Argeuta Jovel', 'servidorvps99@gmail.com', '$2y$10$cadHvhPVfO5ZcWzppKIMyOim9InX/Js4AmITcWGCA1wSAMZMAY5uS', 'M', 'La paz, Zacatecoluca', '2000-06-20', 2, 1),
('DP12785', 'Jose Miguel', 'Deodanes', 'josedeodanes98@gmail.com', '$2y$10$QUV5a9kaATTGpWxLaA175eO4ARlRE9GXBN7Z43EG/6fsQ8Dg3qgDa', 'M', 'San Salvador, panchimalco', '2000-06-12', 1, 1),
('L74367', 'Alexis', 'Lozada', 'josedeo@gma', '$2y$10$vLPaN.Md/mJAwNO6wuk/Sub1N0f5/njNs0qfBmTpeff614w3jX4d2', 'M', 'dfgfdgdfg', '2021-05-01', 2, 1),
('R07201', 'Efrain', 'Rivas', 'efrain_rivas_99@gmail.com', '$2y$10$R1KQwoQ8Ph5dBxBPIf.gieWyEhcGTCTW8hrT/uGIggvfgufpYvOmq', 'M', 'ghgfhfghg', '2000-06-14', 1, 1),
('S38265', 'Carlos', 'Sanchez', 'Carlos@gmail.com', '$2y$10$qR.8MOn.nELm5n3hd7hhj.W4qZuQiEvHtdpN1RrBTaKNrpYXV2VwC', 'M', 'San Salvador', '2000-07-11', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(102) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id`, `nombre`) VALUES
(1, 'Facultad de ciencias del hombre y la naturaleza'),
(2, 'Facultad de ingenerias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_estudiante` varchar(50) DEFAULT NULL,
  `id_curso` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`id`, `fecha`, `id_estudiante`, `id_curso`) VALUES
(2, '2021-04-20 01:39:27', 'AJ17941', 1),
(31, '2021-05-12 17:28:12', 'DP12785', 7),
(32, '2021-05-12 17:28:13', 'DP12785', 6),
(33, '2021-05-12 17:28:15', 'DP12785', 4),
(34, '2021-05-12 17:28:17', 'DP12785', 3),
(35, '2021-05-12 17:28:22', 'DP12785', 2),
(36, '2021-05-12 17:51:40', 'S38265', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finalizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id`, `fecha_inicio`, `fecha_finalizacion`) VALUES
(1, '2021-04-20', '2021-04-30'),
(2, '2020-11-19', '2021-04-19'),
(3, '2021-05-13', '2021-08-13'),
(7, '2021-05-12', '2021-10-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'Estudiante'),
(2, 'Docente'),
(3, 'Administrador');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
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

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
