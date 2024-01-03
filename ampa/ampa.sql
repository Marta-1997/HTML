-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2024 a las 22:27:21
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ampa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_estudios`
--

CREATE TABLE `nivel_estudios` (
  `id` int(11) NOT NULL,
  `nombre_alumno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` enum('primero','segundo','tercero','cuarto','quinto','sexto') COLLATE utf8_spanish_ci NOT NULL,
  `id_padre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nivel_estudios`
--

INSERT INTO `nivel_estudios` (`id`, `nombre_alumno`, `nivel`, `id_padre`) VALUES
(8, 'Pepe Lopez', 'quinto', 8),
(9, 'Jose Jimenez', 'segundo', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id` int(11) NOT NULL,
  `nombre_padre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_padre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email_padre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_padre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_madre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_madre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email_madre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_madre` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id`, `nombre_padre`, `apellido_padre`, `email_padre`, `telefono_padre`, `nombre_madre`, `apellido_madre`, `email_madre`, `telefono_madre`) VALUES
(8, 'Juan', 'Jimenez', 'juan@gmail.com', '639820092', 'Ana', 'Castillo', 'ana@gmail.com', '628192802'),
(9, 'Luis', 'Lopez', 'luis@gmail.com', '639820092', 'Luisa', 'Jimenez', 'luisa@gmai.com', '628192802');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `pass`) VALUES
(13, 'Marta ', 'Huertas', 'marta@gmail.com', 'marta'),
(14, 'Jose', 'Gonzalez', 'jose@gmail.com', 'jose');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nivel_estudios`
--
ALTER TABLE `nivel_estudios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_padre` (`id_padre`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_padre` (`email_padre`),
  ADD UNIQUE KEY `email_madre` (`email_madre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nivel_estudios`
--
ALTER TABLE `nivel_estudios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nivel_estudios`
--
ALTER TABLE `nivel_estudios`
  ADD CONSTRAINT `nivel_estudios_ibfk_1` FOREIGN KEY (`id_padre`) REFERENCES `padres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
