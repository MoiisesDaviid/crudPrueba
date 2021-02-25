-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2021 a las 02:40:57
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(2) NOT NULL,
  `estado` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`) VALUES
(1, 'Nuevo'),
(2, 'Ejecución'),
(3, 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id_orden` int(4) NOT NULL,
  `id_tipo_orden` int(2) NOT NULL,
  `asunto` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `id_estado` int(2) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_limite` date NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id_orden`, `id_tipo_orden`, `asunto`, `id_estado`, `fecha_creacion`, `fecha_limite`, `usuario`) VALUES
(4, 1, 'Petición 7 dias', 1, '2021-02-24', '2021-03-03', 'peticion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) UNSIGNED NOT NULL,
  `rol` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_orden`
--

CREATE TABLE `tipo_orden` (
  `id_tipo_orden` int(2) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_orden`
--

INSERT INTO `tipo_orden` (`id_tipo_orden`, `tipo`) VALUES
(1, 'Petición'),
(2, 'Queja'),
(3, 'Reclamo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rol_id` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `rol_id`) VALUES
(1, 'moises', '123456', 1),
(2, 'lector', '123456', 2),
(3, 'farides', '123456', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id_orden`),
  ADD KEY `tipo_orden_id` (`id_tipo_orden`),
  ADD KEY `estado_id` (`id_estado`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_orden`
--
ALTER TABLE `tipo_orden`
  ADD PRIMARY KEY (`id_tipo_orden`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id_users` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id_orden` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_orden`
--
ALTER TABLE `tipo_orden`
  MODIFY `id_tipo_orden` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD CONSTRAINT `estado_id` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`),
  ADD CONSTRAINT `tipo_orden_id` FOREIGN KEY (`id_tipo_orden`) REFERENCES `tipo_orden` (`id_tipo_orden`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `rol_id_users` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
