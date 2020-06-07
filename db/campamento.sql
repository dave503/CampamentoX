
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2020 a las 07:48:38
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `campamento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aranceles`
--

CREATE TABLE `aranceles` (
  `id_aran` int(11) NOT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL,
  `descuento` decimal(10,2) DEFAULT 0.00,
  `estado` int(11) DEFAULT NULL,
  `camp` int(11) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aranceles`
--

INSERT INTO `aranceles` (`id_aran`, `tipo`, `valor`, `descuento`, `estado`, `camp`, `fecha_registro`, `fecha_mod`) VALUES
(1, 'Cuota', '45', '0.25', 1, 1, '2020-05-31 16:43:35', NULL),
(2, 'Cuota', '45', '0.35', 1, 1, '2020-05-31 16:43:49', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campamento`
--

CREATE TABLE `campamento` (
  `id_camp` int(11) NOT NULL,
  `lugar` varchar(25) DEFAULT NULL,
  `fecha_camp` date DEFAULT NULL,
  `fecha_registro` datetime NOT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campamento`
--

INSERT INTO `campamento` (`id_camp`, `lugar`, `fecha_camp`, `fecha_registro`, `fecha_mod`, `estado`) VALUES
(1, 'Lago de Ilopango', '2020-08-20', '2020-05-31 18:06:58', '2020-05-31 18:06:58', 0),
(2, 'Planes de renderos', '2020-10-21', '2020-05-31 17:34:36', '2020-05-31 18:10:03', 0),
(3, 'San Salvador, CIFCO', '2020-08-23', '2020-05-31 18:08:42', '2020-05-31 18:08:42', 0),
(4, 'Estadio Barraza', '2020-08-31', '2020-05-31 18:11:04', '2020-05-31 18:11:26', 1);

-- --------------------------------------------------------
 
--
-- Estructura de tabla para la tabla `concepto`
--

CREATE TABLE `concepto` (
  `id_con` int(11) NOT NULL,
  `concepto` varchar(100) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `id_part` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_dep` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `zona` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_dep`, `nombre`, `zona`) VALUES
(1, 'Ahuachapan', ' occidenal'),
(2, 'Sonsonate', ' occidenal'),
(3, 'Santa Ana', ' occidenal'),
(4, 'Cabañas', ' Central'),
(5, 'Chalatenango', ' Central'),
(6, 'Cuscatlan', ' Central'),
(7, 'La Libertad', ' Central'),
(8, 'La Paz', ' Central'),
(9, 'San Salvador', ' Central'),
(10, 'Santa Ana', ' Central'),
(11, 'Morazan', ' Oriental'),
(12, 'San Miguel', ' Oriental'),
(13, 'Usulutan', ' Oriental'),
(14, 'LA Union', ' Oriental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id_part` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `direccion` varchar(25) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `dui` varchar(11) DEFAULT NULL,
  `encargado` varchar(25) DEFAULT NULL,
  `pago` int(11) DEFAULT NULL,
  `departamento` int(11) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `contra` varchar(12) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_mod` datetime DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id_part`, `nombre`, `apellido`, `sexo`, `direccion`, `email`, `telefono`, `edad`, `dui`, `encargado`, `pago`, `departamento`, `usuario`, `contra`, `tipo`, `fecha_registro`, `fecha_mod`, `foto`, `estado`) VALUES
(1, 'admin', 'admin', 'M', 'SM', 'no se ', 65665, 22, '4496494', 'no hay', 1, 6, 'admin', '123', 1, '2020-06-16 23:07:53', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `id_tip` int(11) NOT NULL,
  `nombre_tipo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`id_tip`, `nombre_tipo`) VALUES
(1, 'Admin'),
(2, 'Lider'),
(3, 'Participante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aranceles`
--
ALTER TABLE `aranceles`
  ADD PRIMARY KEY (`id_aran`),
  ADD KEY `camp` (`camp`);

--
-- Indices de la tabla `campamento`
--
ALTER TABLE `campamento`
  ADD PRIMARY KEY (`id_camp`);

--
-- Indices de la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD PRIMARY KEY (`id_con`),
  ADD KEY `id_part` (`id_part`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id_part`),
  ADD KEY `pago` (`pago`),
  ADD KEY `departamento` (`departamento`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`id_tip`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aranceles`
--
ALTER TABLE `aranceles`
  MODIFY `id_aran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `campamento`
--
ALTER TABLE `campamento`
  MODIFY `id_camp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `concepto`
--
ALTER TABLE `concepto`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  MODIFY `id_tip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aranceles`
--
ALTER TABLE `aranceles`
  ADD CONSTRAINT `aranceles_ibfk_1` FOREIGN KEY (`camp`) REFERENCES `campamento` (`id_camp`);

--
-- Filtros para la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD CONSTRAINT `concepto_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `participantes` (`id_part`);

--
-- Filtros para la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`pago`) REFERENCES `aranceles` (`id_aran`),
  ADD CONSTRAINT `participantes_ibfk_2` FOREIGN KEY (`departamento`) REFERENCES `departamento` (`id_dep`),
  ADD CONSTRAINT `participantes_ibfk_3` FOREIGN KEY (`tipo`) REFERENCES `tipo_persona` (`id_tip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
