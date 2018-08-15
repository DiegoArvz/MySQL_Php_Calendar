-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2018 a las 19:29:06
-- Versión del servidor: 5.7.11-log
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eval_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(250) NOT NULL,
  `FechaInicio` date NOT NULL,
  `HoraInicio` time DEFAULT NULL,
  `FechaFinalizacion` date DEFAULT NULL,
  `HoraFinalizacion` time DEFAULT NULL,
  `DiaCompleto` varchar(50) NOT NULL,
  `ID_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`ID`, `Titulo`, `FechaInicio`, `HoraInicio`, `FechaFinalizacion`, `HoraFinalizacion`, `DiaCompleto`, `ID_Usuario`) VALUES
(7, 'Despedida', '2018-12-14', '00:00:00', '0000-00-00', '00:00:00', '1', 7),
(9, 'Especial de Comida', '2018-12-01', '13:00:00', '2018-12-02', '18:00:00', '0', 8),
(10, 'Cumpleaños chido', '2018-12-08', '14:00:00', '2018-12-08', '20:00:00', '0', 8),
(11, 'Carne Asada', '2018-12-15', '10:00:00', '2018-12-15', '17:00:00', '0', 8),
(12, 'Fumigación', '2018-12-09', '13:00:00', '2018-12-09', '15:00:00', '0', 9),
(13, 'Podada', '2018-12-20', '10:00:00', '2018-12-20', '12:00:00', '0', 9),
(14, 'Convivio Familiar', '2018-12-25', '15:00:00', '2018-12-25', '22:00:00', '1', 9),
(20, 'Las mañanitas', '2018-06-19', '07:00:00', '2018-06-26', '07:30:00', 'false', 7),
(22, 'Cumpleaños', '2018-12-12', '00:00:00', '0000-00-00', '00:00:00', 'true', 7),
(23, 'Brincacharcos', '2018-12-08', '00:00:00', '0000-00-00', '00:00:00', 'true', 7),
(24, 'Las nubes', '2018-12-18', NULL, NULL, NULL, 'true', 7),
(25, 'Televisión', '2018-12-17', NULL, NULL, NULL, 'true', 7),
(26, 'Solecito', '2018-12-10', NULL, NULL, NULL, 'true', 7),
(27, 'Tardeada', '2018-12-20', '00:00:00', '0000-00-00', '00:00:00', 'true', 7),
(28, 'Tennis', '2018-12-23', '07:00:00', '2018-12-25', '10:00:00', 'false', 7),
(29, 'Basket', '2018-12-26', NULL, NULL, NULL, 'true', 7),
(30, 'Tacos', '2018-12-21', '07:00:00', '2018-12-21', '08:30:00', 'false', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NombreUsuario` varchar(50) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `ID_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NombreUsuario`, `Email`, `Contrasena`, `FechaNacimiento`, `ID_Usuario`) VALUES
('Marco', 'marco@nextu.com', '$2y$10$DFnrS9h9WwmTkerOQgbvDeJfhGTNvoXYUDjADTFyfjUbXExC1ix2G', '1994-03-05', 7),
('Jose Luis', 'joseluis@nextu.com', '$2y$10$8LasGpRjEx2AuUCyj2qtWeqV6Ka5L57bV9HdMA0ldEzsIZC7vOM8e', '1952-01-04', 8),
('Angela', 'angela@nextu.com', '$2y$10$Rc5..Lc1sXhJUcq4fX.0bO7AdxAJ41V67xCLUOiJOX352gvLNyw.y', '1961-12-02', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD UNIQUE KEY `NombreUsuario` (`NombreUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `FK_ID_Usuario` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
