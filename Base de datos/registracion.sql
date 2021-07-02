-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2019 a las 04:19:03
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
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Contrasenia` varchar(80) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `Usuario`, `Contrasenia`, `Mail`, `Nombre`, `Fecha`) VALUES
(15, 'Nonthue', '$2y$10$p3sZYjKtFpvRq3SzKDN90.xsneYYVEcnkofdnp7WlcEAxS0fsif6W', 'nothue@gmail.com', 'Teordoro Garcia', '0000-00-00'),
(30, 'caro09', '$2y$10$Yv.6BUCcXMXWrwjHYBjzFu1gy8ZSLp1JR8Fv8bsEAG7rGQBN8T6yS', '', '', '0000-00-00'),
(31, 'caro09', '$2y$10$DOMBI.bzuq2WYRdFoM9STObjhQ2y2wN/fV4JkECUNhHDIcpu6ktIG', '', '', '0000-00-00'),
(73, 'china', '$2y$10$eJCqM9Kusf.pP6FfKyzh0eKeS2z71gKt93uSux1OOOMze19mFRvL6', '', '', '0000-00-00'),
(74, 'china', '$2y$10$0YqjNVdV997D293OHDhyF.zmiGpQAziqVedGiNYeR6q.ztk7QCy.G', '', '', '0000-00-00'),
(75, '', '$2y$10$FYYifitNKBSURCMNE2epguFEn6r6y9FeYC2Q2j5A07e34UsV93zwa', '', '', '0000-00-00'),
(76, 'china', '$2y$10$1AjyWzfc9XuISU6uDjuc1OXkncKsWop/Uc3Yjhj4.pt/e3dzJqUF2', '', '', '0000-00-00'),
(77, 'china', '$2y$10$3Izh73o9NETf26Ov4P17hewnxDrGg5buzZdAXO5PZ1cRzvnZ1UvxO', '', '', '0000-00-00'),
(78, 'Juan', '$2y$10$SDzI8yQtf72AiXW.IrqZkOtYP7SKVxnh92yfGTIA3FiEg9cDY1gvK', 'juan@mail.com', 'juan ignacio', '0000-00-00'),
(86, 'Teo', '$2y$10$kvx0q0uaF8Lz/0KqbfnZ.eLV5XdIrGxde8SaTWCQtqQkQx/pB/jfW', 'teo@gmail.com', 'Teodoros', '0000-00-00'),
(87, '', '$2y$10$Nxh25zHtF1DPPJpeECNs3uzoQGhR1MKJC9a5UiPDKryzRICME5qay', '', '', '0000-00-00'),
(88, 'Teo2', '$2y$10$wOLADQRADH1krILBw8Zj5OqzkiGalukE.CqriwvgGlk.gH7YSEWGm', 'teo2@gmail.com', 'teodoro', '0000-00-00'),
(89, 'skg', '$2y$10$AiCXWCOuikpcvT8185q.n.knzPAu4iez9jdfD0SPvQfJXtGkpfpoy', '', '', '2019-10-25'),
(90, '', '$2y$10$YWnaiEYFOFCSnTjB8quYJugwh.4UkRRRixvjzdOUzY.bBoQz1p97S', '', '', '2019-11-01'),
(91, '', '$2y$10$JuNILqUdQNzZGiI2qf3mWeUywi4oA2Sow6BkDegzysmn2UtXeFMVa', '', '', '2019-11-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
