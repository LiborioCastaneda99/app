-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-11-2021 a las 05:13:31
-- Versión del servidor: 5.5.68-MariaDB
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logistica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `apellidos` varchar(300) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `tel` bigint(20) NOT NULL,
  `empresa` varchar(150) NOT NULL,
  `arl` varchar(100) NOT NULL,
  `img_usu` varchar(200) NOT NULL,
  `ips` varchar(150) NOT NULL,
  `tipo_seguro` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cargo` varchar(150) NOT NULL,
  `ciudad` varchar(150) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `cedula`, `tel`, `empresa`, `arl`, `img_usu`, `ips`, `tipo_seguro`, `email`, `cargo`, `ciudad`, `direccion`, `activo`) VALUES
(1, 'Liborio De Jesus', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(2, 'Pedro', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(3, 'Juan', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(4, 'Lorenzo', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(5, 'Juan', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(6, 'Lorenzo', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(7, 'Juan', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(8, 'Lorenzo', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(9, 'Juan', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(10, 'Lorenzo', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(11, 'Juan', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1),
(12, 'Lorenzo', 'Castañeda Valencia', 1045173046, 3045985632, 'RED5G', 'POSITIVA', 'imgPerfil.png', 'NUEVAEPS', 'O+', 'libodjyj@gmail.com', 'Desarrollador Junior', 'Barranquilla', 'Carrera 9G 45b 77', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
