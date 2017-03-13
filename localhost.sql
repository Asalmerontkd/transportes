-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-03-2017 a las 07:21:10
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.29-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `transportes`
--
CREATE DATABASE IF NOT EXISTS `transportes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `transportes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `id` int(11) NOT NULL,
  `idCentro` varchar(50) NOT NULL,
  `centro` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`id`, `idCentro`, `centro`) VALUES
(1, 'MT612301', 'Tienda ph mt612301'),
(2, 'CD909000', 'Cedis ph');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combustible`
--

CREATE TABLE `combustible` (
  `id` int(11) NOT NULL,
  `fechaTransaccion` datetime NOT NULL,
  `usuario` int(11) NOT NULL,
  `noComprobante` int(11) NOT NULL,
  `idTerminal` int(11) NOT NULL,
  `tarjeta` bigint(20) NOT NULL,
  `fecha` datetime NOT NULL,
  `region` int(11) NOT NULL,
  `centro` int(11) NOT NULL,
  `vehiculo` int(11) NOT NULL,
  `kmAntes` bigint(20) NOT NULL,
  `kmTransaccion` bigint(20) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `gasera` int(11) NOT NULL,
  `mercancia` int(11) NOT NULL,
  `cantMercancia` float(6,2) NOT NULL,
  `precioUnitario` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `combustible`
--

INSERT INTO `combustible` (`id`, `fechaTransaccion`, `usuario`, `noComprobante`, `idTerminal`, `tarjeta`, `fecha`, `region`, `centro`, `vehiculo`, `kmAntes`, `kmTransaccion`, `capacidad`, `gasera`, `mercancia`, `cantMercancia`, `precioUnitario`) VALUES
(1, '2017-03-13 06:30:29', 1, 18719, 3264, 6363180004382485, '2017-01-02 08:33:32', 1, 1, 1, 176250, 176270, 132, 1, 1, 46.97, 17.03),
(2, '2017-03-13 06:30:29', 1, 18723, 3264, 6363180004382576, '2017-01-02 08:37:31', 1, 2, 2, 120347, 120352, 120, 1, 1, 46.37, 17.03),
(3, '2017-03-13 06:30:29', 1, 18727, 3264, 6363180004381941, '2017-01-02 08:40:31', 1, 2, 3, 181438, 181718, 150, 1, 1, 46.97, 17.03),
(4, '2017-03-13 06:30:29', 1, 3756, 797, 6363180004382410, '2017-01-02 08:45:04', 1, 2, 4, 160195, 160457, 150, 2, 1, 47.47, 16.85),
(5, '2017-03-13 06:30:29', 1, 36558, 1271, 6363180004382121, '2017-01-02 09:12:35', 1, 2, 5, 167029, 167306, 150, 3, 1, 48.10, 16.63),
(6, '2017-03-13 06:30:29', 1, 35144, 12458, 6363180004381982, '2017-01-02 09:47:08', 1, 2, 6, 126520, 127183, 120, 4, 1, 46.50, 17.09),
(7, '2017-03-13 06:30:29', 1, 42564, 12490, 6363180004382303, '2017-01-02 10:00:13', 1, 2, 7, 71756, 72113, 120, 5, 1, 46.85, 17.07),
(8, '2017-03-13 06:30:29', 1, 44391, 6057, 6363180004381867, '2017-01-02 10:02:20', 1, 2, 8, 59645, 59790, 120, 6, 1, 47.03, 17.01),
(9, '2017-03-13 06:30:29', 1, 16116, 718, 6363180004381545, '2017-01-02 10:06:54', 1, 2, 9, 11674, 114993, 200, 7, 1, 47.03, 17.01),
(10, '2017-03-13 06:30:29', 1, 29647, 287, 6363180004382394, '2017-01-02 10:10:51', 1, 2, 10, 91227, 91750, 120, 8, 1, 46.80, 17.09),
(11, '2017-03-13 06:36:50', 1, 18719, 3264, 6363180004382485, '2017-01-02 08:33:32', 1, 1, 1, 176250, 176270, 132, 1, 1, 46.97, 17.03),
(12, '2017-03-13 06:36:51', 1, 18723, 3264, 6363180004382576, '2017-01-02 08:37:31', 1, 2, 2, 120347, 120352, 120, 1, 1, 46.37, 17.03),
(13, '2017-03-13 06:36:51', 1, 18727, 3264, 6363180004381941, '2017-01-02 08:40:31', 1, 2, 3, 181438, 181718, 150, 1, 1, 46.97, 17.03),
(14, '2017-03-13 06:36:51', 1, 3756, 797, 6363180004382410, '2017-01-02 08:45:04', 1, 2, 4, 160195, 160457, 150, 2, 1, 47.47, 16.85),
(15, '2017-03-13 06:36:51', 1, 36558, 1271, 6363180004382121, '2017-01-02 09:12:35', 1, 2, 5, 167029, 167306, 150, 3, 1, 48.10, 16.63),
(16, '2017-03-13 06:36:51', 1, 35144, 12458, 6363180004381982, '2017-01-02 09:47:08', 1, 2, 6, 126520, 127183, 120, 4, 1, 46.50, 17.09),
(17, '2017-03-13 06:36:51', 1, 42564, 12490, 6363180004382303, '2017-01-02 10:00:13', 1, 2, 7, 71756, 72113, 120, 5, 1, 46.85, 17.07),
(18, '2017-03-13 06:36:51', 1, 44391, 6057, 6363180004381867, '2017-01-02 10:02:20', 1, 2, 8, 59645, 59790, 120, 6, 1, 47.03, 17.01),
(19, '2017-03-13 06:36:51', 1, 16116, 718, 6363180004381545, '2017-01-02 10:06:54', 1, 2, 9, 11674, 114993, 200, 7, 1, 47.03, 17.01),
(20, '2017-03-13 06:36:51', 1, 29647, 287, 6363180004382394, '2017-01-02 10:10:51', 1, 2, 10, 91227, 91750, 120, 8, 1, 46.80, 17.09),
(21, '2017-03-13 06:39:17', 1, 18719, 3264, 6363180004382485, '2017-01-02 08:33:32', 1, 1, 1, 176250, 176270, 132, 1, 1, 46.97, 17.03),
(22, '2017-03-13 06:39:17', 1, 18723, 3264, 6363180004382576, '2017-01-02 08:37:31', 1, 2, 2, 120347, 120352, 120, 1, 1, 46.37, 17.03),
(23, '2017-03-13 06:39:17', 1, 18727, 3264, 6363180004381941, '2017-01-02 08:40:31', 1, 2, 3, 181438, 181718, 150, 1, 1, 46.97, 17.03),
(24, '2017-03-13 06:39:17', 1, 3756, 797, 6363180004382410, '2017-01-02 08:45:04', 1, 2, 4, 160195, 160457, 150, 2, 1, 47.47, 16.85),
(25, '2017-03-13 06:39:17', 1, 36558, 1271, 6363180004382121, '2017-01-02 09:12:35', 1, 2, 5, 167029, 167306, 150, 3, 1, 48.10, 16.63),
(26, '2017-03-13 06:39:17', 1, 35144, 12458, 6363180004381982, '2017-01-02 09:47:08', 1, 2, 6, 126520, 127183, 120, 4, 1, 46.50, 17.09),
(27, '2017-03-13 06:39:17', 1, 42564, 12490, 6363180004382303, '2017-01-02 10:00:13', 1, 2, 7, 71756, 72113, 120, 5, 1, 46.85, 17.07),
(28, '2017-03-13 06:39:17', 1, 44391, 6057, 6363180004381867, '2017-01-02 10:02:20', 1, 2, 8, 59645, 59790, 120, 6, 1, 47.03, 17.01),
(29, '2017-03-13 06:39:17', 1, 16116, 718, 6363180004381545, '2017-01-02 10:06:54', 1, 2, 9, 11674, 114993, 200, 7, 1, 47.03, 17.01),
(30, '2017-03-13 06:39:17', 1, 29647, 287, 6363180004382394, '2017-01-02 10:10:51', 1, 2, 10, 91227, 91750, 120, 8, 1, 46.80, 17.09);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasera`
--

