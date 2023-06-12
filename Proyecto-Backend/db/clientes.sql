-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 19:33:50
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nit` int(100) NOT NULL,
  `razon_social` varchar(1000) NOT NULL,
  `direccion` varchar(1000) NOT NULL,
  `ciudad` varchar(1000) NOT NULL,
  `telefono` int(100) NOT NULL,
  `encargado` varchar(1000) NOT NULL,
  `comercial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nit`, `razon_social`, `direccion`, `ciudad`, `telefono`, `encargado`, `comercial`) VALUES
(883232322, 'mecanelectro', 'calle 66 n 67 -33', 'bogota', 32323222, 'yulia cantor', 'yesenia romero'),
(223232332, 'almacenes exito', 'calle 76 n 34 o 99', 'bello', 232332322, 'luna garcia', 'angie robayo'),
(11111, 'cencosud', 'carrera 67 n 33 -02', 'manizales', 44334432, 'andrea romero', 'johanna garcia'),
(2147483647, 'el  hogar', 'carrera 87 n 43 55', 'bogota', 34322244, 'rogelio hernandez', 'william vargas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
