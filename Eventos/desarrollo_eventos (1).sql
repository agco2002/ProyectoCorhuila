-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2024 a las 00:26:18
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
-- Base de datos: `desarrollo_eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `ubicacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `titulo`, `descripcion`, `fecha`, `hora`, `ubicacion`) VALUES
(1, 'Deportre', 'Campeonato de futbol ', '2024-06-12', '21:43:00', 'Cancha sintética '),
(2, 'Campeonato Voleibol ', 'Encuentro deportivo estudiantes corhuila ', '2024-06-10', '21:47:00', 'cancha princial quirinal '),
(3, 'Juegos', 'gfdgdgsgsdf', '2024-06-10', '13:02:00', 'ghdnbhgn'),
(4, 'Evento Cultural ', 'actividades culturales ', '2024-06-19', '01:21:00', 'cancha princial quirinal '),
(5, 'Fiesta sampedrina ', 'Actividad de integracion cultural ', '2024-06-14', '15:23:00', 'cancha princial quirinal ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id_participante` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id_participante`, `id_evento`, `nombre`, `correo`) VALUES
(1, 1, '0', 'egco7331@gmail.com'),
(2, 2, '0', 'paesd@gmail.com'),
(3, 2, '0', 'mila@gmail.com'),
(4, 2, '0', 'paesd@gmail.com'),
(5, 2, '0', 'agco7331@gmail.com'),
(6, 3, '0', 'egco7331@gmail.com'),
(7, 4, '0', 'agco7331@gmail.com'),
(8, 4, '0', 'mila@gmail.com'),
(9, 4, '0', 'pablo@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id_participante`),
  ADD KEY `id_evento` (`id_evento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id_participante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
