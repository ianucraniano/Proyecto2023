-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2024 a las 01:17:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmuseosancris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arqueologia`
--

CREATE TABLE `arqueologia` (
  `idArqueologia` int(11) NOT NULL,
  `IntegridadHistorica` varchar(255) NOT NULL,
  `estetica` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `observacion` longtext DEFAULT NULL,
  `Piezas_idPiezas` int(11) NOT NULL,
  `Piezas_Donante_idDonante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botanica`
--

CREATE TABLE `botanica` (
  `idBotanica` int(11) NOT NULL,
  `clasificacion` varchar(255) NOT NULL,
  `reino` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `phylum` varchar(45) DEFAULT NULL,
  `clase` varchar(255) NOT NULL,
  `orden` varchar(255) NOT NULL,
  `familia` varchar(255) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `observacion` longtext DEFAULT NULL,
  `Piezas_idPiezas` int(11) NOT NULL,
  `Piezas_Donante_idDonante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donante`
--

CREATE TABLE `donante` (
  `idDonante` int(11) NOT NULL,
  `nombreyape` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `donante`
--

INSERT INTO `donante` (`idDonante`, `nombreyape`, `fecha`) VALUES
(11, 'dario perez', '0000-00-00 00:00:00'),
(22, 'Diego Ramírez', '2024-10-14 20:58:32'),
(23, 'Camila Vargas', '2024-10-14 21:04:21'),
(24, 'Daniela Rojas', '2024-10-14 21:07:51'),
(26, 'nerea paez', '2024-10-16 21:24:45'),
(27, 'nerea paez', '2024-10-16 21:25:20'),
(28, 'Nicolás Castillo', '2024-10-16 21:27:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `geologia`
--

CREATE TABLE `geologia` (
  `idGeologia` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `observacion` longtext DEFAULT NULL,
  `Piezas_idPiezas` int(11) NOT NULL,
  `Piezas_Donante_idDonante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `icteologia`
--

