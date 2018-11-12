-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-11-2018 a las 04:40:44
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Musica`
--
CREATE DATABASE IF NOT EXISTS `Musica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Musica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Artista`
--

CREATE TABLE IF NOT EXISTS `Artista` (
  `idArtista` int(10) NOT NULL AUTO_INCREMENT,
  `NombreArtista` varchar(40) NOT NULL,
  PRIMARY KEY (`idArtista`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Artista`
--

INSERT INTO `Artista` (`idArtista`, `NombreArtista`) VALUES
(1, 'Juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cancion`
--

CREATE TABLE IF NOT EXISTS `Cancion` (
  `NombreCancion` varchar(45) DEFAULT NULL,
  `idArtista` int(11) DEFAULT NULL,
  `Genero` varchar(50) DEFAULT NULL,
  `urlCancion` varchar(100) NOT NULL,
  KEY `idArtista` (`idArtista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Cancion`
--

INSERT INTO `Cancion` (`NombreCancion`, `idArtista`, `Genero`, `urlCancion`) VALUES
('Mandarina', 1, 'Rock', ''),
('ChaCha', 1, 'Rock', 'Victor1.mp3');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Cancion`
--
ALTER TABLE `Cancion`
  ADD CONSTRAINT `Cancion_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `Artista` (`idArtista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
