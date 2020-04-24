-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2020 a las 02:55:55
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4
USE zk745kjclkckwqdm;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica_nubes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `descripcion`, `precio`, `stock`) VALUES
(7, '', 0, 0),
(8, '133', 242, 323),
(9, '12', 3, 4),
(10, '2', 2, 3),
(11, '2324', 232, 423),
(12, '2324', 232, 423),
(13, '2324', 232, 423),
(15, 'Colonia', 60, 12),
(16, 'dfds', 12, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `email`, `password`) VALUES
(1, 'Marvin', 'marvin@gmail.com', '12345'),
(2, 'Jaime', 'jfarfan@gmail.com', '123456'),
(3, 'Prueba', 'prueba@gmail.com', '123456'),
(4, 'Marvin', 'friman@gmail.com', '$2y$10$NtERwUG4Ll/1jlyYqFv4Q.lzkyXSvc4LcEOXni2ZhhX.24Dis/Jh2'),
(5, 'Friman', 'no@gmail.com', '$2y$10$0vaqU2eP4TbqO8VZM9jyO.Ulf8NSpoankRwsqdUywDZiOPSYuSuiK'),
(6, 'marvin', 'marvin@gmail.com', '$2y$10$akewQC75hvm1xabNHV841eVUnWadVhL/jcplM4862IBof3p107NR6'),
(7, 'nose', 'nose@gmail.com', '$2y$10$jXALg5Gh2uLHBjV7GyoQMuTIq6KyUDVfzPD8L6sI2oW7t5oFO5D76'),
(8, 'Marvin', 'vilcapoma@gmail.com', '$2y$10$zmttcYcJsUQbNlQGj7f8d.jyGG7VqffAN4XXCE7uKG4XdqrdijKRC'),
(20, 'Carlos', 'carlos@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`empleado
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



