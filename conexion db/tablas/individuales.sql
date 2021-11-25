-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8111
-- Tiempo de generación: 22-11-2021 a las 07:18:11
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
-- Estructura de tabla para la tabla `individuales`
--

CREATE TABLE `individuales` (
  `Id` int(11) NOT NULL,
  `conociminetoshtml` int(11) NOT NULL,
  `conociminetoscss` int(11) NOT NULL,
  `conocimientosjavascript` int(11) NOT NULL,
  `conocimientosphp` int(11) NOT NULL,
  `conocimientosc` int(11) NOT NULL,
  `conocimientosch` int(11) NOT NULL,
  `Id_formulario` int(11) DEFAULT NULL,
  `conocimientoscm` int(11) NOT NULL,
  `conocimientossql` int(11) NOT NULL,
  `conocimientosora` int(11) NOT NULL,
  `conocimientosmy` int(11) NOT NULL,
  `conocimientosex` int(11) NOT NULL,
  `conocimientospo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `individuales`
--

INSERT INTO `individuales` (`Id`, `conociminetoshtml`, `conociminetoscss`, `conocimientosjavascript`, `conocimientosphp`, `conocimientosc`, `conocimientosch`, `Id_formulario`, `conocimientoscm`, `conocimientossql`, `conocimientosora`, `conocimientosmy`, `conocimientosex`, `conocimientospo`) VALUES
(32, 2, 2, 2, 2, 1, 1, 394, 1, 1, 1, 1, 1, 3),
(33, 10, 2, 2, 1, 1, 2, 394, 1, 2, 2, 3, 3, 3),
(34, 0, 0, 0, 0, 0, 0, 394, 0, 0, 0, 0, 0, 0),
(35, 0, 0, 0, 0, 0, 0, 394, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `individuales`
--
ALTER TABLE `individuales`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_formulario` (`Id_formulario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `individuales`
--
ALTER TABLE `individuales`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `individuales`
--
ALTER TABLE `individuales`
  ADD CONSTRAINT `individuales_ibfk_1` FOREIGN KEY (`Id_formulario`) REFERENCES `formulario` (`Id_formulario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
