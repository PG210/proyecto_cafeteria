-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-07-2020 a las 02:50:41
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idfac` int(11) NOT NULL,
  `idusu` int(11) DEFAULT NULL,
  `idprod` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cant` int(11) DEFAULT NULL,
  `valunit` int(11) DEFAULT NULL,
  `tot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`idfac`, `idusu`, `idprod`, `fecha`, `cant`, `valunit`, `tot`) VALUES
(4, 14567, 12, '2020-07-20', 5, 8000, 40000),
(5, 14567, 12, '2020-07-20', 2, 8000, 16000),
(6, 14567, 13, '2020-07-20', 1, 5000, 5000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idprod` int(11) NOT NULL,
  `nomprod` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `preprod` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idprod`, `nomprod`, `preprod`, `cantidad`) VALUES
(11, 'cafe expreso', 5000, 7),
(12, 'cafe capuchino', 8000, 4),
(13, 'cafe latte', 5000, 3),
(14, 'cafe mocachino', 10000, 5),
(15, 'cafe con leche', 8000, 3),
(16, 'cafe macchiato', 10000, 4),
(17, 'cafe bombon', 5000, 4),
(18, 'space latte', 10000, 2),
(19, 'cafe mocha', 8000, 3),
(20, 'cafe espressino', 5000, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusu` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` varchar(1) NOT NULL,
  `telusu` varchar(12) NOT NULL,
  `dirusu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusu`, `nombre`, `email`, `clave`, `cargo`, `telusu`, `dirusu`) VALUES
(14567, 'Aida Benavides', 'aida123@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '3054567890', 'cra1 no 4-24 funes'),
(108594037, 'Pedro Cuasquer', 'pedrocuasquer21095@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '3178916679', 'cra6 no 7-49 pupiales');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idfac`),
  ADD KEY `idusu` (`idusu`),
  ADD KEY `idprod` (`idprod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idprod`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusu`),
  ADD UNIQUE KEY `id` (`idusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idfac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`idusu`) REFERENCES `usuarios` (`idusu`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`idprod`) REFERENCES `producto` (`idprod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
