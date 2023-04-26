-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2023 a las 20:44:58
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imprenta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `telefono`, `fecha`) VALUES
(7, 'Pedro', 'Guerrero', 900551111, '2023-02-06 13:41:06'),
(13, 'Paty', 'Rivera', 933333333, '2023-02-06 21:07:30'),
(14, 'Elena', 'Espinoza', 944444444, '2023-02-06 21:10:59'),
(15, 'Bruno', 'Bernaola', 988888888, '2023-02-07 22:38:05'),
(16, 'Maria', 'Cabezudo', 941829581, '2023-02-08 22:39:59'),
(17, 'Anthony', 'Mosquera', 930406916, '2023-02-08 23:08:13'),
(18, 'Julio', 'Jimenez', 966654444, '2023-02-09 14:17:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `clave`) VALUES
(1, 'administrador', 'imprentaideas123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(100) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `cuenta` int(50) NOT NULL,
  `saldo` int(50) NOT NULL,
  `pago` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `telefono_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `producto`, `cantidad`, `descripcion`, `precio`, `cuenta`, `saldo`, `pago`, `fecha`, `telefono_cliente`) VALUES
(18, 'Banner', 2, '2mx2m', '150', 150, 0, 'Pago Efectivo', '2023-02-08 22:40:44', 941829581),
(19, 'Banner', 3, '4mx4m , 5m,5m , 3mx5m', '790', 700, 90, 'Pago Efectivo', '2023-02-09 11:46:01', 944444444),
(20, 'Otros', 60, 'fotos', '350', 300, 50, 'Pago Efectivo', '2023-02-09 11:47:52', 944444444),
(21, 'Formatos', 1, '2mx2m', '120', 120, 0, 'Pago Efectivo', '2023-02-09 11:47:52', 944444444);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefono` (`telefono`),
  ADD KEY `fecha` (`fecha`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `telefono_cliente` (`telefono_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
