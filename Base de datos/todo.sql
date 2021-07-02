-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2019 a las 04:17:00
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
-- Base de datos: `todo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `tarea` varchar(80) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `fechaRealizada` date DEFAULT NULL,
  `fechaLimite` date NOT NULL,
  `Asignado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `tarea`, `estado`, `fechaRealizada`, `fechaLimite`, `Asignado`) VALUES
(114, 'Tema01', 'Realizado', '2019-11-06', '2019-11-04', ''),
(115, 'Tema02', 'Realizado', '2019-11-06', '2019-11-05', ''),
(116, 'Tema03', 'Realizado', '2019-11-06', '2019-11-06', ''),
(117, 'Tema04', 'Realizado', '2019-11-06', '2019-11-06', ''),
(118, 'Tema05', 'Realizado', '2019-11-06', '2019-11-06', ''),
(119, 'Tema06', 'Realizado', '2019-11-06', '2019-11-06', ''),
(120, 'Tema07', 'Realizado', '2019-11-06', '2019-11-06', ''),
(121, 'Tema08', 'Realizado', '2019-11-06', '2019-11-06', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
