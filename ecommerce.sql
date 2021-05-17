-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2021 a las 21:47:54
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `id` int(11) NOT NULL,
  `Cliente` varchar(50) NOT NULL,
  `juego` varchar(50) NOT NULL,
  `Fecha` datetime NOT NULL,
  `precio` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`id`, `Cliente`, `juego`, `Fecha`, `precio`) VALUES
(3, 'beatriz sarmiento', 'vampires pp', '2021-05-16 21:33:22', 0),
(4, 'beatriz sarmiento', 'prueba ', '2021-05-16 21:33:56', 0),
(6, 'beatriz sarmiento', 'prueba ', '2021-05-16 21:40:22', 2500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `dni` int(60) NOT NULL,
  `Nombre` varchar(50) NOT NULL DEFAULT '0',
  `Apellido` varchar(50) NOT NULL DEFAULT '0',
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `dni`, `Nombre`, `Apellido`, `Correo`, `Telefono`) VALUES
(4, 63559314, 'beatriz', 'sarmiento', 'besarmientoc@outlook.com', '315364261');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `neto` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  `producto` varchar(50) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `neto`, `iva`, `total`, `cliente`, `fecha`, `producto`, `cantidad`, `estado`) VALUES
(1, 4500, 19, 7800, 'beatriz sarmiento', '2021-05-16 16:35:34', 'vampires pp', 4, 'pagada'),
(2, 5000, 9, 20000, 'beatriz sarmiento', '2021-05-16 17:17:48', 'vampires pp 35000', 4, 'pagada'),
(3, 140000, 7, 9800, 'beatriz sarmiento', '2021-05-16 17:20:38', 'vampires pp', 4, 'pagada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `id` int(11) NOT NULL,
  `codigo` int(60) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `año` int(11) NOT NULL,
  `protagonistas` varchar(250) NOT NULL,
  `director` varchar(50) NOT NULL,
  `productor` varchar(50) NOT NULL,
  `tecnologias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`id`, `codigo`, `titulo`, `precio`, `nombre`, `año`, `protagonistas`, `director`, `productor`, `tecnologias`) VALUES
(2, 123456, 'prueba ', 2500, 'HHH', 2011, 'jenni Sanchez\r\nJesus Quintero\r\nJavier Gomez', 'Olmedo Bayona', 'Olmedo Bayona', 'Nintendo'),
(3, 7897, 'ferreagro lm', 4500, 'el pariente', 2020, 'brad pite JLo Angelina Joli', 'Jesus Camargo Sanchez', 'Alonso Cantillo Alvarez', 'Xbox');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