CREATE TABLE `icteologia` (
  `idIcteologia` int(11) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `clasificacion` varchar(255) NOT NULL,
  `observacion` longtext DEFAULT NULL,
  `Piezas_idPiezas` int(11) NOT NULL,
  `Piezas_Donante_idDonante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oologia`
--

CREATE TABLE `oologia` (
  `idOologia` int(11) NOT NULL,
  `clasificacion` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `observacion` longtext DEFAULT NULL,
  `Piezas_idPiezas` int(11) NOT NULL,
  `Piezas_Donante_idDonante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `osteologia`
--

CREATE TABLE `osteologia` (
  `idOsteologia` int(11) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `clasificacion` varchar(255) NOT NULL,
  `observacion` longtext DEFAULT NULL,
  `Piezas_idPiezas` int(11) NOT NULL,
  `Piezas_Donante_idDonante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palenteologia`
--

CREATE TABLE `palenteologia` (
  `idPalenteologia` int(11) NOT NULL,
  `era` varchar(255) NOT NULL,
  `periodo` varchar(255) NOT NULL,
  `observacion` longtext DEFAULT NULL,
  `Piezas_idPiezas` int(11) NOT NULL,
  `Piezas_Donante_idDonante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE `piezas` (
  `idPiezas` int(11) NOT NULL,
  `numeroInventario` varchar(255) NOT NULL,
  `especie` varchar(255) DEFAULT NULL,
  `estadoConservacion` varchar(255) DEFAULT NULL,
  `fechaIngreso` date NOT NULL,
  `Cantidad_piezas` int(11) NOT NULL,
  `clasificacion` varchar(250) NOT NULL,
  `observacion` varchar(250) DEFAULT NULL,
  `usuarios_idusuarios` int(11) NOT NULL,
  `Donante_idDonante1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `piezas`
--

INSERT INTO `piezas` (`idPiezas`, `numeroInventario`, `especie`, `estadoConservacion`, `fechaIngreso`, `Cantidad_piezas`, `clasificacion`, `observacion`, `usuarios_idusuarios`, `Donante_idDonante1`) VALUES
(109, 'INV021', 'Rosa rugosa', 'bueno', '2024-10-03', 4, 'botanica', ' ', 6, 22),
(110, 'INV022', 'Aloe Vera', 'malo', '2024-10-03', 2, 'botanica', ' ', 6, 23),
(111, 'INV031', 'Ceramica Maya', 'bueno', '2024-09-12', 1, 'arqueologia', ' ', 6, 24),
(113, 'INV051', 'Granito', 'bueno', '2024-10-10', 4, 'geologia', ' ', 6, 26),
(114, 'INV052', 'Caliza', 'malo', '2024-10-03', 4, 'geologia', ' ', 6, 27),
(115, 'INV061', 'Huevo de Águila', 'bueno', '2024-09-11', 2, 'oologia', ' ', 6, 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `fecha_alta` date DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `clave` varchar(255) NOT NULL,
  `tipo_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `apellido`, `telefono`, `dni`, `fecha_alta`, `email`, `clave`, `tipo_usuario`) VALUES
(1, 'jesica', 'perez', '34086745673', '41652357', '2024-04-26', 'jesicA@gmail.com', '$2y$10$ot4aoV90PLzuCXY/F7yPVOG1wTvNl.sP.45tqF2bROLr/ikN', 'administrador'),
(3, 'maria', 'espindola', '3408674512', '43234068', '2024-04-11', 'maria@gmail.com', '$2y$10$fKumtnDyuakeY0.ByosyR.ha0eKh55dsmIFCZgoKKJA5x1DQ7VWuK', 'administrador'),
(6, 'nail', 'rak', '3408671209', '43234069', '2024-05-02', 'nail@gmail.com', '$2y$10$4x0ls5LmjlF4WVmskbseoO4Ko3vQLZkHsxi13ES1tdbrEgXKXXnJu', 'administrador'),
(31, 'Laura', ' Fernández', '3408674544', '41942796', '2024-10-02', 'lau@gmail.com', '$2y$10$SEmK0fN6.ha4JwgeLJk8PeULfuhyv/u2J1MTh52LJUJnUiCSuAub6', 'gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zoologia`
--

CREATE TABLE `zoologia` (
  `idZoologia` int(11) NOT NULL,
  `clasificacion` varchar(255) NOT NULL,
  `reino` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `phylum` varchar(255) NOT NULL,
  `clase` varchar(255) NOT NULL,
  `orden` varchar(255) NOT NULL,
  `familia` varchar(255) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `observacion` longtext DEFAULT NULL,
  `Piezas_idPiezas` int(11) NOT NULL,
  `Piezas_Donante_idDonante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arqueologia`
--
ALTER TABLE `arqueologia`
  ADD PRIMARY KEY (`idArqueologia`),
  ADD KEY `fk_Arqueologia_Piezas1_idx` (`Piezas_idPiezas`,`Piezas_Donante_idDonante`);

--
-- Indices de la tabla `botanica`
--
ALTER TABLE `botanica`
  ADD PRIMARY KEY (`idBotanica`),
  ADD KEY `fk_Botanica_Piezas1_idx` (`Piezas_idPiezas`,`Piezas_Donante_idDonante`);

--
-- Indices de la tabla `donante`
--
ALTER TABLE `donante`
  ADD PRIMARY KEY (`idDonante`);

--
-- Indices de la tabla `geologia`
--
ALTER TABLE `geologia`
  ADD PRIMARY KEY (`idGeologia`),
  ADD KEY `fk_Geologia_Piezas1_idx` (`Piezas_idPiezas`,`Piezas_Donante_idDonante`);

--
-- Indices de la tabla `icteologia`
--
ALTER TABLE `icteologia`
  ADD PRIMARY KEY (`idIcteologia`),
  ADD KEY `fk_Icteologia_Piezas1_idx` (`Piezas_idPiezas`,`Piezas_Donante_idDonante`);

--
-- Indices de la tabla `oologia`
--
ALTER TABLE `oologia`
  ADD PRIMARY KEY (`idOologia`),
  ADD KEY `fk_Oologia_Piezas1_idx` (`Piezas_idPiezas`,`Piezas_Donante_idDonante`);

--
-- Indices de la tabla `osteologia`
--
ALTER TABLE `osteologia`
  ADD PRIMARY KEY (`idOsteologia`),
  ADD KEY `fk_Osteologia_Piezas1_idx` (`Piezas_idPiezas`,`Piezas_Donante_idDonante`);

--
-- Indices de la tabla `palenteologia`
--
ALTER TABLE `palenteologia`
  ADD PRIMARY KEY (`idPalenteologia`),
  ADD KEY `fk_Palenteologia_Piezas1_idx` (`Piezas_idPiezas`,`Piezas_Donante_idDonante`);

--
-- Indices de la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD PRIMARY KEY (`idPiezas`),
  ADD UNIQUE KEY `numeroInventario` (`numeroInventario`),
  ADD UNIQUE KEY `numeroInventario_2` (`numeroInventario`),
  ADD KEY `fk_Piezas_usuarios1_idx` (`usuarios_idusuarios`),
  ADD KEY `fk_Piezas_Donante1_idx` (`Donante_idDonante1`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `zoologia`
--
ALTER TABLE `zoologia`
  ADD PRIMARY KEY (`idZoologia`),
  ADD KEY `fk_Zoologia_Piezas1_idx` (`Piezas_idPiezas`,`Piezas_Donante_idDonante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arqueologia`
--
ALTER TABLE `arqueologia`
  MODIFY `idArqueologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `botanica`
--
ALTER TABLE `botanica`
  MODIFY `idBotanica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `donante`
--
ALTER TABLE `donante`
  MODIFY `idDonante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `geologia`
--
ALTER TABLE `geologia`
  MODIFY `idGeologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `icteologia`
--
ALTER TABLE `icteologia`
  MODIFY `idIcteologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `oologia`
--
ALTER TABLE `oologia`
  MODIFY `idOologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `osteologia`
--
ALTER TABLE `osteologia`
  MODIFY `idOsteologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `palenteologia`
--
ALTER TABLE `palenteologia`
  MODIFY `idPalenteologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `piezas`
--
ALTER TABLE `piezas`
  MODIFY `idPiezas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `zoologia`
--
ALTER TABLE `zoologia`
  MODIFY `idZoologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arqueologia`
--
ALTER TABLE `arqueologia`
  ADD CONSTRAINT `fk_Arqueologia_Piezas1` FOREIGN KEY (`Piezas_idPiezas`) REFERENCES `piezas` (`idPiezas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `botanica`
--
ALTER TABLE `botanica`
  ADD CONSTRAINT `fk_botanica_Piezas1` FOREIGN KEY (`Piezas_idPiezas`) REFERENCES `piezas` (`idPiezas`) ON DELETE CASCADE;

--
-- Filtros para la tabla `geologia`
--
ALTER TABLE `geologia`
  ADD CONSTRAINT `fk_geologia_Piezas1` FOREIGN KEY (`Piezas_idPiezas`) REFERENCES `piezas` (`idPiezas`) ON DELETE CASCADE;

--
-- Filtros para la tabla `icteologia`
--
ALTER TABLE `icteologia`
  ADD CONSTRAINT `fk_icteologia_Piezas1` FOREIGN KEY (`Piezas_idPiezas`) REFERENCES `piezas` (`idPiezas`) ON DELETE CASCADE;

--
-- Filtros para la tabla `oologia`
--
ALTER TABLE `oologia`
  ADD CONSTRAINT `fk_Oologia_Piezas1` FOREIGN KEY (`Piezas_idPiezas`) REFERENCES `piezas` (`idPiezas`) ON DELETE CASCADE;

--
-- Filtros para la tabla `osteologia`
--
ALTER TABLE `osteologia`
  ADD CONSTRAINT `fk_osteologia_Piezas1` FOREIGN KEY (`Piezas_idPiezas`) REFERENCES `piezas` (`idPiezas`) ON DELETE CASCADE;

--
-- Filtros para la tabla `palenteologia`
--
ALTER TABLE `palenteologia`
  ADD CONSTRAINT `fk_palenteologia_Piezas1` FOREIGN KEY (`Piezas_idPiezas`) REFERENCES `piezas` (`idPiezas`) ON DELETE CASCADE;

--
-- Filtros para la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD CONSTRAINT `fk_Piezas_Donante1` FOREIGN KEY (`Donante_idDonante1`) REFERENCES `donante` (`idDonante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Piezas_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `zoologia`
--
ALTER TABLE `zoologia`
  ADD CONSTRAINT `fk_Zoologia_Piezas1` FOREIGN KEY (`Piezas_idPiezas`) REFERENCES `piezas` (`idPiezas`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
