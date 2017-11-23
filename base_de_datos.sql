-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2017 a las 02:30:16
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_de_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombre_tabla`
--

CREATE TABLE `nombre_tabla` (
  `identificador` int(11) NOT NULL,
  `columna_usuario` varchar(255) NOT NULL,
  `columna_password` varchar(255) NOT NULL,
  `columna_ciudad` varchar(20) NOT NULL,
  `columna_mascota` varchar(20) NOT NULL,
  `columna_mascotaedad` int(2) NOT NULL,
  `columna_mascotadireccion` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nombre_tabla`
--

INSERT INTO `nombre_tabla` (`identificador`, `columna_usuario`, `columna_password`, `columna_ciudad`, `columna_mascota`, `columna_mascotaedad`, `columna_mascotadireccion`, `image`) VALUES
(6, 'Isaac', '$2y$10$M9L.6.LUknZYYPK6MLDWuu8gYuJJDiBN2yeDDQ9UkHmo0goyJ1E.O', 'Mexico', 'Terry', 10, 'Tabasco', 'prueba'),
(7, 'Belmont', '$2y$10$lIjRb9XwZATeq9tOYqoer.r.cfz2R.xRZMCQYtABmy3ODpUItsM/i', 'Tampico', 'Terry', 8, 'Tabasco', ''),
(8, 'gg', '$2y$10$JDM9cxnmeZdNauGUpbGYjOkS/aB9gRFb9Mi2NRqTFI7DOry8wIrnO', 'gg', 'gg', 12, 'gg', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nombre_tabla`
--
ALTER TABLE `nombre_tabla`
  ADD PRIMARY KEY (`identificador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nombre_tabla`
--
ALTER TABLE `nombre_tabla`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
