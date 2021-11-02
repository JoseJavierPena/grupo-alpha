-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8111
-- Tiempo de generación: 02-11-2021 a las 18:59:20
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pasantes alpha db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` int(11) NOT NULL,
  `repositorio` text DEFAULT NULL,
  `linkedIn` text DEFAULT NULL,
  `portafolio` text DEFAULT NULL,
  `curriculum` varchar(250) DEFAULT NULL,
  `Id_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evaluaciones`
--

INSERT INTO `evaluaciones` (`id`, `repositorio`, `linkedIn`, `portafolio`, `curriculum`, `Id_formulario`) VALUES
(1, 'http://localhost/grupo-alpha/cuestionarios/evaluaciones.html', 'http://localhost/grupo-alpha/cuestionarios/evaluaciones.html', 'http://localhost/grupo-alpha/cuestionarios/evaluaciones.html', 'curriculum/02-11-21-18-22-11-AIL PASANTES DELTA - SCRUM.pdf', 17),
(2, 'http://localhost/grupo-alpha/cuestionarios/evaluaciones.html', 'http://localhost/grupo-alpha/cuestionarios/evaluaciones.html', 'http://localhost/grupo-alpha/cuestionarios/evaluaciones.html', 'curriculum/02-11-21-18-23-33-AIL PASANTES DELTA - SCRUM.pdf', 26);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_formulario` (`Id_formulario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD CONSTRAINT `evaluaciones_ibfk_1` FOREIGN KEY (`Id_formulario`) REFERENCES `formulario` (`Id_formulario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
