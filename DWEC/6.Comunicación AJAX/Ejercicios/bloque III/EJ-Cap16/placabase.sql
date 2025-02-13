-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2025 a las 23:33:25
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
-- Base de datos: `placabase`
--
CREATE DATABASE IF NOT EXISTS `placabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `placabase`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

DROP TABLE IF EXISTS `componentes`;
CREATE TABLE IF NOT EXISTS `componentes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Puerto-PCI', 'Ranura de expansión en la placa base para conectar tarjetas adicionales, como de sonido o red.', 'https://upload.wikimedia.org/wikipedia/commons/6/64/Buses_pci.jpg'),
(2, 'Conectores Externos', 'Conectores por ejemplo puerto paralelo, puerto serie, vga o dvi video, usb\'s y conectores jack de au', 'https://onubaelectronica.es/wp-content/uploads/2020/04/conectores_mainboard.jpg'),
(3, 'Puerto-PCIExpress', 'Ranura de expansión más rápida y eficiente que el PCI, usada para tarjetas gráficas, de red y almace', 'https://m.media-amazon.com/images/I/615-f510B+L.jpg'),
(4, 'Zócalo Procesador CPU', 'Componente principal de la computadora, encargado de ejecutar instrucciones y procesar datos.', 'https://upload.wikimedia.org/wikipedia/commons/7/79/LGA_Socket_1366.jpg'),
(5, 'Ranura RAM', 'Zócalo en la placa base donde se instalan los módulos de memoria para el almacenamiento temporal de ', 'https://www.soporteca.com/blog/wp-content/uploads/2012/03/ddr.jpg'),
(6, 'Puente Sur', 'Chip en la placa base que gestiona la comunicación entre la CPU y los dispositivos de menor velocida', 'https://incopia2.com/952-medium_default/puente-sur-intel-fw82801dbm.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
