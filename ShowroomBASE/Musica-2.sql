-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-12-2018 a las 13:53:36
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Artista`
--

CREATE TABLE `Artista` (
  `idArtista` int(10) NOT NULL,
  `NombreArtista` varchar(40) NOT NULL,
  `infArt` varchar(1000) NOT NULL,
  `Cloud` varchar(1000) NOT NULL,
  `Fb` varchar(1000) NOT NULL,
  `ImagenAr` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Artista`
--

INSERT INTO `Artista` (`idArtista`, `NombreArtista`, `infArt`, `Cloud`, `Fb`, `ImagenAr`) VALUES
(1, 'N\'to', 'Rock des 70’s, swing des années 30, hiphop, triphop, pop, jazz, soul, classique : N’to a de nombreuses couleurs sur sa palette. C’est pourtant bien à travers la musique électronique que celui-ci s’épanouit, et se trouve musicalement. Il émet un son incomparable, pur, pointilliste, qui fait déjà de lui un des noms incontournables de la scène techno française', 'https://soundcloud.com/worakls/nto-trauma-worakls-remix', 'https://www.facebook.com/nto.music/', 'https://scontent.fuio13-1.fna.fbcdn.net/v/t1.0-9/15541367_10154325793047144_2716394921083984054_n.jpg?_nc_cat=102&_nc_ht=scontent.fuio13-1.fna&oh=29c80430a4bc8b44bf1a748536886925&oe=5CA3C7B0'),
(2, 'Popof', 'Hailing from Paris, POPOF is one of the most widely recognized names within the world of house and techno. A former member of cult Parisian free party underground collective, Heretik System, POPOF has since been brought to an international stage with countless tours and a now global fanbase. ', 'https://soundcloud.com/popofofficial', 'https://www.facebook.com/popofofficial/', 'https://scontent.fuio13-1.fna.fbcdn.net/v/t1.0-9/21766583_10155134754458789_1351868104500866087_n.jpg?_nc_cat=106&_nc_ht=scontent.fuio13-1.fna&oh=c15e1f9603675fc9cc150f68450a23c6&oe=5CA3F8C1'),
(3, 'Charllotte de Witte ', 'Despite being considered relatively fresh on the scene, Belgian DJ and producer Charlotte de Witte has amply proven her skill in the studio and behind the decks. \r\nHer fast-paced trajectory reads like a novel. While championing her own style of uncompromising and headstrong techno, she steers her career and music the way she envisions it', 'https://soundcloud.com/charlottedewittemusic', 'https://www.facebook.com/charlottedewittemusic/', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Charlotte_de_witte-1513626416.jpg/800px-Charlotte_de_witte-1513626416.jpg'),
(4, 'Bakermat', 'Breve descripción del artista o banda junto a los links de contacto de cada uno.', 'https://soundcloud.com/bakermatmusic', 'https://www.facebook.com/bakermatmusic/', 'https://scontent.fuio13-1.fna.fbcdn.net/v/t1.0-9/44277314_1698501456944575_8938161933245218816_n.jpg?_nc_cat=101&amp;_nc_ht=scontent.fuio13-1.fna&amp;oh=6eed9a6088ee9f026085dc2e2d6abe0d&amp;oe=5CA7B03E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cancion`
--

CREATE TABLE `Cancion` (
  `idCan` int(10) NOT NULL,
  `NombreCancion` varchar(45) DEFAULT NULL,
  `idArtista` int(11) DEFAULT NULL,
  `Genero` varchar(50) DEFAULT NULL,
  `urlCancion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Cancion`
--

INSERT INTO `Cancion` (`idCan`, `NombreCancion`, `idArtista`, `Genero`, `urlCancion`) VALUES
(1, 'ChaCha', 1, 'Rock', 'Victor1.mp3'),
(2, 'Lala', 2, 'Pop', 'Victor1.mp3'),
(4, 'Blabla', 3, 'Jazz', 'Victor1.mp3'),
(5, 'Sasasa', 4, 'Pop', 'Victor1.mp3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Artista`
--
ALTER TABLE `Artista`
  ADD PRIMARY KEY (`idArtista`);

--
-- Indices de la tabla `Cancion`
--
ALTER TABLE `Cancion`
  ADD PRIMARY KEY (`idCan`),
  ADD KEY `idArtista` (`idArtista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Artista`
--
ALTER TABLE `Artista`
  MODIFY `idArtista` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Cancion`
--
ALTER TABLE `Cancion`
  MODIFY `idCan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
