-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2022 a las 21:56:03
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `doscapas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID` int(5) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `CORREO` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID`, `NOMBRE`, `APELLIDO`, `CORREO`) VALUES
(0, 'Magali ', 'Lima', 'magali@gmail.com'),
(1, 'Victor', 'Lima', 'victor@gmail.com'),
(2, 'Nancy', 'Cordova', 'nancy@gmail.com'),
(3, 'Francisco', 'Lima', 'francisco@gmail.com'),
(4, 'Zaira ', 'Cordova ', 'zaira@gmail.com'),
(6, 'Ariadna', 'Lima', 'ariadna@gmail.com'),
(7, 'Paola', 'Reyes', 'paola@gmail.com'),
(8, 'Astrid', 'Ramirez', 'astrid@gmail.com'),
(9, 'Itzel', 'Lopez', 'itzel@gmail.com'),
(10, 'Nayeli ', ' Alvarez', 'nayeli@gmail.com'),
(11, 'Gisela', 'Morales', 'gisela@gmail.com'),
(12, 'Juan', 'Gomez', 'juan@gmail.com'),
(13, 'Victor', 'Lopez', 'victor2@gmail.com'),
(14, 'Rosalba', 'Jimenez', 'rosalba@gmail.com'),
(15, 'Jose', 'Hernandez', 'jose@gmail.com'),
(16, 'Alberto ', 'Perez ', 'alberto@gmail.com'),
(17, 'Martha', 'Heredia', 'marta@gmail.com'),
(18, 'Tania ', 'Quintana ', 'tania@gmail.com'),
(19, 'Carlos', 'Medina', 'carlos@gmail.com'),
(20, 'Omar', 'Dominguez', 'omar@gmail.com'),
(21, 'Diana', 'Heredia', 'diana@gmail.com');
(22, 'Manuel', 'Garcia', 'manuel@gmail.com'),
(23, 'Adrian', 'Ramirez', 'adrian@gmail,com'),
(24, 'Alicia', 'Lopez', 'alicia@gmail.com'),
(26, 'Juan', 'Perez', 'juan@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
