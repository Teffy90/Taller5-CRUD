-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2022 a las 05:05:15
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogopeliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `genero`) VALUES
(1, 'Terror'),
(2, 'Acción'),
(3, 'Comedia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(11) NOT NULL,
  `nombre_pelicula` varchar(100) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `sinopsis` varchar(500) NOT NULL,
  `imagen` longblob NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `nombre_pelicula`, `duracion`, `sinopsis`, `imagen`, `id_genero`) VALUES
(9, 'Memory', '1h 54 min', 'Alex, un asesino a sueldo, descubre que se ha convertido en un objetivo después de que se niega a completar un trabajo para una peligrosa organización criminal. Con el sindicato del crimen y el FBI persiguiéndolo, Alex tiene las habilidades para mantenerse a la vanguardia, excepto por una cosa: está luchando con una pérdida de memoria severa que afecta todos sus movimientos. Alex debe cuestionar cada una de sus acciones y en quién puede confiar en última instancia.', 0x616363696f6e204d656d6f72792e6a7067, 2),
(10, 'Doctor Strange en el multiverso de la locura', '2h 06 min', 'Viaja a lo desconocido con el Doctor Strange, quien, con la ayuda de tanto antiguos como nuevos aliados místicos, recorre las complejas y peligrosas realidades alternativas del multiverso para enfrentarse a un nuevo y misterioso adversario.', 0x616363696f6e20446f63746f7220537472616e676520656e20656c206d756c7469766572736f206465206c61206c6f637572612e6a7067, 2),
(11, 'Jackass 4.5', '1h 30 min', 'A través de escandalosas imágenes nunca antes vistas, sé testigo de la realización de la última incursión del equipo de Jackass en acrobacias salvajes.', 0x636f6d65646961204a61636b61737320342e352e6a7067, 3),
(12, 'Cómo deshacerte de tu jefe', '1h 45 min', 'Dos adictos al trabajo tienen a sus respectivos ayudantes al borde del colapso, así que estos se alían para conseguir que sus agobiantes jefes se enamoren.', 0x636f6d656469612043c3b36d6f2064657368616365727465206465207475206a6566652e6a7067, 3),
(13, 'They Talk', '1h 36 min', 'Alex, un ingeniero de sonido, graba por accidente unas misteriosas voces: inquietantes mensajes del más allá que le advierten de un peligro inminente y aterrador. Amanda, con quien comparte un terrible secreto, resurge de su pasado. La aparición de la joven desencadena escalofriantes fenómenos paranormales que dejan tras de sí una estela de cadáveres. ¿Es ella el peligro del que hablan las voces de los muertos?', 0x746572726f7220546865792054616c6b2e6a7067, 1),
(14, 'Hatching', '1h 26 min', 'Una joven gimnasta que intenta desesperadamente complacer a su exigente madre, descubre un extraño huevo. Ella lo esconde y lo mantiene caliente, pero cuando sale del cascarón, lo que emerge los sorprende a todos.', 0x746572726f72204861746368696e672e6a7067, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `id_genero` (`id_genero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `pelicula_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
