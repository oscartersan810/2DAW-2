-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2025 a las 23:17:22
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
-- Base de datos: `comunidades_ajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades_autonomas`
--
CREATE DATABASE IF NOT EXISTS `comunidades_ajax` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `comunidades_ajax`;

CREATE TABLE `comunidades_autonomas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comunidades_autonomas`
--

INSERT INTO `comunidades_autonomas` (`id`, `nombre`) VALUES
(1, 'Andalucia'),
(2, 'Extremadura'),
(3, 'Castilla-La Mancha'),
(4, 'Comunidad Valenciana'),
(5, 'Castilla y León'),
(6, 'Aragón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `comunidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nombre`, `comunidad`) VALUES
(1, 'Huelva', 1),
(2, 'Sevilla', 1),
(3, 'Córdoba', 1),
(4, 'Jaén', 1),
(5, 'Cádiz', 1),
(6, 'Málaga', 1),
(7, 'Granada', 1),
(8, 'Almería', 1),
(9, 'Badajoz', 2),
(10, 'Cáceres', 2),
(11, 'Toledo', 3),
(12, 'Ciudad Real', 3),
(13, 'Albacete', 3),
(14, 'Cuenca', 3),
(15, 'Guadalajara', 3),
(16, 'Valencia', 4),
(17, 'Alicante', 4),
(18, 'Castellón', 4),
(19, 'León', 5),
(20, 'Zamora', 5),
(21, 'Salamanca', 5),
(22, 'Ávila', 5),
(23, 'Segovia', 5),
(24, 'Valladolid', 5),
(26, 'Soria', 5),
(27, 'Burgos', 5),
(28, 'Palencia', 5),
(29, 'Zaragoza', 6),
(30, 'Huesca', 6),
(31, 'Teruel', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunidades_autonomas`
--
ALTER TABLE `comunidades_autonomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comunidad_id` (`comunidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunidades_autonomas`
--
ALTER TABLE `comunidades_autonomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `comunidad_id` FOREIGN KEY (`comunidad`) REFERENCES `comunidades_autonomas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
