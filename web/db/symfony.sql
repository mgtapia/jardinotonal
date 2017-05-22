-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-05-2017 a las 11:18:06
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `symfony`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `rut` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `nombre` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `rut`, `nombre`) VALUES
(1, '10128575-8', 'MIGUEL LUIS ESPERIDION VIDELA'),
(2, '10355703-8', 'MARCO ANDRES VALENZUELA AGUILERA'),
(3, '10365994-9', 'MILKA MARLE ORLIC JACOB'),
(4, '10939754-7', 'DINKA BASIC/JUAN PABLO CARDENAS'),
(5, '11635174-9', 'KARLA CRISTINA ARAVENA ARELLANO'),
(6, '12627993-0', 'MARIA SOLEDAD URZUA BAQUEDANO'),
(7, '12893093-0', 'FREDDY VELOSO'),
(8, '13357949-4', 'JULIO ENRIQUE CIFUENTES VARGAS'),
(9, '14543737-7', 'ROBERTO DE CAMPOS/M. DE LOS ANGELES BLAITT'),
(10, '15377046-8', 'ANDREA JADUE'),
(11, '15377575-3', 'PABLO FERNANDO MILLAR TALCIANI'),
(12, '15640216-8', 'CARLOS BINDER'),
(13, '16097493-1', 'ANDRES DOMINGO CARNÉ CORDERO'),
(14, '16210291-5', 'NICOLE SCHLESINGER/FELIPE DERADO'),
(15, '16656748-3', 'MATÍAS VARGAS HERRERA'),
(16, '17266863-1', 'VALENTINA VERONICA HERRERA FIGUEROA'),
(17, '23288005-8', 'ETEL VERINGA'),
(18, '24423670-7', 'CARLOS PAEZ/FERNANDA HUMPIERRES '),
(19, '2850653-8', 'GRACIELA DEL CARMEN MIRANDA YAÑEZ'),
(20, '4289328-5', 'ANTONIO SOLA VALVERDE'),
(21, '4774405-9', 'JUAN CARLOS ZAMORA GAMEZ'),
(22, '4779335-1', 'ESTEBAN FILLOL DURAN'),
(23, '5599998-8', 'TOMAS COX FERNANDEZ'),
(24, '6025638-1', 'CENTRO ACOND. FISICO CARMEN ROZAS B EIRL'),
(25, '6035678-5', 'MARIANELA ROJAS SHEGGIA'),
(26, '6813891-4', 'RENE TAPIA'),
(27, '6975584-4', 'ALBERTO CARLOS ENRIQUE OVIEDO GARCÉS'),
(28, '7019209-8', 'ROSA ISABEL DEZA MENESES'),
(29, '7019487-2', 'XIMENA CAMPODONICO'),
(30, '7054308-7', 'GABRIEL ANTONIO VASQUEZ'),
(31, '7937577-2', 'SOLEDAD SARADUA NIETO/ANDRES WARNER'),
(32, '9355289-K', 'ANGELA MOVILLO HERMOSILLA'),
(33, '9441345-1', 'JAIME PIMENTEL SEBALLOS'),
(34, '9485837-2', 'IGOR SOLIS GATICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(16) NOT NULL,
  `contador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contador`
--

INSERT INTO `contador` (`id`, `nombre`, `contador`) VALUES
(1, 'lista', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recinto_vivienda`
--

CREATE TABLE `recinto_vivienda` (
  `tipo` int(11) NOT NULL,
  `recinto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recinto_vivienda`
--

INSERT INTO `recinto_vivienda` (`tipo`, `recinto`) VALUES
(1, 'BAÑO 1 PPAL'),
(2, 'BAÑO 1 PPAL'),
(3, 'BAÑO 1 PPAL'),
(4, 'BAÑO 1 PPAL'),
(5, 'BAÑO 1 PPAL'),
(6, 'BAÑO 1 PPAL'),
(7, 'BAÑO 1 PPAL'),
(8, 'BAÑO 1 PPAL'),
(9, 'BAÑO 1 PPAL'),
(10, 'BAÑO 1 PPAL'),
(11, 'BAÑO 1 PPAL'),
(12, 'BAÑO 1 PPAL'),
(1, 'BAÑO 2'),
(2, 'BAÑO 2'),
(3, 'BAÑO 2'),
(4, 'BAÑO 2'),
(5, 'BAÑO 2'),
(6, 'BAÑO 2'),
(7, 'BAÑO 2'),
(8, 'BAÑO 2'),
(9, 'BAÑO 2'),
(10, 'BAÑO 2'),
(11, 'BAÑO 2'),
(12, 'BAÑO 2'),
(1, 'BAÑO 3'),
(4, 'BAÑO 3'),
(9, 'BAÑO SERV'),
(11, 'BAÑO SERV'),
(12, 'BAÑO SERV'),
(3, 'BAÑO SERVICIO'),
(2, 'BAÑO VISITA'),
(3, 'BAÑO VISITA'),
(5, 'BAÑO VISITA'),
(6, 'BAÑO VISITA'),
(7, 'BAÑO VISITA'),
(8, 'BAÑO VISITA'),
(9, 'BAÑO VISITA'),
(12, 'BAÑO VISITA'),
(1, 'COCINA'),
(2, 'COCINA'),
(3, 'COCINA'),
(4, 'COCINA'),
(5, 'COCINA'),
(6, 'COCINA'),
(7, 'COCINA'),
(8, 'COCINA '),
(9, 'COCINA'),
(10, 'COCINA'),
(11, 'COCINA'),
(12, 'COCINA'),
(1, 'COMEDOR'),
(3, 'COMEDOR'),
(4, 'COMEDOR'),
(6, 'COMEDOR'),
(7, 'COMEDOR'),
(9, 'COMEDOR'),
(11, 'COMEDOR'),
(12, 'COMEDOR'),
(6, 'DOM 2'),
(1, 'DORM 1 PPAL'),
(2, 'DORM 1 PPAL'),
(3, 'DORM 1 PPAL'),
(4, 'DORM 1 PPAL'),
(5, 'DORM 1 PPAL'),
(6, 'DORM 1 PPAL'),
(7, 'DORM 1 PPAL'),
(8, 'DORM 1 PPAL'),
(9, 'DORM 1 PPAL'),
(10, 'DORM 1 PPAL'),
(11, 'DORM 1 PPAL'),
(12, 'DORM 1 PPAL'),
(1, 'DORM 2'),
(2, 'DORM 2'),
(3, 'DORM 2'),
(4, 'DORM 2'),
(5, 'DORM 2'),
(7, 'DORM 2'),
(9, 'DORM 2'),
(10, 'DORM 2'),
(11, 'DORM 2'),
(12, 'DORM 2'),
(1, 'DORM 3'),
(6, 'DORM 3'),
(7, 'DORM 3'),
(8, 'DORM 3'),
(9, 'DORM 3'),
(12, 'DORM 3'),
(9, 'DORM 4'),
(11, 'DORM SERV'),
(12, 'DORM SERV'),
(3, 'DORM SERV.'),
(4, 'DORMITORIO 3 '),
(1, 'ESTAR'),
(2, 'ESTAR'),
(3, 'ESTAR'),
(4, 'ESTAR'),
(5, 'ESTAR'),
(6, 'ESTAR'),
(7, 'ESTAR'),
(8, 'ESTAR'),
(9, 'ESTAR'),
(10, 'ESTAR'),
(11, 'ESTAR'),
(12, 'ESTAR'),
(2, 'HALL ACCESO'),
(3, 'HALL ACCESO'),
(4, 'HALL ACCESO'),
(5, 'HALL ACCESO'),
(6, 'HALL ACCESO'),
(7, 'HALL ACCESO'),
(8, 'HALL ACCESO'),
(9, 'HALL ACCESO'),
(10, 'HALL ACCESO'),
(11, 'HALL ACCESO'),
(12, 'HALL ACCESO'),
(1, 'HALL CENTRAL'),
(4, 'HOME OFFICE'),
(12, 'HOME OFFICE'),
(1, 'LOGGIA'),
(2, 'LOGGIA'),
(3, 'LOGGIA'),
(4, 'LOGGIA '),
(5, 'LOGGIA'),
(6, 'LOGGIA'),
(7, 'LOGGIA'),
(8, 'LOGGIA'),
(9, 'LOGGIA'),
(10, 'LOGGIA'),
(11, 'LOGGIA'),
(12, 'LOGGIA '),
(3, 'SALITA O DORM 3'),
(7, 'TERRAZA'),
(1, 'TERRAZA 1'),
(2, 'TERRAZA 1'),
(3, 'TERRAZA 1'),
(4, 'TERRAZA 1'),
(5, 'TERRAZA 1'),
(6, 'TERRAZA 1'),
(8, 'TERRAZA 1'),
(9, 'TERRAZA 1'),
(10, 'TERRAZA 1'),
(11, 'TERRAZA 1'),
(12, 'TERRAZA 1'),
(1, 'TERRAZA 2'),
(2, 'TERRAZA 2'),
(3, 'TERRAZA 2'),
(4, 'TERRAZA 2'),
(5, 'TERRAZA 2'),
(6, 'TERRAZA 2'),
(7, 'TERRAZA 2'),
(8, 'TERRAZA 2'),
(9, 'TERRAZA 2'),
(11, 'TERRAZA 2'),
(12, 'TERRAZA 2'),
(3, 'TERRAZA 3'),
(7, 'TERRAZA 3'),
(12, 'TERRAZA 3'),
(1, 'W.CL'),
(2, 'W.CL'),
(3, 'W.CL'),
(4, 'W.CL'),
(5, 'W.CL'),
(6, 'W.CL'),
(7, 'W.CL'),
(8, 'W.CL'),
(9, 'W.CL'),
(10, 'W.CL'),
(11, 'W.CL'),
(12, 'W.CL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `id` int(11) NOT NULL,
  `rut` varchar(255) NOT NULL,
  `departamento` int(11) NOT NULL,
  `torre` varchar(11) NOT NULL,
  `fechaReclamo` date NOT NULL,
  `fechaSolucion` date DEFAULT NULL,
  `gravedad` int(11) NOT NULL,
  `observacion` text NOT NULL,
  `recinto` varchar(255) NOT NULL,
  `detalle` text NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `lista` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `rol`) VALUES
(1, 'Jardín', 'Otoñal', 'posventajo@ia.cl', '$2y$12$jlPtAGNKD8if2iW.ChxEHOv5Ab4O1Z76BZ6aXEbMiQN7fHyfH.GfO', 'admin'),
(2, 'Luis', 'Alvarez', 'lalvarez@ia.cl', '$2y$12$L6QhTRjqs.ToLDP8kjAU/uPXNRWDzcLqMH1K46FyyVupx1WJEd4dq', NULL),
(3, 'Max', 'Villalobos', 'mvillalobos@agenciaout.cl', '$2y$12$gNxKPnjLUI30q3RBdTZlgO//2ZG4UwapGejqZJ9CQXIGA4Uw2waJa', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viviendas`
--

CREATE TABLE `viviendas` (
  `id` int(11) NOT NULL,
  `Departamento` int(11) NOT NULL,
  `Torre` varchar(1) NOT NULL,
  `Tipo` int(11) NOT NULL,
  `rut_dueno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `viviendas`
--

INSERT INTO `viviendas` (`id`, `Departamento`, `Torre`, `Tipo`, `rut_dueno`) VALUES
(1, 101, 'A', 1, '6025638-1'),
(2, 101, 'B', 11, '4779335-1'),
(3, 102, 'A', 2, NULL),
(4, 102, 'B', 10, '6813891-4'),
(5, 103, 'A', 3, '7937577-2'),
(6, 103, 'B', 9, '7054308-7'),
(7, 104, 'A', 4, '15640216-8'),
(8, 104, 'B', 8, '16656748-3'),
(9, 105, 'A', 5, NULL),
(10, 106, 'A', 12, '4289328-5'),
(11, 201, 'A', 1, '2850653-8'),
(12, 201, 'B', 11, '10365994-9'),
(13, 202, 'A', 2, NULL),
(14, 202, 'B', 10, '12893093-0'),
(15, 203, 'A', 3, '10128575-8'),
(16, 203, 'B', 9, '13357949-4'),
(17, 204, 'A', 4, '16097493-1'),
(18, 204, 'B', 8, NULL),
(19, 205, 'A', 5, NULL),
(20, 205, 'B', 7, '7019209-8'),
(21, 206, 'A', 12, '15377046-8'),
(22, 301, 'A', 1, '9485837-2'),
(23, 301, 'B', 11, '10939754-7'),
(24, 302, 'A', 2, '5599998-8'),
(25, 302, 'B', 10, '16210291-5'),
(26, 303, 'A', 3, '6035678-5'),
(27, 303, 'B', 9, '9441345-1'),
(28, 304, 'A', 4, '11635174-9'),
(29, 304, 'B', 8, '12627993-0'),
(30, 305, 'A', 5, '15377575-3'),
(31, 305, 'B', 7, '4774405-9'),
(32, 306, 'A', 6, NULL),
(33, 401, 'A', 1, '9355289-K'),
(34, 401, 'B', 11, '7019487-2'),
(35, 402, 'A', 2, NULL),
(36, 402, 'B', 10, '17266863-1'),
(37, 403, 'A', 3, '14543737-7'),
(38, 403, 'B', 9, '6975584-4'),
(39, 404, 'A', 4, '24423670-7'),
(40, 404, 'B', 8, '10355703-8'),
(41, 405, 'A', 5, NULL),
(42, 406, 'A', 6, '23288005-8');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recinto_vivienda`
--
ALTER TABLE `recinto_vivienda`
  ADD PRIMARY KEY (`recinto`(30),`tipo`);

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- Indices de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  ADD PRIMARY KEY (`Departamento`,`Torre`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `contador`
--
ALTER TABLE `contador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
