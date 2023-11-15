-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2023 a las 20:14:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_dolcegusto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diferencias`
--

CREATE TABLE `diferencias` (
  `id` int(11) NOT NULL,
  `dni` int(8) NOT NULL,
  `empleado` varchar(30) NOT NULL,
  `cantidad` double NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` int(5) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `stock`) VALUES
(1, 20050, 'LECHE DESCREMADA - NESTLÉ (1L', 50),
(3, 20051, 'CREMA DE AVELLANAS - BELLS (35', 25),
(4, 20052, 'CROSSAINT POLLO', 10),
(5, 20053, 'CROSSAINT MIXTO', 5),
(6, 20054, 'CROSSAINT CARNE', 3),
(7, 20055, 'FUDGE - SPITZE (480g)', 10),
(8, 12345, 'STEVIA - HI UNIVERSAL (150g)', 10),
(9, 20056, '???', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diferencias`
--
ALTER TABLE `diferencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diferencias`
--
ALTER TABLE `diferencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
