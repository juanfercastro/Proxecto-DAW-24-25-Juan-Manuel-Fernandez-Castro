-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mariadb:3306
-- Tiempo de generación: 11-05-2025 a las 21:08:58
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `devlink`
--
CREATE DATABASE IF NOT EXISTS `devlink`;
USE `devlink`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Administrador`
--

CREATE TABLE `Administrador` (
  `Id_admin` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Desarrollador`
--

CREATE TABLE `Desarrollador` (
  `Id_desarrollador` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresa`
--

CREATE TABLE `Empresa` (
  `Id_empresa` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EntradaForo`
--

CREATE TABLE `EntradaForo` (
  `Id_entrada` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Fecha` datetime DEFAULT current_timestamp(),
  `Contenido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Oferta`
--

CREATE TABLE `Oferta` (
  `Id_oferta` int(11) NOT NULL,
  `Id_empresa` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Requisitos` text NOT NULL,
  `Ubicacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Portfolio`
--

CREATE TABLE `Portfolio` (
  `Id_portfolio` int(11) NOT NULL,
  `Id_desarrollador` int(11) NOT NULL,
  `Proyectos` text DEFAULT NULL,
  `Tecnologias` text DEFAULT NULL,
  `Sobre_mi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Administrador`
--
ALTER TABLE `Administrador`
  ADD PRIMARY KEY (`Id_admin`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indices de la tabla `Desarrollador`
--
ALTER TABLE `Desarrollador`
  ADD PRIMARY KEY (`Id_desarrollador`),
  ADD UNIQUE KEY `Mail` (`Mail`);

--
-- Indices de la tabla `Empresa`
--
ALTER TABLE `Empresa`
  ADD PRIMARY KEY (`Id_empresa`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indices de la tabla `EntradaForo`
--
ALTER TABLE `EntradaForo`
  ADD PRIMARY KEY (`Id_entrada`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `Oferta`
--
ALTER TABLE `Oferta`
  ADD PRIMARY KEY (`Id_oferta`),
  ADD KEY `Id_empresa` (`Id_empresa`);

--
-- Indices de la tabla `Portfolio`
--
ALTER TABLE `Portfolio`
  ADD PRIMARY KEY (`Id_portfolio`),
  ADD UNIQUE KEY `Id_desarrollador` (`Id_desarrollador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Administrador`
--
ALTER TABLE `Administrador`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Desarrollador`
--
ALTER TABLE `Desarrollador`
  MODIFY `Id_desarrollador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Empresa`
--
ALTER TABLE `Empresa`
  MODIFY `Id_empresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `EntradaForo`
--
ALTER TABLE `EntradaForo`
  MODIFY `Id_entrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Oferta`
--
ALTER TABLE `Oferta`
  MODIFY `Id_oferta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Portfolio`
--
ALTER TABLE `Portfolio`
  MODIFY `Id_portfolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `EntradaForo`
--
ALTER TABLE `EntradaForo`
  ADD CONSTRAINT `EntradaForo_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `Desarrollador` (`Id_desarrollador`);

--
-- Filtros para la tabla `Oferta`
--
ALTER TABLE `Oferta`
  ADD CONSTRAINT `Oferta_ibfk_1` FOREIGN KEY (`Id_empresa`) REFERENCES `Empresa` (`Id_empresa`);

--
-- Filtros para la tabla `Portfolio`
--
ALTER TABLE `Portfolio`
  ADD CONSTRAINT `Portfolio_ibfk_1` FOREIGN KEY (`Id_desarrollador`) REFERENCES `Desarrollador` (`Id_desarrollador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
