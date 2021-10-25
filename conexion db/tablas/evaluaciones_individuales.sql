-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3310
-- Tiempo de generación: 22-10-2021 a las 18:40:30
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `evaluaciones individuales`
--

CREATE TABLE `evaluaciones individuales` (
  `Id` int(11) NOT NULL,
  `Conocimientos_HTML` int(10) NOT NULL,
  `Conocimientos_CSS` int(10) NOT NULL,
  `Conocimientos_JavaScript` int(10) NOT NULL,
  `Conocimientos_PHP` int(10) NOT NULL,
  `Conocimientos _SQL,_MySQL` int(10) NOT NULL,
  `Otros lenguajes _programación` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evaluaciones individuales`
--
ALTER TABLE `evaluaciones individuales`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evaluaciones individuales`
--
ALTER TABLE `evaluaciones individuales`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
