-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-07-2013 a las 19:04:47
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `viajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE IF NOT EXISTS `destino` (
  `id_destino` int(10) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_destino`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`id_destino`, `nombre`) VALUES
(1, 'Santander'),
(2, 'Amazonas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `cod_hotel` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(20) DEFAULT NULL,
  `temporada` varchar(20) DEFAULT NULL,
  `doble` varchar(20) DEFAULT NULL,
  `multiple` varchar(20) DEFAULT NULL,
  `edades_4_7` varchar(20) DEFAULT NULL,
  `cod_plan` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_hotel`),
  KEY `fk_hotel` (`cod_plan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE IF NOT EXISTS `informacion` (
  `cod_info` int(11) NOT NULL DEFAULT '0',
  `contenido` varchar(260) DEFAULT NULL,
  `cod_plan` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_info`),
  KEY `fk_info` (`cod_plan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`cod_info`, `contenido`, `cod_plan`) VALUES
(1, 'Transporte ida y regreso', 100),
(2, 'Alimentación 04 Desayunos / 03 Cenas', 100),
(3, 'Alojamiento 3 noches en hotel campestre', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `cod_plan` int(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_destino` int(10) NOT NULL,
  PRIMARY KEY (`cod_plan`),
  KEY `id_destino` (`id_destino`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`cod_plan`, `nombre`, `id_destino`) VALUES
(100, 'PLAN SAN GIL AVENTURA TOTAL', 1),
(101, 'PLAN SAN GIL CULTURAL Y RELIGIOSO', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `fk_hotel` FOREIGN KEY (`cod_plan`) REFERENCES `plan` (`cod_plan`) ON DELETE CASCADE;

--
-- Filtros para la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD CONSTRAINT `fk_info` FOREIGN KEY (`cod_plan`) REFERENCES `plan` (`cod_plan`) ON DELETE CASCADE;

--
-- Filtros para la tabla `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`id_destino`) REFERENCES `destino` (`id_destino`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