CREATE TABLE `gasera` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `razonSocial` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gasera`
--

INSERT INTO `gasera` (`id`, `codigo`, `estado`, `razonSocial`) VALUES
(1, 114227, 'NVLE', 'OXXO GAS VASCONCELOS 10107'),
(2, 100132, 'PBLA', 'SERVICIO TEPEACA 6072'),
(3, 107580, 'TBSC', 'SERVICIO OLMECA 3387'),
(4, 116559, 'QRTO', 'ORSAN ANTEA 12439'),
(5, 108063, 'MEXI', 'SUPER SERV. GRAN PREMIO 3735'),
(6, 5557, 'ESMX', 'GAS BARRIENTOS 5557'),
(7, 114258, 'ESMX', 'MEIGAS S. LA QUINTA RIA 10138'),
(8, 113441, 'QRTO', 'SUPER SERVICIO QUINTANA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercancia`
--

CREATE TABLE `mercancia` (
  `id` int(11) NOT NULL,
  `mercancia` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mercancia`
--

INSERT INTO `mercancia` (`id`, `mercancia`) VALUES
(1, 'Diesel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `region`) VALUES
(1, 'El palacio de hierro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Capturista'),
(3, 'Cotrolador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal`
--

CREATE TABLE `temporal` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `fechaTemp` datetime NOT NULL,
  `region` varchar(150) NOT NULL,
  `idCentro` varchar(50) NOT NULL,
  `centro` varchar(150) NOT NULL,
  `tarjeta` bigint(20) NOT NULL,
  `idVehiculo` int(11) NOT NULL,
  `descVehiculo` varchar(150) NOT NULL,
  `noComprobante` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `codPemex` int(11) NOT NULL,
  `razonSocial` varchar(200) NOT NULL,
  `cerCualli` int(11) NOT NULL,
  `estado` varchar(150) NOT NULL,
  `kmAntes` int(11) NOT NULL,
  `kmTransaccion` int(11) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `mercancia` varchar(50) NOT NULL,
  `cantMercancia` float(5,2) NOT NULL,
  `precioUni` float(5,2) NOT NULL,
  `idTerminal` int(11) NOT NULL,
  `placa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `correo`, `pass`, `rol`) VALUES
(1, 'Pedro Antonio', 'psrantonio@gmail.com', '277048b890084f92ed1a8f231389cf30', 1),
(2, 'Administrador', 'admin@transportes.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'Capturista', 'captura@transportes.com', 'af17de7b4a53e832a9beb3e9b196ac74', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(11) NOT NULL,
  `idVehiculo` int(11) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `idVehiculo`, `placa`, `descripcion`) VALUES
(1, 203, 'ASDASD', '203 mt203'),
(2, 326, 'ASDFASD', '326 326-cedis'),
(3, 224, 'ASDASD', '224 mty-224'),
(4, 207, 'DBFBDF', '207 pue-207'),
(5, 215, 'RDFB', '215 vh215'),
(6, 232, 'DFBFB', '232 232-queretaro'),
(7, 226, 'BDFBBD', '226 226-tienda'),
(8, 336, 'BDFBDF', '336 336-cedis'),
(9, 205, 'SRGW', '205 inter-205'),
(10, 360, 'DFBDFB', '360 360-cedis');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `combustible`
--
ALTER TABLE `combustible`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gasera`
--
ALTER TABLE `gasera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mercancia`
--
ALTER TABLE `mercancia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temporal`
--
ALTER TABLE `temporal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `combustible`
--
ALTER TABLE `combustible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `gasera`
--
ALTER TABLE `gasera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `mercancia`
--
ALTER TABLE `mercancia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `temporal`
--
ALTER TABLE `temporal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
