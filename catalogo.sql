-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 24-01-2019 a las 01:44:28
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies`
--

CREATE TABLE `especies` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `especies`
--

INSERT INTO `especies` (`ID`, `Nombre`) VALUES
(1, 'Gato'),
(2, 'Perro'),
(3, 'Hamster'),
(4, 'Perico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `ID` int(11) NOT NULL,
  `ID_especie` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Nacimiento` date NOT NULL,
  `Foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`ID`, `ID_especie`, `Nombre`, `Precio`, `Nacimiento`, `Foto`) VALUES
(1, 1, 'Misifus', 100, '2019-01-10', 'misifus.png'),
(2, 4, 'Wiri', 500, '2019-01-01', 'wiri.png'),
(3, 2, 'Manchas', 400, '2019-01-05', 'manchas.png'),
(4, 1, 'meow', 400, '1997-04-10', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especies`
--
ALTER TABLE `especies`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_especie` (`ID_especie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especies`
--
ALTER TABLE `especies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `fk_especie` FOREIGN KEY (`ID_especie`) REFERENCES `especies` (`ID`);
