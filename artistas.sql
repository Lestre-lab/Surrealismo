-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2023 a las 04:03:59
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `surrealismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nacimiento` int(11) NOT NULL,
  `fallecimiento` int(11) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `apellido`, `nacimiento`, `fallecimiento`, `pais`, `descripcion`) VALUES
(0, 'Salvador Felipe Jacinto', 'Dalí i Domènech', 1904, 1989, 'España', 'Dalí Salvador Felipe Jacinto Dalí es el artista más famoso del surrealismo, reconocido no solo por sus cuadros, pero su excéntrica personalidad, conducta antisocial y capacidad interdisciplinaria y creación el método paranoico-critico. Nació en España, Figueras el 11 de mayo de 1904. De parte de una familia acomodada, culta y con inclinaciones religiosas.'),
(2, 'René François ', 'Ghislain Magritte', 1898, 1967, 'Bélgica', 'René François Ghislain Magritte nació en Bélgica en 1898. Se graduó como artista de la Académie Royale des Beaux-Arts en Bruselas, y en 1920 es cuando publica su primera exposición en el centro de arte de Bruselas. Su fama nace en la creación de obras basadas en el uso de elementos cotidianos y cambiar la percepción de los elementos del espectador y su entorno. Magritte experimentaba mucho con la ilusión de la realidad y lo mágico de lo cotidiano. Desde un inicio tuvo una gran influencia por parte de Giorgio de Chirico (1888-1978) y la pintura metafísica de Hironymus Bosch (1450-1510) que caracterizo el lenguaje poético de sus obras.'),
(3, 'Maximilian Maria', 'Ernst ', 1891, 1976, 'Alemania', 'Maximilian Maria Ernst nacido en Bruhl, Alemania, el 1891 y nacionalizado Francés, es uno de los principales artistas de vanguardias como el expresionismo, Dadaísmo y pionero del Surrealismo, así como uno de los artistas alemanes más influyentes del arte contemporáneo debido al abanico de técnicas que empleaba en su obra.'),
(6, 'Joan', 'Miró i Ferrà', 1893, 1983, 'España', 'Joan Miró i Ferrà nació en Barcelona, España, el 1893. Fue un Muralista, pintor y escultor considerado uno de los pioneros de Surrealismo. Su trabajo se destaca por el uso de los colores primarios y característico lenguaje gráfico bajo la influencia que obtuvo por parte de otras vanguardias como Fauvismo, Cubismo y Expresionismo. Miró trabajó en el subconsciente y el automatismo mental con estrecha relación a la infancia, así como desarrolló una escritura ideográfica.'),
(7, 'Mark', 'Zajárovich Shagálov (Chagall)', 1887, 1985, 'Bielorrusia', 'Marc Chagall fue un artista Bielorruso Nacido en 1887, resalta el uso de elementos ficticios, colores, el folclore ruso con el mundo onírico y la infancia, exactamente el inconsciente durante el momento que él consideró el más feliz.'),
(8, 'Emmanuel Man', 'Radnitzky Ray', 1890, 1976, 'Estados Unidos', 'Man Ray, fue un famoso fotógrafo y artista plástico Americano nacido 27 de agosto de 1890 en Filadelfia, Pennsylvania. Era hijo de inmigrantes judíos rusos. Razón por la que uso el seudónimo para Emmanuel Radnitzky, su nombre original que utilizo hasta 1910 en trabajos de la secundaria.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
