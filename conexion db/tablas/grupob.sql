-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8111
-- Tiempo de generación: 05-11-2021 a las 03:43:11
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
-- Estructura de tabla para la tabla `grupob`
--

CREATE TABLE `grupob` (
  `id` int(11) NOT NULL,
  `nombre` text CHARACTER SET armscii8 NOT NULL,
  `apellido` text CHARACTER SET armscii8 NOT NULL,
  `correo` text CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupob`
--

INSERT INTO `grupob` (`id`, `nombre`, `apellido`, `correo`) VALUES
(1, 'maria', 'Avila Dotel', 'hola@gmail.com'),
(2, 'oo', 'aaa', 'as@gmail,com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupob`
--
ALTER TABLE `grupob`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupob`
--
ALTER TABLE `grupob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
