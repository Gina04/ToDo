-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2019 a las 04:21:36
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasenia`, `mail`, `nombre`, `fecha`) VALUES
(1, '', '0', 'georginabosque@gmail.com', 'Georgina Gisela Bosque', '2019-10-25'),
(4, 'georgina', '0', 'georgina ', 'gisela ', '2019-10-26'),
(5, 'Gisela', '$2y$10$6fq5odrxyYfwTMQYAMpMq.EnJWufS1g7PFNhEkcrw314ZgY.lK6Ke', 'gisela@gmail.com', 'gergina gisela ', '2019-10-26'),
(6, 'china', '$2y$10$GSLrlB6TwpbHwnSHCiTpgetJWfGWc04Qye/qxNbuyz2asetg3yM46', '', '', '2019-10-26'),
(7, 'china', '$2y$10$uRvVwr6HMbgoRqfT4CMRFuTNWjrVAAs8VvtJ/ydvI1FtGUvgWUgBi', '', '', '2019-10-26'),
(8, 'china', '$2y$10$qZQw8X9pmL8ndst0Mr4maeCi60r9nDmiLwyWx4xGsKS22lp0MB2oi', '', '', '2019-10-26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
