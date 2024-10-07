-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2024 a las 19:50:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `Id` int(11) NOT NULL,
  `documento` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `edad` int(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `promedio` float NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`Id`, `documento`, `nombre`, `apellido`, `email`, `edad`, `genero`, `nota1`, `nota2`, `nota3`, `promedio`, `estado`) VALUES
(1, 1004754391, 'Federico', 'Duque', 'fedelopdu@hotmail.com', 23, 'hombre', 4.5, 4.3, 5, 4.6, 'aprobado'),
(2, 100564121, 'Bryan', 'Agudelo', 'Brtan@gmail.com', 19, 'on', 3, 4, 5, 4, 'aprobado'),
(3, 10045132, 'Leandro', 'Sanchez', 'Leandro@leandro.com', 30, 'hombre', 5, 3, 3, 3.66667, 'aprobado'),
(4, 12312452, 'Edison', 'Betancurt', 'Edi@Edi.com', 33, 'hombre', 4, 3, 5, 4, 'aprobado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ano_escolar` int(100) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `jefe_grupo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`Id`, `nombre`, `ano_escolar`, `grado`, `jefe_grupo`) VALUES
(1, 'ADSO-2847', 2023, 'once', 'Legarda'),
(2, 'ADSO-2135', 2033, 'noveno', 'Anderson'),
(3, 'ADSO-2135', 2033, 'noveno', 'Anderson');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `profesor` varchar(100) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `creditos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`Id`, `nombre`, `profesor`, `grado`, `creditos`) VALUES
(1, 'PhP', 'Felipe', 'once', 3),
(2, 'SQL', 'Legarda', 'once', 3),
(3, 'deportes', 'Artura', 'once', 1),
(4, 'deportes', 'Artura', 'once', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `Id` int(11) NOT NULL,
  `documento` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `fecha_contrato` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`Id`, `documento`, `nombre`, `apellido`, `email`, `materia`, `fecha_contrato`, `genero`) VALUES
(1, 1012312521, 'Felipe ', 'Cardona', 'felipe@felipe.com', 'PHP', '2023-01-31', 'hombre'),
(2, 12312342, 'Legarda', 'Arturo', 'legarda@legarda.com', 'SQL', '2024-02-07', 'hombre'),
(3, 1004412341, 'Santiago', 'Gontier', 'Santi@santi.com', 'python', '2024-10-02', 'hombre');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
