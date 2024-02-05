-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2023 a las 23:47:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_london`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nom_categoria` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nom_categoria`, `estado`) VALUES
(1, 'Bebidas', 'Activo'),
(2, 'Alitas Picante', 'Activo'),
(18, 'Hamburguesas', 'Activo'),
(19, 'Sándwiches', 'Activo'),
(20, 'Piqueos', 'Activo'),
(21, 'Combos', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `asunto` varchar(30) NOT NULL,
  `detalle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`dni`, `nombre`, `apellido`, `email`, `telefono`, `asunto`, `detalle`) VALUES
(11111111, 'Fabrizzio', 'Murriagui', 'tupapizon@gmail.com', 123456879, 'Reclamo', 'sdgfa'),
(88888888, 'Fabrizzio', 'Murriagui', 'tupapizon@gmail.com', 123456879, 'Reclamo', 'vsdfaf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_reclamacion`
--

CREATE TABLE `libro_reclamacion` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `ruc` varchar(50) DEFAULT NULL,
  `nombre_cli` varchar(50) DEFAULT NULL,
  `domicilio` varchar(50) DEFAULT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `bienContratado` varchar(20) DEFAULT NULL,
  `bienContratadoDetalle` varchar(20) DEFAULT NULL,
  `reclamacion` varchar(20) DEFAULT NULL,
  `detalleReclamacion` varchar(50) DEFAULT NULL,
  `sugerencia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `libro_reclamacion`
--

INSERT INTO `libro_reclamacion` (`id`, `fecha`, `ruc`, `nombre_cli`, `domicilio`, `dni`, `telefono`, `bienContratado`, `bienContratadoDetalle`, `reclamacion`, `detalleReclamacion`, `sugerencia`) VALUES
(3, '2023-06-20', 'LUIS MARIANO QUITO HILARIO', 'LUIS MARIANO', 'AV.JAVIER PRADO 8117', '74899952', '927154668', 'producto', 'DETALLE PRODUCTO', 'reclamo', 'DETALLE', 'DED'),
(5, '2023-07-19', 'LUIS MARIANO QUITO HILARIO', 'LUIS MARIANO', 'AV.JAVIER PRADO 8117', '74899952', '927154668', 'producto', 'hola', 'reclamo', 'hola', 'hola'),
(6, '2023-07-19', 'LUIS MARIANO QUITO HILARIO', 'LUIS MARIANO', 'AV.JAVIER PRADO 8117', '74899952', '927154668', 'producto', 'hola', 'reclamo', 'hola', 'hola'),
(7, '2023-02-02', 'hola', 'fabrizzio', 'dddddddddd', '09801703', '961248857', 'producto', 'sadfasdf', 'Queja', 'sdafdaf', 'sdafsdaf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `producto` varchar(50) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT 0,
  `descripcion` varchar(150) DEFAULT NULL,
  `precio` decimal(20,2) DEFAULT NULL,
  `img` varchar(3000) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `producto`, `id_categoria`, `descripcion`, `precio`, `img`, `estado`) VALUES
(86, 'saf', 18, 'sadf', 10.00, '../img/acevichada.jpg', 'Activo'),
(87, 'Hamburguesa con doble queso', 18, 'Muy rica ', 15.00, '../img/london.jpg', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `telefono`, `usuario`, `password`, `rol`, `estado`) VALUES
(1, 'administrador', '', NULL, 'admin', 'admin', 'Administrador', 'Activo'),
(2, 'Luis', 'Quito', '927154668', 'lquito', '12345', 'Usuario', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `libro_reclamacion`
--
ALTER TABLE `libro_reclamacion`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `libro_reclamacion`
--
ALTER TABLE `libro_reclamacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
